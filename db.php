<?php

function getConnection()
{
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$dbconnection = new mysqli($servername, $username, $password,'transpondomatic');


	// Check connection
	if ($dbconnection->connect_error) {
	    die("Connection failed: " . $dbconnection->connect_error);
	} 

	return $dbconnection;
}

function getEmployees()
{
	$employees = [];

	$dbconnection = getConnection();

	$query = 'SELECT * FROM employee';

	$result = $dbconnection->query($query);

	while($row = $result->fetch_assoc()) {
		$employees[] = $row;
	}

	return $employees;
}

function getLendings()
{
	$lendings = [];
	
	$dbconnection = getConnection();
	
	$query ='Select * FROM lending';
	
	$result = $dbconnection->query($query);
	
	while($row =$result->fetch_assoc()){
		$lendings[]= $row;
    } 

	return $lendings;
}

function saveLending($tid, $Mitarbeiter, $ausgabedatum, $rueckgabe)
{

	
	$dbconnection = getConnection();
	
 	$stmt = $dbconnection->prepare(
 		"INSERT INTO lending (transponder_id, employee_id, issue_date, returning_date) VALUES (?, ?, ?, ?)"
 		);
 	
	$stmt->bind_param('iiss',$tid,$Mitarbeiter,$ausgabedatum,$rueckgabe);	
	
	$result=$stmt->execute();
	$stmt->close();
	$dbconnection->close();

	return $result;
}
function getTransponder()
{
		$dbconnection = getConnection();
		$transponder = [];

		$query = 'SELECT * FROM transponder';

		$result = $dbconnection->query($query);

		while($row = $result->fetch_assoc()) {
		$transponder[] = $row;
		}

		return $transponder;

}
	


	
?>



