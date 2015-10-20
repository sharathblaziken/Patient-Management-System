<table width="100%" border="1" cellpadding="5">
<tr><th>Name</th><th>Age</th><th>Gender</th><th>Blood</th><th>Problem</th><th>No.Of Visits</th><th>Last Visit</th><th>Medications</th><th>Amount</th></tr>
<?php
include("database.php");
$s=$_REQUEST['search'];
$result1 = mysqli_query($con,"SELECT * FROM patients WHERE user = '".$s."'");
while($row1 = mysqli_fetch_array($result1))
  {
	echo "<tr><td>".$row1['name']."</td><td>".$row1['age']."</td><td>".$row1['gender']."</td><td>".$row1['blood']."</td><td>".$row1['problem']."</td><td>".$row1['visits']."</td><td>".$row1['last']."</td><td>".$row1['meds']."</td><td>".$row1['amount']."</td></tr>";
  }
?>
</table>