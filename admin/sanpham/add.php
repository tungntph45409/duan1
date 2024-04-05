<div class="row">
        <div class="row frmtitle"> 
            <h1>THÊM MỚI SẢN PHẨM</h1> 
        </div>
        <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <a href="index.php?act=listsp"><input type="button" value="back" class="gr"></a>
        <div class="row mb10">
        TÊN SẢN PHẨM <br>
        <input type="text" name="tensp" required="required">
        </div>
        <div class="row mb10">
        GIÁ SẢN PHẨM<br>
        <input type="number" name="giasp" required="required">
        </div>
        <div class="row mb10">
        GIÁ CŨ SẢN PHẨM<br>
        <input type="number" name="giacu" required="required">
        </div>
        <div class="row mb10">
        DANH MUC<br>
        <select name="iddm">
        <option value="">vui lòng chọn 1</option>
            <?php
            foreach ($listdanhmuc as $danhmuc){
            extract($danhmuc);
            echo '<option value="'.$id.'">'.$namedm.'</option>';
            }
            ?>
        </select>
        </div>
        ẢNH SẢN PHẨM<br>
        <input type="file" name="hinh">
        </div>
        <div class="row mb10">
        MÔ TẢ SẢN PHẨM<br>
        <textarea name="mota" id="" cols="30" rows="10" required="required"></textarea>
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
       
        </form>
        </div>
        </div>
      </div>
