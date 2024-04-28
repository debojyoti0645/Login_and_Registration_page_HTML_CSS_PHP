<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "student_table";
if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
	die("Failed to connect!");
}