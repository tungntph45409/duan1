<div class="row">
        <div class="row frmtitle"> 
            <h1>UPDATE BIEN THE</h1> 
        </div>
        <a href="index.php?act=listsp"><input type="button" value="back" class="gr"></a>
        <div class="row frmcontent">
        <form action="index.php?act=updatebt" method="post" enctype="multipart/form-data">
        <div class="row mb10">
        </div>
        <?php
if(is_array($bt)) {
    extract($bt);
}
$hinhpath="../upload/".$hinhbt;
if(is_file($hinhpath)) {
   $hinhbt="<img src='".$hinhpath."' height='80'>";
}else{
    $hinhbt="no photo";
}
?>
        <div class="row mb10">
        TÊN BIẾN THỂ <br>
        <input type="text" name="tenbt" value="<?=$namebt?>"  required="required">
        </div>
        <div class="row mb10">
        ẢNH BIẾN THỂ<br>
        <input type="file" name="hinhbt"  >
        <?=$hinhbt?>
        </div>
        <input type="hidden" name="idbt" value="<?=$idbt?>">
        <input type="submit" value="CAP NHAT" name="capnhat">
        <input type="reset" value="NHAP LAI">
        </div>
        <?php
        if (isset($thongbao)&&($thongbao!="")) {
            echo $thongbao;
        }
        ?>
        </form>
        </div>
        </div>
      </div>