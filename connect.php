<?php 

 // connect.php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  echo "failed to connect to DB".$conn->connect_error;
}
##?#>########