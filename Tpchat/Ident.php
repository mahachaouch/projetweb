<html>
<head>
<title>Formulaire d'identification</title>
</head>
<?

require('connect.php');
// pensez a ouvrir une connexion vers mysql ici
// voir les exercices dans le menu de droite pour cela.

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])) {
  extract($_POST);
  // on recupère le password de la table qui correspond au login du visiteur
  $sql = "select pass from membre where pseudo='".$login."'";
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  $data = mysql_fetch_assoc($req);

  if($data['pass'] != $pass) {
    echo '<p>Mauvais login / password. Merci de recommencer</p>';
    include('login.htm'); // On inclut le formulaire d'identification
    exit;
  }
  else {
    session_start();
    $_SESSION['login'] = $login;
    
    echo 'Vous etes bien logué';
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres 
  }    
}
else {
  echo '<p>Vous avez oublié de remplir un champ.</p>';
   include('login.htm'); // On inclut le formulaire d'identification
   exit;
}


?>
<body>
<form action="login.php" method='post'>
<table align="center" border="0">
  <tr>
    <td>Login :</td>
    <td><input type="text" name="login" maxlength="250"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password"name="pass" maxlength="10"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" value="log in"></td>
	<a href="inscription.php">Inscrivez vous ici</a>
  </tr>
  
</table>
</form>


</body>
</html>