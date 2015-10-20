<?php
include("database.php");
if(!isset($_COOKIE['ucook']))
{
$correct=false;
$id=$_REQUEST['user'];
$pass=md5($_REQUEST['pass']);
$result = mysqli_query($con,"SELECT * FROM staff");
while($row = mysqli_fetch_array($result))
  {
  if($row['user']==$id)
	{
     if($row['pass']==$pass)
	 {
		$correct=true;
		setcookie("ucook", $row['sid'], time()+3600);
		break;
	 }
	}
  }
if(!$correct)
{
 header('Location:index.php');
}
}
else
{
 $result = mysqli_query($con,"SELECT * FROM staff where sid=".$_COOKIE['ucook']);
 $row = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html>
<head>
 <title> Moonstone Super Speciality Hospital | Staff </title>
 <link href="css/main.css" rel="stylesheet" type="text/css" />
 <link href="css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
include("header.php");
?>
<div class="info" style="max-width:800px;">
<table width="100%" cellpadding="20" border="0">
<tr><td colspan="3"><h3 style="text-align:center;" ><?php echo "Welcome ".$row["name"]; ?></h3></td><td style="text-align:center;"><a class="submit" href="logout.php">Logout</a></td></tr>
<tr><td colspan="4"><hr /></td></tr>
<tr>
<td style="text-align:center;"><a class="submit" href="dview.php">View Doctors</a></td>
<td colspan="2" style="text-align:center;"><a class="submit" href="pview.php">Search Patients</a></td>
<td style="text-align:center;"><a class="submit" href="fview.php">View Feedback</a></td>
</tr>
<tr>
<td style="text-align:center;"><a class="submit" href="dcreate.php">Add new Doctor</a></td>
<td style="text-align:center;"><a class="submit" href="pcreate.php">Add new Patient</a></td>
<td style="text-align:center;"><a class="submit" href="screate.php">Add new Staff</a></td>
<td style="text-align:center;"><a class="submit" href="rcreate.php">Add new Report</a></td>
</tr>
</table>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>