<!DOCTYPE html>
<html>
<head>
 <title> Moonstone Super Speciality Hospital | Doctor </title>
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
<tr><td colspan="4"><h1 style="text-align:center;" >List Of Doctors</h1></td></tr>
<tr><th>Name</th><th>Field of Expertise</th><th>Experience</th><th>Phone No.</th></tr>
<?php
$result1 = mysqli_query($con,"SELECT * FROM doctors");
while($row1 = mysqli_fetch_array($result1))
  {
	echo "<tr><td>".$row1['name']."</td><td>".$row1['foe']."</td><td>".$row1['exp']."</td><td>".$row1['contact']."</td></tr>";
  }
?>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>