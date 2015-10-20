<?php
include("database.php");
$query=mysqli_query($con,"INSERT INTO `doctors` (`did`, `user`, `pass`, `name`, `foe`, `exp`, `contact`) VALUES (NULL, '".$_REQUEST['user']."', '".md5($_REQUEST['pass'])."', '".$_REQUEST['name']."', '".$_REQUEST['foe']."', '".$_REQUEST['exp']."', '".$_REQUEST['contact']."');");
if(!query)
{
 echo "Error!";
}
else
{
 header('Location:dlogin.php');
}
?>