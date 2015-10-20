<?php
include("database.php");
$query=mysqli_query($con,"INSERT INTO `patients` (`pid`, `user`, `pass`, `name`, `age`, `gender`, `blood`, `problem`, `did`, `visits`, `last`, `meds`, `amount`) VALUES (NULL, '".$_REQUEST['user']."', '".md5($_REQUEST['pass'])."', '".$_REQUEST['name']."', '".$_REQUEST['age']."', '".$_REQUEST['gender']."', '".$_REQUEST['blood']."', '".$_REQUEST['problem']."', '".$_REQUEST['did']."', '".$_REQUEST['visits']."', '".$_REQUEST['last']."', '".$_REQUEST['meds']."', '".$_REQUEST['amount']."');");
if(!query)
{
 echo "Error!";
}
else
{
 header('Location:plogin.php');
}
?>