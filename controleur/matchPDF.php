<?php

include "./modele/bd.basket.php";


$id = $_GET['id'];

$unMatch = getMatchsById($id);



include "./modele/bd.createPDF.php";


?>