<?php
include "config.php";
if (isset($_GET['action']) && $_GET['action'] == 'edit')
{
    if (isset($_POST['tendm']) && !empty($_POST['tendm'])){
        $query = "update danhmucsanpham set tendm = '" .$_POST['tendm'] ."' where madm = '" .$_POST['madm'] ."'";
        $result = mysqli_query($conn, $query);
    }
   header("Location:./category.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Chỉnh sửa danh mục</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" 
        rel="stylesheet">
        <style>
            *{
                font-family: 'Nunito', sans-serif;
                box-sizing: border-box;
            }
            body{
                display:flex; 
                justify-items: center;
                align-items: center;
                flex-direction: column;
            }
            form{
                display: flex;
                flex-direction: column;
                width: 500px;
                height: 200px;
                padding: 30px;
                align-items: left;
                text-align: left;
                align-items: center;
                font-size: 18px;
                border: 2px solid rgb(0 0 0 /50%);
            }
            div{
                width: 100%;
                padding: 10px 0px;
                display: flex;
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
            }
            label{
                width: 150px;
            }

            .input{
                width: 240px;
            }
        </style>
    </head>
    <body>
        <form  action="./edit_category.php?action=edit" method="Post" autocomplete="off">
            <div style="width:100%">
                <label>Mã danh mục :</label>
                <input class="input" type="text" name = "madm" value="<?php echo $_GET['madm']?>" readonly></span>                
            </div>
            <div>
                <label>Tên danh mục :</label>
                <input  class="input"  type="text" name="tendm" value="<?php echo $_GET['tendm']?>">
            </div>
            <div style="align-items: center; justify-content:space-between">
                <input style="padding: 6px; background:gray; border:none; cursor:pointer; width:100px;" type="submit" value="Lưu"/>
                <a href="./category.php">Thoát</a>               
            </div>
        </form>
    </body>
</html>