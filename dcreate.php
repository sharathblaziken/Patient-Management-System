<!DOCTYPE html>
<html>
<head>
 <title> Moonstone Super Speciality Hospital </title>
 <link href="css/main.css" rel="stylesheet" type="text/css" />
 <link href="css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
include("header.php");
include("database.php");
?>
<div class="info" style="max-width:500px;">
<table width="100%" cellpadding="10">
<tr><td colspan="2"><h1 style="text-align:center;" >Add new Doctor</h1></td></tr>
<form action="dinsert.php" method="post">
<tr><th>Username</th><td><input type="text" class="input" name="user" required></td></tr>
<tr><th>Password</th><td><input type="password" class="input" name="pass" required></td></tr>
<tr><th>Full Name</th><td><input type="text" class="input" name="name" required></td></tr>
<tr><th>Field of Expertise</th><td><input type="text" class="input" name="foe" required></td></tr>
<tr><th>Experience</th><td><input type="text" class="input" name="exp" required></td></tr>
<tr><th>Contact No.</th><td><input type="text" class="input" name="contact" required></td></tr>
<tr><td style="text-align:right;"><input type="reset" class="submit" value="Reset"></td><td><input type="submit" class="submit" value="Register"></td></tr>
</form>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>