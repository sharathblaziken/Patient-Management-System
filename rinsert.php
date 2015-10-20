<?php
include("database.php");
$query=mysqli_query($con,"INSERT INTO `reports` (`rid`, `pid`, `time`, `result`) VALUES (NULL, '".$_REQUEST['pid']."', CURRENT_TIMESTAMP, '".$_REQUEST['result']."')");
if(!query)
{
 echo "Error!";
}
else
{
 header('Location:slogin.php');
}
?>