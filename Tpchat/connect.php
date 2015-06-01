<?php
try
{
$connect=new PDO('mysql:host=localhost;dbname=chat','root','');

}
catch(Exception $e)
{
 die('impossible de se connecter'.$e->getMessage());
}

?>