<?php
include("database.php");
$query=mysqli_query($con,"INSERT INTO `staff` (`sid`, `user`, `pass`, `name`) VALUES (NULL, '".$_REQUEST['user']."', '".md5($_REQUEST['pass'])."', '".$_REQUEST['name']."');");
if(!query)
{
 echo "Error!";
}
else
{
 header('Location:slogin.php');
}
?>