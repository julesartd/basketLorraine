

   <ul class="menu">
      <?php

      session_start();
      if (isset($_SESSION["mailU"])) {


      ?>
         <li><a href="./?action=deconnexion"> DECONNEXION</a></li>
         <li><a href="../index.php?">ACCEUIL</a></li>
         <li><a href="index.php?action=modification">MODIFIER UN ARBITRE</a></li>
         <li><a href="index.php?action=ajout">AJOUTER UN ARBITRE</a></li>
         <li><a href="index.php?action=info">VOIR LES INFORMATIONS DES MATCHS</a></li>
      <?php

      } else {


      ?>
         <li><a href="index.php?action=connexion">CONNEXION</a></li>
      <?php
      }

      ?>

   </ul>
 