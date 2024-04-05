<?php
if(is_array($tk)) {
    extract($tk);
}
?>
<div class="row">
        <div class="row frmtitle"> 
            <h1>UPDATE TAI KHOAN</h1> 
        </div>
        <div class="row frmcontent formtaikhoan">
        <form action="index.php?act=updatetk" method="post">
        <div class="row mb10" >
            Email
            <input type="email" name="email" value="<?=$email ?>">
          </div>
          <div class="row mb10" >
            Ten dang nhap
            <input type="text" name="user" value="<?=$user ?>">
          </div>
          <div class="row mb10" >
            Mat khau
            <input type="password" name="pass" value="<?=$pass ?>">
          </div>
          <div class="row mb10" >
            Dia chi
            <input type="text" name="address" value="<?=$address ?>">
          </div>
          <div class="row mb10" >
            Dien thoai
            <input type="text" name="tel" value="<?=$tel ?>">
          </div>
          <div class="row mb10" >
            VAI TRO
            <tr>
            <td><input type="radio" name="role" value="0" checked>CUSTUM</td>
            <td><input type="radio" name="role" value="1" > ADMIN</td>
          </tr>
          </div>
          
        <div class="row mb10 fl">
        <input type="hidden" name="id" value="<?php if (isset($id)&&($id >0)) {echo $id;}?>">
        <input type="submit" value="CAP NHAT" name="capnhat">
        <input type="reset" value="NHAP LAI">
        </div>
        <a href="index.php?act=dskh"><input type="button" value="DANH SACH"></a>
        
        <?php
        if (isset($thongbao)&&($thongbao!="")) {
            echo $thongbao;
        }
        ?>

        </form>
        </div>
        </div>
      </div>
     