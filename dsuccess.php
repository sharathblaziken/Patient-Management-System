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
$correct=false;
$id=$_REQUEST['user'];
$pass=md5($_REQUEST['pass']);
$result = mysqli_query($con,"SELECT * FROM doctors");
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
?>
<div class="info">
<table width="100%" cellpadding="5" border="1">
<tr><td colspan="6"><h3><?php echo "Welcome ".$row["name"]; ?></h3></td><td colspan="3"><h3><?php echo $row["foe"]; ?></h3></td></tr>
<tr><td colspan="9"><h1 style="text-align:center;" >Patients' Information</h1></td></tr>
<tr><th>Name</th><th>Age</th><th>Gender</th><th>Blood</th><th>Problem</th><th>No.Of Visits</th><th>Last Visit</th><th>Medications</th><th>Amount</th></tr>
<?php
$result1 = mysqli_query($con,"SELECT * FROM patients WHERE did=".$row['did']);
while($row1 = mysqli_fetch_array($result1))
  {
	echo "<tr><td>".$row1['name']."</td><td>".$row1['age']."</td><td>".$row1['gender']."</td><td>".$row1['blood']."</td><td>".$row1['problem']."</td><td>".$row1['visits']."</td><td>".$row1['last']."</td><td>".$row1['meds']."</td><td>".$row1['amount']."</td></tr>";
  }
?>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>