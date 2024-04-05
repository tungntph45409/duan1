
        <section class="content" id="Category Items">
        <h2>Category Items A</h2>
        <!-- Content goes here -->
        <form action="index.php?act=adddmcha" method="post">
            <input type="hidden" name="iddmcha" disabled  >
            <input type="text" name="tendmcha"placeholder="Nhập tên danh mục ..." required="required">
            <input type="submit" value="THÊM MỚI" name="themmoi" class="addnew">
            <input type="reset" value="NHẬP LẠI"  name="themmoi" class="reset">
            </form>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Category name </th>
              
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
                    <td><a href="'.$suadmcha.'"><input type="button" value="sửa" class="gr"></a>  <a href="'.$xoadmcha.'"><input type="button" value="xóa" class="re"></a>  <a href="'.$themdmcon.'"><input type="button" value="+ danh muc con" class="blu"></a></td>
                    </tr>';
                }
                ?>
           
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </section>
      <section class="content" id="dashboard">
        <h2>Category Items A1</h2>
        <!-- Content goes here -->
       
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Category Name A1</th>
              <th>Category Name A</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
                 <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=".$id;
                    $xoadm="index.php?act=xoadm&id=".$id;
                   
                   
                     if ($namedm!="") {
                        echo'
                        <tr>
                        <td>'.$id.'</td>
                        <td>'.$namedm.'</td>
                        <td>'.$tendmcha.'</td>
                        <td><a href="'.$suadm.'"><input type="button" value="sửa" class="gr"></a>  <a href="'.$xoadm.'"><input type="button"value="xóa" class="re"></a> </td>
                        </tr>
                        ';
                    }else {
                        
                    }
                   

                    
                }
                ?>
           
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </section>
   

