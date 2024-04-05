<?php
if(is_array($dm)) {
    extract($dm);
}
?>
<div class="row">
        <div class="row frmtitle"> 
            <h1>UPDATE DANH MỤC</h1> 
        </div>
        <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
        <div class="fl">
        <div class="row mb10 ">
        <br>
       
        <input type="hidden" name="maloai" required="required" >
        </div>
        <div class="row mb10">
        NHẬP TÊN DANH MỤC <br>
        <input type="text" name="tenloai" value="<?php if (isset($namedm)&&($namedm !="")) {echo $namedm;}?>" required="required">
        </div>
        <div class="row mb10 fl">
        <input type="hidden" name="id" value="<?php if (isset($id)&&($id >0)) {echo $id;}?>">
        <input class="addnew" type="submit" value="CAP NHAT" name="capnhat">
        <input class="reset" type="reset" value="NHAP LAI">
        <a href="index.php?act=list_dm"><input type="button" value="Back" class="gr"></a>
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