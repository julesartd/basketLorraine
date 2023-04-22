

<div id="TableauInformation">
            <table class="table table-dark">


                <tr class="table-active">

                    <td>Numéro de la salle</td>
                    <td>Date du match</td>
                    <td>Heure du match</td>
                    <td>Nom de l'équipe 1</td>
                    <td>Nom de l'équipe 2</td>
                    <td>Nom de l'arbitre primaire</td>
                    <td>Nom de l'arbitre secondaire</td>
                    <td>Montant du déplacement de l'arbitre primaire</td>
                    <td>Montant du déplacement de l'arbitre secondaire</td>
                    <td></td>

                </tr>
                <tr>

                    <?php

                    foreach ($listeMatchs as $unMatch) {
                    ?>
                        <input class='txt' type='hidden' name='txtNum' value="<?= $unMatch["num_match"]; ?>">
                        <td><?php echo $unMatch["adresse_salle"]; ?></td>
                        <td><?php echo $unMatch["date_match"]; ?></td>
                        <td><?php echo $unMatch["heure_match"]; ?></td>
                        <td><?php echo $unMatch["equipe1"]; ?></td>
                        <td><?php echo $unMatch["equipe2"]; ?></td>
                        <td><?php echo $unMatch["arbitreP"]; ?></td>
                        <td><?php echo $unMatch["arbitreS"]; ?></td>
                        <td><?php echo $unMatch["montant_deplt_p"]; ?></td>
                        <td><?php echo $unMatch["montant_deplt_s"]; ?></td>
                        <td><a  href="index.php?action=PDF&id=<?php echo $unMatch['num_match'];  ?> " class="record">TELECHARGER</a></td>

                </tr>


                </br>
            <?php


                    }
            ?>

            </table>
        </div>