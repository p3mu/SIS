<?php

$user = 'pemu001';
$pass = 'pemu007';
$dbname = 'sis001';

$conn = mysqli_connect('localhost', 'root');
if (mysqli_connect_errno()) {
    exit("Failed to connect to MySQL: " . mysqli_connect_error());
}

mysqli_query($conn, "CREATE USER '${user}'@'localhost' IDENTIFIED BY '${pass}';");
mysqli_query($conn, "CREATE DATABASE ${dbname};");
mysqli_query($conn, "GRANT ALL ON ${dbname}.* TO '${user}'@'localhost';");
mysqli_close($conn);

$conn = mysqli_connect('localhost', $user, $pass, $dbname);

if (mysqli_connect_errno()) {
    exit("Failed to connect to MySQL: " . mysqli_connect_error());
}

mysqli_query($conn, "CREATE TABLE `std_info` (
	`fname` varchar(30) NOT NULL,
	`lname` varchar(20) NOT NULL,
	`session` varchar(20) NOT NULL,
	`rn` varchar(20) NOT NULL,
	`branch` varchar(20) NOT NULL,
	`year` varchar(20) NOT NULL,
	`semester` varchar(20) NOT NULL,
	`dob` varchar(20) NOT NULL,
	`address` varchar(40) NOT NULL,
	PRIMARY KEY  (`rn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
mysqli_close($conn);

echo "<b>User:</b>" . $user . '<br/>';
echo "<b>Password:</b>" . $pass . '<br/>';
echo "<b>Database:</b>" . $dbname . '<br/>';