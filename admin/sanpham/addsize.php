<div class="row">
        <div class="row frmtitle"> 
            <h1>THÊM size</h1> 
        </div>
        <div class="row frmcontent">
        
        <form action="index.php?act=start_add_size" method="post">
        <a href="index.php?act=listsp"><input type="button" value="back" class="gr"></a>
       
        <?php
       if(is_array($sp)) {
        extract($sp);
        echo ''.$name.'';
    }

    ?> 
    <input type="hidden" name="spid" value="<?=$id?>" required="required">
   
         <select name="sizeid" >
        <option value="">vui lòng chọn 1</option>
            <?php
            foreach ($listsize as $size){
            extract($size);
            echo '<option value="'.$idsize.'">'.$namesize.'</option>';
            }
        ?>
        </select>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="slsize" min="1" required="required">
        <input type="submit" value="THEM MOI" name="themmoi">       
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
