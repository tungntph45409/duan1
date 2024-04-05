


<section class="content" id="size">
        <h2>Dashboard</h2>
        <!-- Content goes here -->
        <form action="index.php?act=addsize" method="post">
            <input type="hidden" name="idsize" disabled >
            <input type="text" name="namesize"placeholder="Nhập size ..."  required="required">
            <input type="submit" value="THÊM MỚI" name="themmoi">
            <input type="reset" value="NHẬP LẠI">
            </form>
        <table>
          <thead>
            <tr>
            <th></th>
                    <tH>MÃ </tH>
                    <tH>SIZE</tH>
                    <th></th>
            </tr>
          </thead>
          <tbody>
                 <?php
             foreach($listsize as $size){
                extract($size);
                $xoasize="index.php?act=xoasize&idsize=".$idsize;
                echo'  
                <tr>
                <td><input type="checkbox" name="" idsize=""></td>
                <td>'.$idsize.'</td>
                <td>'.$namesize.'</td>
                <td><a href="'.$xoasize.'"><input type="button" value="xóa" class="re"></a></td>
                </tr>';
            }

                ?>
           
            <!-- Add more rows as needed -->
          </tbody>
        </table>
        <input type="button" value="Chọn tất cả" class="blu mrbut">
                <input type="button" value="Bỏ chọn tất cả" class="we mrbut">
                <input type="button" value="Xóa các mục đã chọn"class="re mrbut">
               
      </section>
   

