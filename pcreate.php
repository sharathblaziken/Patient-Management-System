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
<div class="info" style="max-width:500px;">
<table width="100%" cellpadding="10">
<tr><td colspan="2"><h1 style="text-align:center;" >Add new Patient</h1></td></tr>
<form action="pinsert.php" method="post">
<tr><th>Username</th><td><input type="text" class="input" name="user" required></td></tr>
<tr><th>Password</th><td><input type="password" class="input" name="pass" required></td></tr>
<tr><th>Full Name</th><td><input type="text" class="input" name="name" required></td></tr>
<tr><th>Age</th><td><input type="text" class="input" name="age" size="3"required></td></tr>
<tr><th>Gender</th><td><input type="radio" class="input" name="gender" size="1" value="M"> Male <input type="radio" class="input" name="gender" size="1" value="F"> Female </td></tr>
<tr><th>Blood Group</th><td><input type="text" class="input" name="blood" required></td></tr>
<tr><th>Problem</th><td><input type="text" class="input" name="problem" required></td></tr>
<tr><th>Consulting Doctor's ID</th><td><input type="text" class="input" name="did" size="10" required></td></tr>
<tr><th>No. of Visits</th><td><input type="text" class="visits" name="visits" required></td></tr>
<tr><th>Last Visit</th><td><input type="text" class="input" name="last" required></td></tr>
<tr><th>Medications</th><td><input type="text" class="input" name="meds" required></td></tr>
<tr><th>Amount</th><td><input type="text" class="input" name="amount" required></td></tr>
<tr><td style="text-align:right;"><input type="reset" class="submit" value="Reset"></td><td><input type="submit" class="submit" value="Register"></td></tr>
</form>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>