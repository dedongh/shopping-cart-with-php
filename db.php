<?php

$servername = "localhost";
$username = "engineerskasa";
$password = '$eng$kasa';
$db = "dwaso";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>