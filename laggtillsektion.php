<?php
$title ="Sektioner";
include("header.php");
include("dbcon.php");

if(!(isset($_POST['sekkod']) && isset($_POST['Namn']) && isset($_POST['Ledare']))) {
	include("laggtillsektionform.php");
}
else {
	if(!(empty($_POST['sekkod']) || empty($_POST['Namn']) || empty($_POST['Ledare']))) {
		$Sekkod = $_POST['sekkod'];
		$Namn = $_POST['Namn'];
		$Ledare = $_POST['Ledare'];
		if($con = connect_db()) { 
			$sql ="insert into sektion values ('$Sekkod','$Namn', '$Ledare')";
			$result = $con->query($sql);
			if($result) {
				
				echo "Sektion insatt! <p><a href='main.php'>tillbaka</a></p>";
			}
			else {
				echo "<p> gick inte att lägga till</p>";
			}
		}
		else {
			echo "<p>Gick ej att ansluta till databasen</p>";
		}

	}

}

include("footer.php");
?>