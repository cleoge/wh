<?php
class DbConn{
	
	/**
	 * Get DB connection
	 *
	 * @return PDO
	 */
	static public function getDbConnection()
	{
		$dbUri  = 'mysql:host=127.0.0.1;dbname=wh';					
		$dbUser = 'whuser';
		$dbPass = 'whuser';
		//$dbUser = 'root';
		//$dbPass = '';
		// Connect, and set error mode to Exceptions
		$dbh = new PDO( $dbUri, 
		                $dbUser, 
					    $dbPass, 
					    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
					   );	 
        $dbh->exec("SET NAMES 'utf8'");					   
		return $dbh;		
	}	
 
    // close the DB connection
    static public function closeDbConnection()
	{
		unset($dbh);
	}	
}
?>