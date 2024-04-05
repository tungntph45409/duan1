<div class="boxtrai mr">
<div class="row mb ">
<div class="boxtitle">CAM ON</div>
<div class="row boxcontent" style="text-align:center">
<h2>Cám ơn quý khách đã đặt hàng! </h2>
</div>
</div>
<?php
if(isset($bill)&&(is_array($bill))){
    extract($bill);
}
?>
<div class="row mb ">
<div class="boxtitle"> THÔNG TIN ĐƠN HÀNG </div> 
<div class="row boxcontent" style="text-align:center">
<li> - Mã đơn hàng: DAM-<?=$bill['id'];?></li>
<li> - Ngày đặt hàng:  <?=$bill['ngaydathang'];?> </li>
<li> - Tổng đơn hàng:  <?=$bill[ 'total' ];?></li>
<il> - Phương thức thanh toán: <?=$bill['bill_pttt'];?></li>
</div>
</div>
<div class="row mb">
<div class="boxtitle"> THÔNG TIN ĐẶT HÀNG </div>
<div class="row boxcontent billform">
<style>
   .row .boxcontent  li{
    
   }
   .boxcontent {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        margin: 20px;
        text-align: center;
        list-style-type: none;
    }

    .boxcontent li {
        font-size: 18px;
        margin: 10px 0;
    }

    /* Tùy chỉnh màu sắc và kiểu chữ theo ý muốn của bạn */
    .boxcontent {
        color: #333;
    }

    /* Hiệu ứng hover khi di chuột */
    .boxcontent:hover {
        background-color: #e0e0e0;
    }
        .form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

     
    </style>
<table>
            <tr>
                <th colspan="2">Thông Tin Đặt Hàng</th>
            </tr>
            <tr>
                <td><label for="name">Người Đặt Hàng:</label></td>
                <td><?=$bill['bill_name'];?> </td>
            </tr>
            <tr>
                <td><label for="address">Địa Chỉ:</label></td>
                <td><?=$bill['bill_address'];?></td>
            </tr>
            <tr>
                <td><label for="email">Địa Chỉ Email:</label></td>
                <td><?=$bill['bill_email'];?></td>
            </tr>
            <tr>
            <td><label for="phone">Số Điện Thoại:</label></td>
                <td><?=$bill['bill_tel'];?></td>
            </tr>
        </table>


</div>

<div class="row mb">
<div class="boxtitle">CHI TIẾT GIỎ HÀNG </div>
<div class="row boxcontent cart">
<table>
<tr>
<th>Hình </th>
<th>Sản phẩm </th>
<th> Đơn giá</th>
<th> Số lượng </th>
<th>Thành tiền </th>
</tr>
<?php
bill_chi_tiet($billct);
?>
</table>
</div>
</div>
</div>
</div>
<div class="boxphai">

</div>
</div>
</div>