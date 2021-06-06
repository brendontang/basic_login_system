<?php

$serverName = "localhost";
$dBUsername = "root";
$DBPassword = "";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $DBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}