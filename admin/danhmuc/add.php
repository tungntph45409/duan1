
<div class="row">
        <div class="row frmtitle"> 
            <h1>THÊM DANH MỤC</h1> 
        </div>
        <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
        <div class="row mb10">
         <br>
        <a href="index.php?act=list_dm"><input type="button" value="Back" class="gr"></a>
        <input type="hidden" name="maloai" disabled></div>
        <div class="row mb10">
        <div class="row mb10">
     
       <label>
       <select name="iddmcha" >
       <?php
       if(is_array($dmcha)) {
        extract($dmcha);
        echo '<option value="'.$iddmcha.'">'.$tendmcha.'</option>';
    }

    ?>
       </select>
       </label>
        
        </div>
   
        <input type="text" name="tenloai" placeholder="Nhập tên danh mục ..."required="required">
        </div>
        <div class="row mb10 fl">
        <input class="addnew" type="submit" value="THÊM MỚI" name="themmoib">
        <input class="reset"type="reset" value="NHẬP LẠI">

        </div>
        <?php
        if (isset($thongbao)&&($thongbao!="")) {
            echo $thongbao;
        }
        ?>
        </form>
        
        </div>
      </div>