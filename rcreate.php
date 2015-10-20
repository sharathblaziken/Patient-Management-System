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
<tr><td colspan="2"><h1 style="text-align:center;" >Add new Report</h1></td></tr>
<form action="rinsert.php" method="post">
<tr><th>Patient's ID</th><td><input type="text" class="input" name="pid" required></td></tr>
<tr><th>Report</th><td><textarea rows="10" cols="20" class="input" name="result" required></textarea></td></tr>
<tr><td style="text-align:right;"><input type="reset" class="submit" value="Reset"></td><td><input type="submit" class="submit" value="Add"></td></tr>
</form>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>