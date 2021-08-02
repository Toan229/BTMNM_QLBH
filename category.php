<?php 
//Trang của admin
include "config.php";
session_start();

if(isset($_SESSION['username']) && $_SESSION['username']){
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $sql = "select * from danhmucsanpham";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
}else{
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html style="height: 100%;">
    <head>
        <title>Danh mục sản phẩm</title>
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" 
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="admin-body" style="height: 100%;">
        <div class="left-menu">
            <div class="user">
                <img src="./user.png" style="width: 50px; height:50px;">
                <p style="color:white; width: 50px; height:50px; text-align:center; padding:25px 10px;"><?php echo $username ?></p>
            </div>
            <div class="menu-list">
                <div class="nav-list" id="category"><i class='bx bx-folder nav_icon active'></i><a class="active" id="category-link" href="category.php">Quản lý danh mục</a></div>
                <div class="nav-list" id="product"><i class='bx bx-layer nav_logo-icon'></i><a id="product-link" href="product.php">Quản lý sản phẩm</a></div>
                <div class="nav-list" id="product"><i class='bx bx-log-out nav_icon'></i><a href="logout.php">Đăng xuất</a></div>
            </div>
        </div>
        <div class="right-content">
            <div class="table-name">
                Danh mục sản phẩm
            </div>
            <div class="add-category">
                <a href="./add_category.php">Thêm danh mục</a>                
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:30%">Mã danh mục</th>
                        <th style="width:50%">Tên danh mục</th>
                        <th>Chỉnh sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_array($result))
                        {
                    ?>
                    <tr>
                        <td style="width:30%"><?php echo $row['madm'] ?></td>
                        <td style="width:50%"><?php echo $row['tendm'] ?></td>
                        <td><a href="./edit_category.php?madm=<?php echo $row['madm'] ?>&tendm=<?php echo $row['tendm']?>">Sửa</a></td>
                        <td><a href="./delete_catgory.php?action=delete&madm=<?php echo $row['madm'] ?>">Xóa</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </body>
</html>