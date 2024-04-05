<?php
if(is_array($dmcha)) {
    extract($dmcha);
}
?>
<div class="row">
        <div class="row frmtitle">
        <a href="index.php?act=list_dm"><input type="button" value="Back" class="gr"></a> 
            <h1>UPDATE DANH MỤC CHA</h1> 
        </div>
        <div class="row frmcontent ">
        <form action="index.php?act=updatedmcha" method="post">
        <div class="fl">
        <div class="row mb10">
        <br>
        <input type="hidden" name="tendmcha">
        </div>
        <div class="row mb10">
        NHẬP TÊN DANH MỤC CHA<br>
        <input type="text" name="tendmcha" value="<?php if (isset($tendmcha)&&($tendmcha !="")) {echo $tendmcha;}?> "required="required">
        </div>
        <div class="row mb10 fl">
        <input type="hidden" name="iddmcha" value="<?php if (isset($iddmcha)&&($iddmcha >0)) {echo $iddmcha;}?>">
        <input type="submit" class="addnew" value="CAP NHAT" name="capnhat">
        <input type="reset" class="reset" value="NHAP LAI">
     
        </div>
        <?php
        if (isset($thongbao)&&($thongbao!="")) {
            echo $thongbao;
        }
        ?>
        </div>
        </form>
        </div>
        </div>
      </div>
