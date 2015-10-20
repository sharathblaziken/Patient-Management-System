<!DOCTYPE html>
<html>
<head>
 <title> Moonstone Super Speciality Hospital</title>
 <link href="css/main.css" rel="stylesheet" type="text/css" />
 <link href="css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
include("header.php");
include("database.php");
?>
<div class="info">
<table width="100%" cellpadding="10" border="1">
<tr><td><h1 style="text-align:center;" >Search Patient by username</h1></td></tr>
<form action="table.php" method="post" target="myFrame">
<tr><td style="text-align:center;">Enter Username: <input type="text" name="search" class="input" size="30"/><input type="submit" class="submit" value="submit" /></td></tr>
</form>
<tr><td style="padding:0;"><iframe name="myFrame" frameborder="0" width="100%" height="100%" ></iframe></td></tr>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>