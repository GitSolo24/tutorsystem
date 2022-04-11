<?php

$servername = "localhost";
$username = "root";
$password = "";
$name = "login";

$conn = new mysqli($servername, $username, $password, $name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
