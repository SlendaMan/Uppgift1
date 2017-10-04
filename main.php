<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="stil.css">
</html>
<?php
$title ="Main";

include("header.php");
include("dbcon.php");

include("Meddlemmar.php");



include("footer.php");
echo " <a href='AddMeddlem.php'> Lägg till medlemmar </a> <br>";

echo " <a href='Tabort.php'> ta bort medlemmar </a> <br>";
echo " <a href='laggtillsektion.php'> lägg till sektioner </a><br> ";
echo " <a href='AddMeddlem.php'> lägg till medlemmar till sektioner </a> <br>";
echo " <a href='AddMeddlem.php'> ta bort sektioner </a> ";
?>


