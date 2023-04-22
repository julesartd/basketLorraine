<div id="InfoMatch">
    <?php


    if (empty($_SESSION['mailU']) || empty($_SESSION['mdpU'])) {
        header("Location:/?action=authentification&login=non");
    }


    include "modele/bd.basket.php";
    $date = "";
    include "vue/vueMatch.php";
    if (isset($_POST['datePicker'])) {

        $date = $_POST["datePicker"];
        $listeMatchs = getMatchs($date);
    }
    ?>

    <?php

    $listeDates = getDateMatch();

    foreach ($listeDates as $uneDate) {
        if (isset($_POST['datePicker'])) {
            $uneDate == $_POST['datePicker'];
        }
    }
   

    if (isset($_POST['datePicker'])) {
        
        if ($_POST['datePicker'] == $uneDate) {

            include "vue/vueInformation.php";
        }
        else {
            
            echo " <div id='msgErr' class='alert alert-danger mx-auto' role='alert'>
            Aucun match n'existe à cette date
          </div>";
        }
    ?>

    <?php
    }

    ?>

</div>