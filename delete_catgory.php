<?php
include "config.php";

$sql = "delete from danhmucsanpham where madm='" .$_GET['madm'] ."'";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location:./category.php");
?>