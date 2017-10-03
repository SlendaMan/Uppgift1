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
echo " <a href='AddMeddlem.php'> Lägg till medlemmar </a> ";
echo " <a href='AddMeddlem.php'> ta bort medlemmar </a> ";
echo " <a href='AddMeddlem.php'> lägg till sektioner </a> ";
echo " <a href='AddMeddlem.php'> lägg till medlemmar till sektioner </a> ";
echo " <a href='AddMeddlem.php'> ta bort sektioner </a> ";
?>


