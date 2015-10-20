<?php
if (isset($_COOKIE["ucook"]))
{
// set the expiration date to one hour ago
setcookie("ucook", "", time()-3600);
header('Location:index.php');
}
?>