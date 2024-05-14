<?php

$hostname = "localhost";
$username = "root";  // MySQL username
$password = "";     // MySQL password
$database_name = "buku_tamu";

$db = mysqli_connect( $hostname, $username, $password,  $database_name );

if($db->connect_error) {
    echo "koneksi database error";
    die("error!");
}
?>