<?php
//Kết nối với database trên phpmyadmin
$server = "localhost";
$user = "root";
$pass = "";
$database = "qlbanhang";

$conn = mysqli_connect($server, $user, $pass, $database);
if(!$conn)
{
    die("<script>alert('Kết nối thất bại.')</script?");
}
?>