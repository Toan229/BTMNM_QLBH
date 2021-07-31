<?php
include "config.php";

session_start();
$username = null;
$password = null;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $dpassword =  $_POST['password'];
    $password = md5($dpassword); 
    $sql = "select * from taikhoan where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        if( $row['type'] == 0)
            header("Location: index.php");
        else
            header("Location: admin.php");
        exit();
    }
    else{
        echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác.')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" 
        rel="stylesheet">
    </head>
    <body>
        <form method="POST">
            <h2>Đăng nhập</h2>
            <label>User Name</label>
            <input type="text" name="username" <?php if($username != null) echo "value= $username" ?> required>
            <label>Password</label>
            <input type="password" name="password" <?php if($password != null) echo "value= $dpassword" ?> required>

            <button class="login" name="submit">Đăng nhập</button>
            <p>Chưa có tài khoản? <a href="register.php">Đăng kí</a></p>
        </form>
    </body>
</html>