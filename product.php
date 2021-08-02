<?php 
//Trang của admin
include "config.php";
session_start();

if(isset($_SESSION['username']) && $_SESSION['username']){
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $sql = "select * from sanpham";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
}else{
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sản phẩm</title>
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" 
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="admin-body">   
        <div class="left-menu">
            <div class="user">
                <img src="./user.png" style="width: 50px; height:50px;">
                <p style="color:white; width: 50px; height:50px; text-align:center; padding:25px 10px;"><?php echo $username ?></p>
            </div>
            <div class="menu-list">
                <div class="nav-list" id="category"><i class='bx bx-folder nav_icon'></i><a id="category-link" href="category.php">Quản lý danh mục</a></div>
                <div class="nav-list" id="product"><i class='bx bx-layer nav_logo-icon'></i><a id="product-link" href="product.php">Quản lý sản phẩm</a></div>
                <div class="nav-list" id="product"><i class='bx bx-log-out nav_icon'></i><a href="logout.php">Đăng xuất</a></div>
            </div>
        </div>
        <div class="right-content">
        <div class="table-name">
                Danh sách sản phẩm
            </div>
            <div class="add-category">
                <a href="./add_product.php">Thêm sản phẩm</a>                
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:10%;">Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th style="width:10%;">Số lượng</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Mã danh mục</th>
                        <th style="width:5%;">Chỉnh sửa</th>
                        <th style="width:5%;">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_array($result))
                        {
                    ?>
                    <tr>
                        <td style="width:10%"><?php echo $row['masp'] ?></td>
                        <td style="width:30%"><?php echo $row['tensp'] ?></td>
                        <td><img style="width:50px;" src="images/<?=$row['image']?>"></td>
                        <td style="width:10%"><?php echo $row['sl'] ?></td>
                        <td style="width:20%"><?php echo $row['gia'] ?></td>
                        <td style="width:20%"><?php echo $row['mota'] ?></td>
                        <td style="width:10%"><?php echo $row['madm'] ?></td>
                        <td><a href="./edit_product.php?masp=<?php echo $row['masp'] ?>">Sửa</a></td>
                        <td><a href="./delete_product.php?action=delete&masp=<?php echo $row['masp'] ?>">Xóa</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </body>
</html>