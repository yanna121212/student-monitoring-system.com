<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","student_monitoring_system");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>