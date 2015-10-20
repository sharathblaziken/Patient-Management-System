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
<table width="100%" cellpadding="10" border="1">
<tr><td colspan="2"><h1 style="text-align:center;" >Feedbacks</h1></td></tr>
<tr><th>S. No</th><th>Comment</th></tr>
<?php
$result1 = mysqli_query($con,"SELECT * FROM feedback");
while($row1 = mysqli_fetch_array($result1))
  {
	echo "<tr><td>".$row1['fid']."</td><td>".$row1['comment']."</td></tr>";
  }
?>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>