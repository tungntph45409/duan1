<div class="row">
        <div class="row frmtitle"> 
            <h1>THÊM BIẾN THỂ</h1> 
        </div>
        <div class="row frmcontent">
        <form action="index.php?act=start_add_bt" method="post" enctype="multipart/form-data">
        <a href="index.php?act=listsp"><input type="button" value="back" class="gr"></a>
        
        <?php
       if(is_array($sp)) {
        extract($sp);
        echo ''.$name.'';
    }

    ?>
        <input type="hidden" name="id" value=" <?=$id?>">
        <div class="fl">
        <div class="row mb10">
        TÊN BIẾN THỂ <br>
        <input type="text" name="tenbt" required="required">
        </div>
        <div class="row mb10">
        ẢNH  BIẾN THỂ <br>
        <input type="file" name="hinhbt" required="required">
        </div>
        <div class="row mb10 fl">
        <input type="submit" value="THEM MOI" name="themmoi">
        <input type="reset" value="NHAP LAI">
       
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
