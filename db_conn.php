<?php

$dbhost = "localhost";
$dbuser = "pemu001";
$dbpass = "pemu007";
$dbname = "sis001";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
