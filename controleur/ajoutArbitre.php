<div id="AjoutArbitre">


    <?php


    include "modele/bd.basket.php";

    if (empty($_SESSION['mailU']) || empty($_SESSION['mdpU'])) {
        header("Location:/?action=connexion&login=non");
    }



    if (isset($_POST['btnAjout'])) {
        if (isset(
            $_POST['txtNom'],
            $_POST['txtPrenom'],
            $_POST['txtAdresse'],
            $_POST['txtCP'],
            $_POST['txtVille'],
            $_POST['txtNaissance'],
            $_POST['txtFixe'],
            $_POST['txtPort'],
            $_POST['txtMail'],
            $_POST['txtClub'],
            $_POST['txtEquipe']
        )) {

            addArbitre(
                NULL,
                $_POST['txtNom'],
                $_POST['txtPrenom'],
                $_POST['txtAdresse'],
                $_POST['txtCP'],
                $_POST['txtVille'],
                $_POST['txtNaissance'],
                $_POST['txtFixe'],
                $_POST['txtPort'],
                $_POST['txtMail'],
                $_POST['txtClub'],
                $_POST['txtEquipe']
            );

            echo " <div id='msgValid' class='alert alert-success' role='alert'>
                Ajout effectué
              </div>";
        } else {
            echo " <div id='msgErr' class='alert alert-danger mx-auto' role='alert'>
                Veuillez remplir tous les champs pour ajouter un arbitre
              </div>";
        }
    }

    $listeClub = getClub();

    $listeEquipe = getEquipe();

    include "vue/vueAddArbitre.php"

    ?>

</div>