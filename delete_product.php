<?php
include "config.php";

$sql = "delete from sanpham where masp='" .$_GET['masp'] ."'";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location:./product.php");
?>