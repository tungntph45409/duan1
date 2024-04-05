
<div class="row">
        <div class="row frmtitle"> 
            <h1>UPDATE SAN PHAM</h1> 
        </div>
        <a href="index.php?act=listsp"><input type="button" value="back" class="gr"></a>
        <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="row mb10">
         <select name="iddm" >
                    <option value="0" selected>Tat ca</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        if ($iddm==$id) $s="selected"; else $s="";
                        echo '<option value="'.$id.'" '.$s.'>'.$namedm.'</option>';
                    }
                    ?> 
                </select>
        </div>
        <?php
if(is_array($sp)) {
    extract($sp);
}
$hinhpath="../upload/".$img;
if(is_file($hinhpath)) {
   $hinh="<img src='".$hinhpath."' height='80'>";
}else{
    $hinh="no photo";
}
?>
         <div class="row mb10">
        TÊN SẢN PHẨM <br>
        <input type="text" name="tensp" value="<?=$name?>"  required="required">
        </div>
        <div class="row mb10">
        GIÁ SẢN PHẨM<br>
        <input type="number" name="giasp" value="<?=$price?>" required="required">
        </div>
        <div class="row mb10">
        GIÁ CŨ SẢN PHẨM<br>
        <input type="number" name="giacu" value="<?=$priceold?>" required="required">
        </div>
        <div class="row mb10">
        MÔ TẢ SẢN PHẨM<br>
        <textarea name="mota"cols="30" rows="10"  required="required"><?=$mota?></textarea>
        </div>
        <div class="row mb10">
        ẢNH SẢN PHẨM<br>
        <input type="file" name="hinh"  >
        <?=$hinh?>
        </div>
        <input type="hidden" name="id" value="<?=$id?>">
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