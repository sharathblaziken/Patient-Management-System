<!DOCTYPE html>
<html>
<head>
 <title> Moonstone Super Speciality Hospital | Patient </title>
 <link href="css/main.css" rel="stylesheet" type="text/css" />
 <link href="css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
include("header.php");
include("database.php");
$correct=false;
$id=$_REQUEST['user'];
$pass=md5($_REQUEST['pass']);
$result = mysqli_query($con,"SELECT * FROM patients");
while($row = mysqli_fetch_array($result))
  {
  if($row['user']==$id)
	{
     if($row['pass']==$pass)
	 {
		$correct=true;
		break;
	 }
	}
  }
if(!$correct)
{
 header('Location:index.php');
}
$result1 = mysqli_query($con,"SELECT * FROM doctors WHERE did=".$row['did']);
$row1 = mysqli_fetch_array($result1);
?>
<div class="info" style="max-width:500px;">
<table width="100%" cellpadding="5" border="1">
<tr><td colspan="6"><h3 style="text-align:center;" ><?php echo "Welcome ".$row["name"]; ?></h3></td></tr>
<tr><th colspan="3" >Consulting Doctor:</th><td colspan="3"><?php echo $row1["name"]; ?></td></tr>
<tr><th colspan="3" >Doctor's Phone No:</th><td colspan="3" ><?php echo $row1["contact"]; ?></td></tr>
<tr><th>Age</th><td><?php echo $row["age"]; ?></td><th>Gender</th><td><?php echo $row["gender"]; ?></td><th>Blood Group</th><td><?php echo $row["blood"]; ?></td></tr>
<tr><th colspan="3" >Problem:</th><td colspan="3" ><?php echo $row["problem"]; ?></td></tr>
<tr><th colspan="3" >Prescribed Medicines:</th><td colspan="3" ><?php echo $row["meds"]; ?></td></tr>
<tr><th colspan="6" >Reports</th></tr>
<tr><td colspan="6">
<?php $result2 = mysqli_query($con,"SELECT * FROM reports WHERE pid=".$row['pid']);
while($row2 = mysqli_fetch_array($result2))
  {
	echo $row2['result']."<br />";
  }
?>
</td></tr>
<tr><th colspan="3" >Amount:</th><td colspan="3" ><?php echo $row["amount"]; ?></td></tr>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>