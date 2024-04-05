<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH BINH LUAN</h1>  
            </div>
        <div class="row frmcontent"> 

                <div class="row mb10 frmdsloai">
               <table>
                
                <tr>
                    <th></th>
                    <tH>MA BINH LUAN</tH>
                    <tH>ND BINH LUAN </tH>
                    <tH>ID & NAME</tH>
                    <tH>SP BINH LUAN </tH>
                    <tH>NGAY BINH LUAN</tH>
                    <th></th>
                </tr>
                <?php
                 foreach($listbinhluan as $binhluan){
                    extract($binhluan);
                    $suabl="index.php?act=suabl&idbl=".$idbl;
                    $xoabl="index.php?act=xoabl&idbl=".$idbl;
                    echo'  
                    <tr>
                    <td><input type="checkbox" name="" idbl=""></td>
                    <td>'.$idbl.'</td>
                    <td>'.$noidung.'</td><br>
                    <td> #:'.$iduser.' name:'.$user.'</td>
                    <td> #:'.$idpro.' name:'.$name.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    <td> <a href="'.$xoabl.'"><input type="button" value="xóa" class="re"></a></td>
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
        </div>
        </div>
    </div>
