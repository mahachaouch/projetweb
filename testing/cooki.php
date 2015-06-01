<?php
setcookie('pseudo','mahou',time() +365*24*3600, null, null, false, true)
?>
<!DOCTYPE html >
<html>
    <head>
    	<meta charset ="utf-8"/>
    	<title>my testing page </title>
    </head>
 <body>
    	<p>Hé ! Je me souviens de toi !<br />
            Tu t'appelles <?php echo $_COOKIE['pseudo']; ?>
        </p>

 </body>
</html> 