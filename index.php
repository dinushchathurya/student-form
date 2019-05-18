<html>
<head>
	<title>Student Form</title>
</head>
<body>
	<?php

	?>
<form action="insert.php" method="post">
	<table>
		<tr><th>First Name</th><td><input type="text" name="fname" placeholder="first name"></td></tr>
		<tr><th>Last Name</th><td><input type="text" name="lname" placeholder="last name"></td></tr>
		<tr><th>City / Location</th><td><input type="text" name="city" placeholder="City / Location"></td></tr>
		<tr><td><input type="submit" name="bsubmit" value="Save"></td><td><input type="reset" name="breset" value="Reset"></td></tr>
	</table>
</form>

<?php
include 'dbcon.php';
$selectquery = "select * from student";
$selres = mysqli_query($con1,$selectquery);
?>
<table>
<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>City</th></tr>

<?php
while($row = mysqli_fetch_array($selres))
{
echo "<tr><td>".$row['Stu_Id']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['city']."</td></tr>";
}
?>

</table>

</body>
</html>