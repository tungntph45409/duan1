<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan,){
$sql="insert into binhluan (noidung, iduser, idpro,ngaybinhluan) values ('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
pdo_execute($sql);
}
function delete_binhluan($idbl){
    $sql=" delete from binhluan where idbl=".$idbl;
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql= "select * from binhluan left join taikhoan on binhluan.iduser=taikhoan.id left join sanpham on binhluan.idpro=sanpham.id where 1";
    if($idpro>0) 
    $sql.=" AND  idpro='".$idpro."'";
    $sql.= " order by idbl desc";
    $listbl=pdo_query($sql);
    return  $listbl;
}



?>