<?php
header('Content-Type: text/html; charset=utf-8');

// Get DB connection	(require_once can't be within the class) 
require_once ('DbConn.php'); 	 

// Define project class
class Project
{
	public function __construct($projId,
								$projName,
								$fromDate,
								$toDate)
	{
			$this->projId   = $projId;
			$this->projName = $projName;
			$this->fromDate = $fromDate;
			$this->toDate   = $toDate;				
	}	
	 	 	 	
	// properties
	public $projId;
	public $projName;
	public $fromDate;
	public $toDate;	
	
	/**
	 * Add (insert) a new project
	 *
	 * @param  string $projName
	 * @param  date $fromDate
	 * @param  date $toDate
	 * @return Project|null (Returns null if no such project exists)
	 */	 
	static public function addProject($projName,$fromDate,$toDate)
	{
		$dbh = DbConn::getDbConnection();
		$sql = "INSERT INTO projects(proj_name,from_date,to_date) VALUES(?,?,?)";
		$stmt = $dbh->prepare($sql);	
        if (!$fromDate) { 
			$fromDate   = null;
	    }		
        if (!$toDate) { 
			$toDate   = null;
	    }					
		$newRow = array($projName, $fromDate, $toDate);		
        $stmt = $dbh->prepare($sql);
        $stmt->execute($newRow);
		return (Project::getProject($dbh->lastInsertId()));
		//close Db connection
        $dbh = DbConn::closeDbConnection();	
	}
	
	/**
	 * Get full project information
	 *
	 * @param  integer $projId
	 * @return array|null (Returns null if no such project exists)
	 */	 
	static public function getProject($projId)
	{
		$dbh = DbConn::getDbConnection();
		$sql = "SELECT proj_id, proj_name, ".
		       "DATE_FORMAT(from_date, '%d/%m/%Y') as f_date, DATE_FORMAT(to_date, '%d/%m/%Y') as t_date " .			   
		       "FROM projects where proj_id = ?";
		$stmt = $dbh->prepare($sql);		
		if ($stmt->execute(array($projId))){
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			$tempProject = new Project(	$result['proj_id'],
										$result['proj_name'],
										$result['f_date'],
										$result['t_date']);		            									
			return $tempProject;
		}
		else{
			return null;
		}	
        //close Db connection
        $dbh = DbConn::closeDbConnection();			
	}
	
	/**
	 * Get project list from DB
	 *
	 * Returns an array of Projects
	 *
	 * @return array|null 
			(	Returns null in case of database/sql error. 
				Returns an empty array if no projects exist.	)
	 */	
	static public function getAllProjects()
	{
        $dbh = DbConn::getDbConnection();
	    $sql = "SELECT proj_id, proj_name, ".
		       "DATE_FORMAT(from_date, '%d/%m/%Y') as f_date, DATE_FORMAT(to_date, '%d/%m/%Y') as t_date " .
		       "FROM projects ORDER BY proj_name ";
		$stmt = $dbh->prepare($sql);
	 
		if ($stmt->execute())
		{
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			foreach($result as $data){
				$tempProject = new Project(	$data['proj_id'],
										    $data['proj_name'],
										    $data['f_date'],										    
										    $data['t_date']);											
			
				$projectsList[] = $tempProject;
			}
			if (isset($projectsList)){
				return $projectsList;
				}
			else {
				  return null;
				 }
		}
		else
		{
			return null;
		}
        
		//close Db connection
        $dbh = DbConn::closeDbConnection();		
	}
	
    //	update existing project
	public function saveProject()
	{
		//open DB connection
		$dbh = DbConn::getDbConnection();				
		
		// update a row in projects table
        $sql = "UPDATE projects SET proj_name=?, from_date=?, to_date=? WHERE proj_id=?";
		$updRow = array($this->projName, $this->fromDate, $this->toDate, $this->projId );	
        //var_dump($updRow )	;	
        $stmt = $dbh->prepare($sql);
        $stmt->execute($updRow);		
		
		//close Db connection
        $dbh = DbConn::closeDbConnection();	
	}
	
	/******************************************
	*           Handle project locations
	*******************************************
	*/	
	
	/**
	 * Get project locations
	 *
	 * @param  integer $projId
	 * @return array|null (Returns null if there are no locations for the project)
	 */	 
	static public function getProjectLocations($projId)
	{
		$dbh = DbConn::getDbConnection();
		$sql = "SELECT loc_id, loc_name ".		       			   
		       "FROM proj_location where proj_id = ?";
		$stmt = $dbh->prepare($sql);	
		
		if ($stmt->execute(array($projId)))
		{
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			//var_dump($result);
			
			foreach($result as $data)
			{
				$tempLocation = new Location($data['loc_id'],
										     $data['loc_name']);											
			
				$projLocationsList[] = $tempLocation;
			}
			if (isset($projLocationsList)){
				return $projLocationsList;
				}
			else {
				  return null;
				 }
				 
		}
		else
		{
			return null;
		}		
		//close Db connection
        $dbh = DbConn::closeDbConnection();	
	}
	 
} // end class Project

// Define location class
class Location
{
	public function __construct($locId,	                            
								$locName)
	{
			$this->locId   = $locId;
			$this->locName = $locName;						
	}
	
	// properties
	public $locId;
	public $locName;
		
}	// end class Location

?>