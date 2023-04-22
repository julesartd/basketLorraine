<!DOCTYPE html>
<html>
<?php
	include "./controleur/controleurPrincipal.php";
	?>

<head>
	<meta charset=UTF-8" />
	<title>Site AP2.2 Gestion des arbitres</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
	<!-- ENTETE -->
	<div id="entete">
		<?php

	

		include "./controleur/entete.php";
		?>
	</div>

	<!-- CONTENEUR CENTRAL  -->
	<div id="navigation">

		<?php

		if (isset($_GET["action"])) {
			$action = $_GET["action"];
		} else {

			$action = "defaut";
		}

		$fichier = controleurPrincipal($action);
		include "./controleur/$fichier";
		?>
	</div>



	</div>

</body>

</html>