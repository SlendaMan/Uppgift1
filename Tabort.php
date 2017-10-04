<?php
$title = "Ta bort medlemmar";

include("header.php");
include("dbcon.php");

if(!(isset($_POST['ID']) )) {
	include("tabortform.php");
}
else{
	if(!(empty($_POST['ID'])) ){
		$medlemsnummer=$_POST['ID'];
		
		if($con= connect_db()){
			$sql ="delete from medlem where medlemsnummer = $medlemsnummer";
			$result=$con->query($sql);
			if($result){
				echo "Medlem nr $medlemsnummer har tagits bort <br>";
				echo "<a href='main.php'> tillbaka </a>";
			}
			else{
				echo"fel";
			}
		}
		else{
			echo"det gick inte att ansluta";
		}
	}


}

?>