<?php
if(is_array($lb)) {
    extract($lb);
}
?>
<div class="row">
        <div class="row frmtitle"> 
            <h1>UPDATE BILL</h1> 
        </div>
        <div class="row frmcontent">
        <form action="index.php?act=updatebill" method="post">
        <div class="row mb10">
        <br>
        <a href="index.php?act=listbill"><input type="button" value="Back" class="gr"></a>
        </div>
        <div class="row mb10">
        Trạng thái đơn hàng <br>
        <table>
<tr>
<td><input type="radio" name="bill_status" value="1" > Đang xử lý </td> 
<td><input type="radio" name="bill_status" value="2" > Đang giao hàng </td>
<td><input type="radio" name="bill_status" value="3" > Đã giao hàng </td>

</tr>
</table>
      
        </div>
        <div class="row mb10 fl">
        <input type="hidden" name="id" value="<?php if (isset($id)&&($id >0)) {echo $id;}?>">
        <input type="submit" value="CAP NHAT" name="capnhat">
       
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