<?php
require('connect.php');
$query=$connect->query("
SELECT
message.id_membre,
message.message_membre,
membre.id_membre,
membre.pseudo
FROM message
INNER JOIN membre ON membre.id_membre = message.id_membre
ORDER BY temps DESC
");
$messages=array();
while($rows=$query->fetch())
{
 $messages[]=$rows;
 }
 foreach($messages as $message)
 {
  ?>
   <a href='#'><?php echo $message['pseudo']; ?></a>
   <p><?php echo nl2br ($message['message_membre']); ?></p>
   <br>
  <?php
  }
  ?>