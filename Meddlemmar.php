<?php
$title ="Alla medlemmar";


if($con=connect_db()){
    $sql = "select namn,telefon from medlem";
    $result = $con->query($sql);
    if($result->num_rows >0){
        while($row=$result->fetch_assoc()){
            echo"<li>Namn:" . $row['namn'] . " telefon: ".$row['telefon']."</li>";
        }
    }
}



?>