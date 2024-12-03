<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q1</title>
</head>
<body>
<?php
$name = "Nur Athirah binti Rosdi";
$matric_number = "AI220159";
$course = "BIW";
$year_of_study = "3.5 years";
$address = "No.58, Jalan 15, Taman Universiti, Parit Raja, Batu Pahat, Johor";
?>
<table border="1">
   <tr>
	<td>Name</td>
	<td>:</td>
	<td><?php echo $name; ?></td>
   </tr>
   <tr>
	<td>Matric Number </td>
	<td>:</td>
	<td><?php echo $matric_number; ?></td>
   </tr>
   <tr>
	<td>Course</td>
	<td>:</td>
	<td><?php echo $course; ?></td>
   </tr>
   <tr>
	<td>Year of Study</td>
	<td>:</td>
	<td><?php echo $year_of_study; ?></td>
   </tr>
   <tr>
	<td>Address</td>
	<td>:</td>
	<td><?php echo $address; ?></td>
   </tr>
</table>
</body>
</html>