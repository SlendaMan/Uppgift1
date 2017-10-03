<?php
$title = "Ta bort medlemmar";

include("header.php");
include("dbcon.php");

if(!(isset($_POST['namn']) && isset($_POST['tel']))) {
	include("addForm.php");
}
else{
	if{!(empty($_POST['namn']) || empty($_POST['tel'])){
		$namn=$_POST['namn'];
		$tel = $_POST['tel'];
		if($con= connect_db()){
			
		}
	}

}
}

?>