<!DOCTYPE html>
<!-- Insertion user --> 
<?php

require('connect.php');

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])) {
  extract($_POST);
  $sql = "SELECT pass FROM membre WHERE pseudo='".$login."'";
  $req = $connect->query($sql);

  $data = $req->fetch();

  if($data['pass'] != $pass) {
    echo '<p>Erreur d\'identification</p>';
    include('login.php');
    exit;
  }
  else {
    session_start();
    $_SESSION['login'] = $login;
    $sqlid = "SELECT id_membre FROM membre WHERE pseudo='".$login."'";
	$req = $connect->query($sqlid);
	$dataid = $req->fetch();
	$id_membre=$dataid['id_membre'];
	$_SESSION['id_membre']=$id_membre;
    
    ?>
	<html>

	<head>
	<meta charset='UTF-8' />
	<link rel='stylesheet' href='css/style.css'>
	
	</head>

	<body>
		<div class='chat'>
		<img src="img/e-Talk.png">
			<div id="messages" class='messages'></div>
			<textarea class='entree' placeholder='Entrez votre texte ici'></textarea>
		</div>
		<script src='http://code.jquery.com/jquery-1.11.1.min.js'></script>
		<script src='js/chat.js'></script>
		<script> 
			window.setInterval(function() {
				var elem = document.getElementById('messages');
				elem.scrollTop = elem.scrollHeight;
			}, 320);
		
		</script>
		<div id="off">
		<form action="login.php" method="post">
		<input type="submit" value="Déconnexion" onClick="act()">
		</form>
		</div>
	</body>
	</html>
	<?php
  }    
}
else {
  echo '<p>Vous avez oublié de remplir un champ.</p>';
   include('login.php'); // On inclut le formulaire d'identification
   exit;
}
function act(){
session_unset ();

session_destroy ();
}

?>




