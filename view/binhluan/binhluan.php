<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";

    $idpro= $_REQUEST['idpro'];

    $dsbl=loadall_binhluan($idpro);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <link rel="stylesheet" href="../css/index.css   ">

</head>
<body>
    



<div class="box1">
        <h1>bình luận</h1>

    <div class="danhmuc">
        <ul>
            
  <table>
            <?php
            
                foreach ($dsbl as $bl) {
                   extract($bl);
            
                  
                   echo '<tr><td>"'.$noidung.'"</td>';
                   echo '<td>"'.$ngaybinhluan.'"</td></tr>';
                }
            ?>
</table>
        </ul>
    </div>


</div>
<div class="boxfooter binhluanform">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" >
            <input type="hidden" name="idpro" value="<?=$idpro?>">
                               
            <input type="text" name="noidung">
            <input type="submit" name="guibinhluan" value="Gửi bình luận">
        </form>
                        </div>

                        <?php
                        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                            $noidung=$_POST['noidung'];
                            $idpro=$_POST['idpro'];
                            $iduser=$_SESSION['user']['id'];
                            $ngaybinhluan=date('h:i:sa d/m/y');

                            $noidung = $_POST['noidung'] ?? ''; // Hoặc một giá trị mặc định
                            $idpro = $_POST['idpro'] ?? '';
                            $ngaybinhluan = date('Y-m-d H:i:s'); // Ví dụ, ngày hiện tại
                            $iduser = $_SESSION['user_id'] ?? 0; // Hoặc một giá trị mặc định khác

                            insert_binhluan($noidung,$idpro,$ngaybinhluan);
                            header("Location: ".$_SERVER['HTTP_REFERER']);
                        }
                        ?>
</body>
</html>
