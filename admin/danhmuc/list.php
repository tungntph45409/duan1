<section class="content" >
        <h2>Dashboard</h2>
        <!-- Content goes here -->
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Category Items</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
          <?php
                foreach($listdanhmuccha as $danhmuccha){
                    extract($danhmuccha);
                    $suadmcha="index.php?act=suadmcha&iddmcha=".$iddmcha;
                    $xoadmcha="index.php?act=xoadmcha&iddmcha=".$iddmcha;
                    $themdmcon="index.php?act=adddmcon&iddmcha=".$iddmcha;
                    echo'  
                    <tr>
                    <td>'.$iddmcha.'</td>
                    <td>'.$tendmcha.'</td>
                    
                    <td><a href="'.$suadmcha.'"><input type="button" value="UPDATE" class="gr"></a>  <a href="'.$xoadmcha.'"><input type="button" value="DELETE" class="re"></a>  <a href="'.$themdmcon.'"><input type="button" value="add" class="blu"></a></td>
                    </tr>';
                }
                ?>
           
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </section>
<div class="row"> 
        <div class="frmtitle"><h1>DANH SÁCH DANH MỤC</h1></div>
        <div class=" frmcontent"> 
        <form action="index.php?act=adddmcha" method="post">
            <input type="hidden" name="id" disabled >
            <input type="text" name="tendmcha"placeholder="Nhập tên danh mục ...">
            <input type="submit" value="THÊM MỚI" name="themmoi">
            <input type="reset" value="NHẬP LẠI">
            </form>
            <div class=" mb10 frmdsloai">
               <table>
                
                <tr>
                    <th></th>
                    <tH>MÃ </tH>
                    <tH>TÊN DANH MỤC</tH>
                    <th></th>
                </tr>
                <?php
                foreach($listdanhmuccha as $danhmuccha){
                    extract($danhmuccha);
                    $suadmcha="index.php?act=suadmcha&iddmcha=".$iddmcha;
                    $xoadmcha="index.php?act=xoadmcha&iddmcha=".$iddmcha;
                    $themdmcon="index.php?act=adddmcon&iddmcha=".$iddmcha;
                    echo'  
                    <tr>
                    <td><input type="checkbox" name="" iddmcha=""></td>
                    <td>'.$iddmcha.'</td>
                    <td>'.$tendmcha.'</td>
                    <td><a href="'.$suadmcha.'"><input type="button" value="sửa" class="gr"></a>  <a href="'.$xoadmcha.'"><input type="button" value="xóa" class="re"></a>  <a href="'.$themdmcon.'"><input type="button" value="add" class="blu"></a></td>
                    </tr>';
                }
                ?>
                
            </table>
            </div>
            <div class=" mb10">
                <input type="button" value="Chọn tất cả" class="blu mrbut">
                <input type="button" value="Bỏ chọn tất cả" class="we mrbut">
                <input type="button" value="Xóa các mục đã chọn"class="re mrbut">
               
            </div>
            <div>
            
        </div>
        </div>
        </div>


   
