<?php
session_start();
require('connect.php');
$messages=trim(htmlentities(mysql_real_escape_string($_POST['messages'])));
echo $messages;
$query=$connect->query("
INSERT INTO message(id_membre,message_membre) VALUES ('{$_SESSION['id_membre']}','{$messages}');
")

?><script src='js/chat.js'></script>