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
	 	 	 
	/*  
	private static function getDbConnection()
	{
		$dbUri  = 'mysql:host=127.0.0.1;dbname=wh';					
		$dbUser = 'whuser';
		$dbPass = 'whuser';
		// Connect, and set error mode to Exceptions
		$dbh = new PDO( $dbUri,  
		                $dbUser, 
					    $dbPass, 
					    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
					   );
		$dbh->exec("SET NAMES 'utf8'");
		return $dbh;
	}
	*/
	
	// properties
	public $projId;
	public $projName;
	public $fromDate;
	public $toDate;	
	
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
	 
		if ($stmt->execute()){
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
		else{
			return null;
		}
        
		//close Db connection
        $dbh = DbConn::closeDbConnection();		
	}
	
	// methods
	public function saveProject()
	{
		//open DB connection
		$dbh = DbConn::getDbConnection();				
		
		// insert new row in projects table
        $sql = "INSERT INTO projects (proj_id, proj_name, from_date, to_date) VALUES (?,?,?,?)";				
		//$newRow = array(NULL, $_POST['proj_name'], null, null );
		$newRow = array(NULL, $projName, null, null );		
        $stmt = $dbh->prepare($sql);
        $stmt->execute($newRow);
		//$stmt->execute((array)$newRow);
		
		//close Db connection
        $dbh = DbConn::closeDbConnection();	
	}
}