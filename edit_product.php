<?php
include "config.php";
$new_img_name = null;
$sql = "select * from danhmucsanpham";
$result = mysqli_query($conn, $sql);

if (isset($_GET['action']) && $_GET['action'] == 'edit')
{
  if (isset($_POST['submit']) && isset($_FILES['upload'])) {
	$img_name = $_FILES['upload']['name'];
	$img_size = $_FILES['upload']['size'];
	$tmp_name = $_FILES['upload']['tmp_name'];
	$error = $_FILES['upload']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			echo "<script>alert('Size của file ảnh quá lớn !')</script>";
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'images/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "update sanpham set tensp = '" .$_POST['tensp'] . "', image = '" .$new_img_name ."', sl = "
                .$_POST['sl'] . ", gia = " .$_POST['gia'].", mota = '" .$_POST['mota'] ."', madm = '" .$_POST['danhmuc'] ."'  where masp='" .$_POST['masp'] ."'" ;
                mysqli_query($conn, $sql);
                header("Location:product.php");
			}else {
				echo "<script>alert('Định dạng ảnh không chính xác.')</script>";
			}
		}
	}
}  
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sản phẩm</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" 
        rel="stylesheet">
        <style>
            *{
                font-family: 'Nunito', sans-serif;
                box-sizing: border-box;
            }
            body{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            form{
                padding: 10px;
                margin-top: 30px;
                width: 400px;
                height: 500px;
                display: flex;
                flex-direction: column;
                border: 2px solid rgb(0 0 0 /50%);
            }
            div{
                justify-items: center;
                align-items: center;
                padding: 10px;
                display: flex;
            }
            input{
                height: 30px;
                border: none;
                border-bottom: 1px solid rgb(0 0 0 /50%);
                margin: 5px;
            }
            .img-btn{
                width: 100%;
                background-color: gray;
                cursor: pointer;
            }
            a{
                text-decoration: none;
                font-size: 15px;
                background-color: gray;
                padding: 5px;
                color: black;
                width: 100px;
                cursor: pointer;
                text-align: center;
                width: 100px;
                height: 30px;
            }
        </style>
    </head>
    <body>
        <form action="./edit_product.php?action=edit" method="POST"  enctype="multipart/form-data">
                <label>Mã sản phẩm</label>
                <input type="text" name="masp" readonly value="<?php echo $_GET['masp'] ?>">                

                <label>Tên sản phẩm</label>
                <input type="text" name="tensp" required>               

                <label>Hình ảnh</label>
                <input style="height: auto; background-color: white;" class="img-btn" type="file" name="upload">                

                <label>Số lượng</label>
                <input type="text" name="sl" required>                

                <label>Giá</label>
                <input type="text" name="gia" required>                

                <label>Mô tả</label>
                <input type="text" name="mota" required>               

                <label>Mã danh mục</label>
                <select name="danhmuc">
                    <?php
                        while($row = mysqli_fetch_array($result))
                        {
                    ?>
                    <option><?php echo $row['madm'] ?></option>
                    <?php }?>
                </select>
                <div style="align-items: center; justify-content:space-between">
                    <input name="submit" style="padding: 5px;background:gray; border:none; cursor:pointer; width:100px;" type="submit" value="Sửa"/>
                    <a href="./product.php">Thoát</a>  
                </div>             
            </div>
        </form>
    </body>
</html>