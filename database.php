<?php
$servername = "remotemysql.com";
$username = "muT7NcMoQB";
$password = "g4EM8fzZ5o";
$database = "muT7NcMoQB";

// Creating connection
$connect = mysqli_connect($servername,$username,$password,$database);

// Checking connection
if (!$connect) {
    echo ("Connection failed:" . mysqli_connect_error());
}


