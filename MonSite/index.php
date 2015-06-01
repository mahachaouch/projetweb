<?php include("header.php"); ?>

<h1>Bienvenue sur mon site</h1>

<h2><?php echo "Zone réservée :" ?> </h2>
<a href="zoneAdulte.php">Acceder a la zone adulte</a>

<h2> Liste des acteurs </h2>

<?php
	$pdo = new PDO('mysql:host=localhost;dbname=monsite', 'root', '');
	$personnes = $pdo->prepare("SELECT * FROM personne");
	$personnes->execute();
?>
<table>
	<thead>
	<tr>
		<td>Nom</td><td>Prenom</td><td>Age</td>
	</tr>
	</thead>
<?php
	while($p = $personnes->fetch()) {
		echo '<tr>';
			echo '<td>'.$p['nom'].'</td><td>'.$p['prenom'].'</td><td>'.$p['age'].' ans</td>';
		echo '</tr>';
	}
?>

</table>
<?php include("footer.php"); ?>