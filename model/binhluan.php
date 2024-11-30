<?php
     function insert_binhluan($noidung,$idpro,$ngaybinhluan,$iduser){
        $sql="insert into binhluan(noidung,idpro,ngaybinhluan,iduser) values('$noidung','$idpro','$ngaybinhluan','$iduser')";
        pdo_execute($sql);
    }

?>