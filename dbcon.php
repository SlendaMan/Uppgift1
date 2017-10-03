<?php

function connect_db(){
	$host ='localhost';
	$user = 'root';
	$password = '';
	$database = 'klubben';


	$mysqli = new mysqli($host, $user,$password,$database);

	if (!$mysqli->set_charset("utf8")) {
		echo "Fel vid inställning av teckentabell utf8: %s\n". $mysqli->error;
	} 

	if ($mysqli->connect_errno) {
		echo "Misslyckades att ansluta till MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	return $mysqli;
}

?>