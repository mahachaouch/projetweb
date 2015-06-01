<html>
<LINK rel="stylesheet" type="text/css" href="css/style.css">
<body>
<div id="inscription">
<img src="img/e-Talk.png">
<form name="inscription" method="GET" ">
<table align="center" border="0">
        <tr><td><input type="text" name="pseudo" placeholder="Entrez un login"/> </td></tr>
        <tr><td><input type="text" name="ville" placeholder="Entrez un mot de passe"/></td></tr>
        <tr><td colspan="2" align="left"><input type="submit" name="valider" value="Inscription"/></td></tr>
		<tr><td colspan="2" align="left"><a href="login.php">Retour accueil</a></td></tr>
</table>

</form>
<?php 
require('connect.php');
if (  isset($_GET['pseudo'])&& isset($_GET['ville'])) {
$query=$connect->query("
INSERT INTO membre(pseudo,pass) VALUES ('{$_GET['pseudo']}','{$_GET['ville']}');
");
}
?>
</div>
<section>
	<img src="img/imgBackground.jpg" height="800px" width="1800px">
</section>
</body>
</html>