<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shoutit";

// Creating connection
$connect = mysqli_connect($servername,$username,$password,$database);

// Checking connection
if (!$connect) {
    echo ("Connection failed:" . mysqli_connect_error());
}


?>