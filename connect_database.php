<?php
$servername = "k9c843190161028.db.43190161.948.hostedresource.net:3307";
$username = "k9c843190161028";
$password = "Usap1P0_Tm_o";
$dbname = "k9c843190161028";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
