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
$f=$_REQUEST['feedback'];
mysqli_query($con,"INSERT INTO `feedback` (`fid`, `pid`, `comment`) VALUES (NULL, '1', '".$f."');");
?>
<div class="info">
<h1> Thank You for your valuable feedback! </h1><br />
<a href="index.php">Go Back to Homepage</a>
</div>

<?php
mysqli_close($con);
?>

</body>
</html>