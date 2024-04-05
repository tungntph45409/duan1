<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm,){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql=" delete from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,7";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 7";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    if ($kyw!="") {
        $sql.=" and name like '%".$kyw."%'";
    }
    if ($iddm>0) {
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql= "select * from sanpham where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function loadone_sanpham_bienthe($id){
    $sql= "select * from sanpham left join bienthe on sanpham.id=bienthe.idsp where id=".$id;
    $sp=pdo_query($sql);
    return $sp;
}
function load_ten_dm($iddm){
    if ($iddm>0) {
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $namedm;
    }else {
            return "";
        }
    
}
function load_sanpham_cungloai($id,$iddm){
    $sql="select * from sanpham where iddm=".$iddm." AND id <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_view($id){
    $sql="update sanpham set luotxem=luotxem+1 where id=".$id;
    pdo_execute($sql);
}

function update_sanpham($id,$tensp,$giasp,$giacu,$hinh,$mota,$iddm,){
    if ($hinh!="") 
    $sql="update sanpham set name='".$tensp."', price='".$giasp."', priceold='".$giacu."', img='".$hinh."', mota='".$mota."', iddm='".$iddm."' where id=".$id;
    else
    $sql="update sanpham set name='".$tensp."', price='".$giasp."', priceold='".$giacu."', mota='".$mota."', iddm='".$iddm."' where id=".$id;
    pdo_execute($sql);
}


/* <!-- bienthe -->*/
    function insert_bienthe($tenbt,$hinhbt,$id){
    $sql="insert into bienthe(namebt,hinhbt,idsp) values('$tenbt','$hinhbt','$id')";
    pdo_execute($sql);
}
function loadall_sanpham_bienthe(){
    $sql= "select * from sanpham left join bienthe on sanpham.id=bienthe.idsp order by id desc";
    $listsanpham_bienthe=pdo_query($sql);
    return $listsanpham_bienthe;
}
function  delete_bienthe($idbt){
    $sql=" delete from bienthe where idbt=".$idbt;
    pdo_execute($sql); 
}
function loadone_bienthe($idbt){
    $sql="select * from bienthe where idbt=".$idbt;
    $size=pdo_query_one($sql);
    return $size;
}
function update_bienthe($idbt,$tenbt,$hinhbt){
    if ($hinhbt!="") 
    $sql="update bienthe set namebt='".$tenbt."', hinhbt='".$hinhbt."' where idbt=".$idbt;
    else
    $sql="update bienthe set namebt='".$tenbt."'  where idbt=".$idbt;
    pdo_execute($sql);
}

/* <!-- size--> */

function insert_size($namesize){
    $sql="insert into size(namesize) values('$namesize')";
    pdo_execute($sql);

}
function delete_size($idsize){
    $sql=" delete from size where idsize=".$idsize;
    pdo_execute($sql);
    
    
}
function loadall_size(){
    $sql="select * from size order by idsize desc";
    $listsize=pdo_query($sql);
    return $listsize;
}
function loadone_size($idsize){
    $sql="select * from size where idsize=".$idsize;
    $size=pdo_query_one($sql);
    return $size;
}
function loadall_sanpham_size(){
    $sql= "select * from size left join lk_size_sp on size.idsize=lk_size_sp.sizeid left join sanpham on lk_size_sp.spid=sanpham.id order by id desc";
    $listsize_sanpham=pdo_query($sql);
    return $listsize_sanpham;
}
function loadone_sp_size_id($id){
    $sql="select * from lk_size_sp left join size on lk_size_sp.sizeid=size.idsize where spid=".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
 function insert_size_sp($spid,$sizeid,$slsize){
    $sql="insert into lk_size_sp(spid,sizeid,slsize) values('$spid','$sizeid',' $slsize')";
    pdo_execute($sql);
} 
?>
