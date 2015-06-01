<?php include("header.php"); ?>

<h1>Zone Reservee</h1>
<p>
<?php

if(isset($_POST['age'])) {

	$age = $_POST['age'];
	$age = strip_tags($age);

	$erreurs = Array();

	if(!is_numeric($age)) {
		$erreurs[] = "Veuillez entrer un nombre";
	}
	if($age < 0) {
		$erreurs[] = "Votre age doit etre positif";
	}

	if(empty($erreurs)) {
		echo 'Vous avez ' . $age . 'ans.<br>';
		if($age > 18) {
			//REquete a la base de donnees
			//Jvais recuperer une liste d'items
			//Afficher la iste
			echo 'Vous etes majeur bienvenue';
		}
		else {
			echo 'Vous etes mineur c\'est un site pour adulte';
		}
	}
	else {
		echo '<ul>';
		foreach($erreurs as $err) { // $err in $erreurs
			echo '<li>'.$err.'</li>';
		}
		echo '</ul>';
		?>
		<p>Bienvenue sur la page adulte. Veuillez donner votre age :<p>
		<form action="zoneAdulte.php" method="post">
			Age: <input name="age" type="text"><input type="submit" />
		</form>
		<?php
	}
}
else {
?>
	<p>Bienvenue sur la page adulte. Veuillez donner votre age :<p>
	<form action="zoneAdulte.php" method="post">
		Age: <input name="age" type="text"><input type="submit" />
	</form>
<?php
}

 ?>
</p>
<?php 
include("footer.php");
?>