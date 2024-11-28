<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";

    $idpro= $_REQUEST['idpro'];
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
            <?php
            echo "Nội dung bình luận ở đây".$idpro;
                // foreach ($dsdm as $dm) {
                //    extract($dm);
                //    $linkdm="index.php?act=sanpham&iddm=".$id;
                //    echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                // }
            ?>

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
                            insert_binhluan($noidung,$idpro,$ngaybinhluan);
                            header("Location: ".$_SERVER['HTTP_REFERER']);
                        }
                        ?>
</body>
</html>
