<!DOCTYPE html>
<html>
<head>
 <title> Moonstone Super Speciality Hospital | FeedBack </title>
 <link href="css/main.css" rel="stylesheet" type="text/css" />
 <link href="css/normalize.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
include("header.php");
include("database.php");
?>
<div class="info" style="max-width:500px;">
<form action="fsuccess.php" method="post">
<table width="100%">
<tr><th colspan="2"><h3> Your FeedBack is valuable.</h3></th></tr>
<tr><th colspan="2"><hr/></th></tr>
<tr><th>Enter your Feedback </th><td><textarea rows="10" cols="40" name="feedback" ></textarea></td></tr>
<tr><th>&nbsp;</th><td><input class="submit" type="submit" value="submit" /></td></tr>
</table>
</form>
</div>
<?php
mysqli_close($con);
?>

</body>
</html>