    <table class="table table-dark">

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
            <td>n° Club</td>
            <td>n° Equipe</td>
            <td></td>

        </tr>
        <tr>
            <form action="?action=modification" method="POST">
                <input class='txt' type='hidden' name='txtNum' value="<?php echo $unArbitreId["num_arbitre"]; ?>">
                <td><input class='txt' type='text' name='txtNom' value="<?php echo $unArbitreId["nom_arbitre"]; ?>"></td>
                <td><input class='txt' type='text' name='txtPrenom' value="<?php echo $unArbitreId["prenom_arbitre"]; ?>"></td>
                <td><input class='txt' type='text' name='txtAdresse' value="<?php echo $unArbitreId["adresse_arbitre"]; ?>"></td>
                <td><input class='txt' type='text' name='txtCP' value="<?php echo $unArbitreId["cp_arbitre"]; ?>"></td>
                <td><input class='txt' type='text' name='txtVille' value="<?php echo $unArbitreId["ville_arbitre"]; ?>"></td>
                <td><input class='txt' type='text' name='txtNaissance' value="<?php echo $unArbitreId["date_naiss_arbitre"]; ?>"></td>
                <td><input class='txt' type='text' name='txtFixe' value="<?php echo $unArbitreId["tel_fixe_arbitre"]; ?>"></td>
                <td><input class='txt' type='text' name='txtPort' value="<?php echo $unArbitreId["tel_port_arbitre"]; ?>"></td>
                <td><input class='txt' type='text' name='txtMail' value="<?php echo $unArbitreId["mail_arbitre"]; ?>"></td>
                <td>
                    <select class="form-select" aria-label="Default select example" name="txtClub">

                        <option value="<?php echo $unArbitreId["num_club"]; ?>" selected><?php echo $unArbitreId["nom_club"]; ?></option>
                        <?php



                        foreach ($listeClub as $unClub) {

                        ?>
                            <option value=<?php echo $unClub['num_club']; ?>><?php echo $unClub['nom_club']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <select class="form-select" aria-label="Default select example" name="txtEquipe">

                    <option value="<?php echo $unArbitreId["num_equipe"]; ?>" selected><?php echo $unArbitreId["nom_equipe"]; ?></option>

                        <?php
                        foreach ($listeEquipe as $unEquipe) {

                        ?>
                            <option value=<?php echo $unEquipe['num_equipe']; ?>><?php echo $unEquipe['nom_equipe']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
                <td><input type="submit" name="btnEnregistrer" value="ENREGISTRER" class="record"></td>

        </tr>
    </table>
    </form>