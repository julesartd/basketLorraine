<?php

include  "./modele/bd.authentification.php";


if (!isset($_POST["mailU"]) || !isset($_POST["mdpU"])) {
?>
    
    <?php
    
    include "./vue/vueAuthentification.php";

} else {

    $mailU = $_POST["mailU"];
    $mdpU = $_POST["mdpU"];



    if (isLoggedOn()) {


    ?>


    <?php
    } else {
        if (login($mailU, $mdpU)==true) {
            header("Location:/");
            
        } else {
            echo " <div id='msgErr' class='alert alert-danger mx-auto' role='alert'>
            Identifiants incorrect.
          </div>";
       
        }


    ?>


<?php
    }
}

if (isset($_GET['login']) && $_GET['login'] == 'non') {
    
    echo " <div id='msgErr' class='alert alert-danger mx-auto' role='alert'>
        Veuillez vous connecter pour accéder à cette page
      </div>";
}



?>