<?php
$servername = "remotemysql.com";
$username = "muT7NcMoQB";
$password = "";
$database = "muT7NcMoQB";

// Creating connection
$connect = mysqli_connect($servername,$username,$password,$database);

// Checking connection
if (!$connect) {
    echo ("Connection failed:" . mysqli_connect_error());
}


