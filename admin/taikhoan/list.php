
      <section class="content" id="user">
        <h2>Users</h2>
        <!-- Content goes here -->
       
        <table>
          <thead>
            <tr>
            <th></th>
                    <tH>ID</tH>
                    <tH>NAME USER </tH>
                    <tH>PASSWORD </tH>
                    <tH>EMAIL </tH>
                    <tH>ADDRESS</tH>
                    <tH>PHONE NUMBER </tH>
                    <tH>ROLE </tH>
                    <tH>ACTIONS </tH>

            </tr>
          </thead>
          <tbody>
                 <?php
               foreach($listtaikhoan as $taikhoan){
                extract($taikhoan);
                $suatk="index.php?act=suatk&id=".$id;
                $xoatk="index.php?act=xoatk&id=".$id;
                
                    echo'  
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                    <td>'.$tel.'</td>';
                    if ($role!=1) {
                        echo'<td>custum</td>';
                    }else {
                        echo'<td>admin</td>';
                    }
                   
                    echo'
                  
                    <td><a href="'.$suatk.'"><input type="button" value="sửa" class="gr"></a>  <a href="'.$xoatk.'"><input type="button" value="xóa" class="re"></a></td>
                    </tr>';
                }

                ?>
           
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </section>
   

