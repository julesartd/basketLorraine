<h1 id="listArb">Liste des arbitres</h1>

<table class="table table-dark tableauArbitre">


    <tr class="table-active">

        <td>Nom</td>
        <td>Prenom</td>
        <td>Adresse</td>
        <td>Code Postal</td>
        <td>Ville</td>
        <td>Date de naissance</td>
        <td>Telephone fixe</td>
        <td>Telephone portable</td>
        <td>Mail</td>
        <td>Nom du Club</td>
        <td>Nom de l'équipe</td>
        <td></td>
        <td></td>
    </tr>
    <tr>

        <?php
        foreach ($listeArbitres as $unArbitre) {
        ?>

            <td><?php echo $unArbitre["nom_arbitre"]; ?></td>
            <td><?php echo $unArbitre["prenom_arbitre"]; ?></td>
            <td><?php echo $unArbitre["adresse_arbitre"]; ?></td>
            <td><?php echo $unArbitre["cp_arbitre"]; ?></td>
            <td><?php echo $unArbitre["ville_arbitre"]; ?></td>
            <td><?php echo $unArbitre["date_naiss_arbitre"]; ?></td>
            <td><?php echo $unArbitre["tel_fixe_arbitre"]; ?></td>
            <td><?php echo $unArbitre["tel_port_arbitre"]; ?></td>
            <td><?php echo $unArbitre["mail_arbitre"]; ?></td>
            <td><?php echo $unArbitre["nom_club"]; ?></td>
            <td><?php echo $unArbitre["nom_equipe"]; ?></td>
            <td><a href="index.php?action=modification&arbitre=<?php echo $unArbitre['num_arbitre']; ?>" class="btnm">MODIFIER</a></td>
            <td><a href="index.php?action=modification&idSuppr=<?php echo $unArbitre['num_arbitre']; ?>" class="btns">SUPPRIMER</a></td>
    </tr>


    </br>
<?php
        }

?>
</table>

