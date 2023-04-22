<form action="?action=ajout" method="POST" class="lb mb-3">
        <h1 id="lstA">Ajouter un arbitre</h1>
        </br>
        <label class="form-label"> Nom : </label></br>
        <input type="text" name='txtNom'></br>
        </br>
        <label class="form-label"> Prénom : </label></br>
        <input type="text" name='txtPrenom'></br>
        </br>
        <label class="form-label"> Adresse Postale : </label></br>
        <input type="text" name='txtAdresse'></br>
        </br>
        <label class="form-label"> Code Postale : </label></br>
        <input type="text" name="txtCP"></br>
        </br>
        <label class="form-label"> Ville : </label></br>
        <input type="text" name="txtVille"></br>
        </br>
        <label class="form-label"> Date de naissance : </label></br>
        <input type="date" name="txtNaissance"></br>
        </br>
        <label class="form-label"> Téléphone Fixe : </label></br>
        <input type="text" name="txtFixe"></br>
        </br>
        <label class="form-label"> Téléphone Portable : </label></br>
        <input type="text" name="txtPort"></br>
        </br>
        <label class="form-label"> Adresse mail : </label></br>
        <input type="text" name="txtMail"></br>
        </br>


        <select class="form-select" aria-label="Default select example" name="txtClub">
            <option selected>Sélectionnez un club</option>
            <?php

            foreach ($listeClub as $unClub) {

            ?>
                <option value=<?php echo $unClub['num_club']; ?>><?php echo $unClub['nom_club']; ?></option>
            <?php
            }
            ?>
        </select>


        </br>


            <select class="form-select" aria-label="Default select example" name="txtEquipe">

                <option selected>Sélectionnez une équipe</option>

                <?php
                foreach ($listeEquipe as $unEquipe) {

                ?>

                    <option value=<?php echo $unEquipe['num_equipe']; ?>><?php echo $unEquipe['nom_equipe']; ?></option>
                <?php
                }


                ?>
            </select>




        </br>
        <input type="submit" value="AJOUTER" class="btna" name="btnAjout">
        <input type="submit" value="ANNULER" class="btnc" name="btnCancel">
    </form>