<?php 
include "config.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);     
    $cpassword = md5($_POST['cpassword']);
    if($password == $cpassword)
    {
        $sql = "insert into taikhoan(username, password, type) values('$username', '$password', 0);";
        $result = mysqli_query($conn, $sql);
        if(!$result)
        {
            echo "<script>alert('Tài khoản đã tồn tại')</script>";
        }else{
            echo "<script type='text/javascript'>alert('Tạo tài khoản thành công !');
                window.location='login.php';
                </script>";
        }
    }else{
        echo "<script>alert('Xác nhận mật khẩu không chính xác.')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng kí tài khoản</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" 
        rel="stylesheet">
    </head>
    <body>
        <form class="register" action="" method="POST">
            <h2>Đăng kí tài khoản</h2>
            <label>User Name</label>
            <input type="text" name="username" required>
            <label>Password</label>
            <input type="password" name="password"  required>
            <label>Confirm Password</label>
            <input type="password" name="cpassword"  required>
            <button class="login" name="submit">Đăng kí</button>
            <p>Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
        </form>
    </body>
</html>