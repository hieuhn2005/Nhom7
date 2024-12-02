<?php
  function insert_binhluan($noidung = '', $idpro = 0, $ngaybinhluan = '', $iduser = 0) {
    $sql = "insert into binhluan(noidung, idpro, ngaybinhluan, iduser) values('$noidung', '$idpro', '$ngaybinhluan', '$iduser')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql="select * from binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
function delete_binhluan($id){
  $sql="delete from binhluan where id=".$id;
  pdo_execute($sql);
}
?>