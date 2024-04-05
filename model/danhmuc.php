<?php
/* DANH MUC CHA
 */function insert_danhmuc_cha($tendmcha){
    $sql="insert into danhmuccha(tendmcha) values('$tendmcha')";
    pdo_execute($sql);

}
function delete_danhmuc_cha($iddmcha){
    $sql=" delete from danhmuccha where iddmcha=".$iddmcha;
    pdo_execute($sql);
    
}
function delete_sanpham_danhmuc_danhmuc_cha($iddmcha){
    $sql=" delete from danhmuc where idcha=".$iddmcha;
    pdo_execute($sql);
}
function loadall_danhmuc_cha(){
    $sql="select * from danhmuccha order by iddmcha desc";
    $listdanhmuccha=pdo_query($sql);
    return $listdanhmuccha;
}
function loadone_danhmuc_cha($iddmcha){
    $sql="select * from danhmuccha where iddmcha=".$iddmcha;
    $dmcha=pdo_query_one($sql);
    return $dmcha;
}
function update_danhmuc_cha($iddmcha,$tendmcha){
    $sql="update danhmuccha set tendmcha='".$tendmcha."' where iddmcha=".$iddmcha;
    pdo_execute($sql);
}
/* DANH MUC CON
 */function insert_danhmuc($tenloai,$iddmcha){
    $sql="insert into danhmuc(namedm,idcha) values('$tenloai','$iddmcha')";
    pdo_execute($sql);

}
function delete_danhmuc($id){
    $sql=" delete from danhmuc where id=".$id;
    pdo_execute($sql);
    
}
function loadall_danhmuc(){
    $sql= "select * from danhmuccha left join danhmuc on danhmuccha.iddmcha=danhmuc.idcha order by iddmcha desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql="select * from danhmuc where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function loadone_danhmuc_sanpham($iddm){
    $sql="select * from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    return $dm;
}
function loadone_danhmuc_danhmuccha($iddmcha){
    $sql="select * from danhmuc where idcha=".$iddmcha;
    $listdmc=pdo_query_one($sql);
    return$listdmc;
}
function update_danhmuc($id,$tenloai){
    $sql="update danhmuc set namedm='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}
?>