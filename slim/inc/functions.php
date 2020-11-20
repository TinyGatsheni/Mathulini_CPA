

<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

class Functions{

	//Function to get all files form the dwdev.dev_log_sapgl table for a specific date
	
	public function executeQuery($query){
		$count = 0;
		$arr = array();
		try {
			global $connect;
			$stmt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare($query);
			$stmt->execute();
		    
			// set the resulting array to associative
			$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			$data = $stmt->fetchAll();

			if(count($data) > 0){
				
				return json_encode(array("rows" =>count($data) ,"data" =>($data));
			}else{
				return false;
			}

		} catch (PDOException $pdoex) {
			echo "Database Error : " . $pdoex->getMessage();
		}
	}

	public function executeNonQuery($query){

		try {
			global $connect;
			$stmt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare($query);
			$stmt->execute();
		    
			// set the resulting array to associative
			$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			if($result){
				return true;
			}else{
				return false;
			}

			return oci_execute($statement);

		} catch (PDOException $pdoex) {
			echo "Database Error : " . $pdoex->getMessage();
		}

	}

?>