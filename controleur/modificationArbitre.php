<div id="ModifArbitre">

    <?php
    include "modele/bd.basket.php";


    $listeArbitres = getArbitres();
    $listeEquipe = getEquipe();
    $listeClub = getClub();


    include "vue/vueArbitre.php";


    if (empty($_SESSION['mailU']) || empty($_SESSION['mdpU'])) {
        header("Location:/?action=authentification&login=non");
    }

    if (isset($_GET['arbitre'])) {
        $id = $_GET["arbitre"];

        $unArbitreId = getArbitreById($id);

        include "vue/vueModif.php";
    }

    if (isset($_POST['btnEnregistrer'])) {


        updateArbitres(
            $_POST['txtNum'],
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

    }

    if (isset($_GET['idSuppr'])) {
        $idSuppr = $_GET["idSuppr"];
        deleteArbitre(($idSuppr));
        deleteDeplacement($idSuppr);



    }







    ?>



</div>