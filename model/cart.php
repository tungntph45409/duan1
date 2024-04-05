 <?php

function viewcart1()
{
    global $img_path;

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if quantity is set in the POST data
        if (isset($_POST['quantity'])) {
            // Update the session data with the new quantities
            foreach ($_POST['quantity'] as $key => $newQuantity) {
                $_SESSION['mycart'][$key][4] = $newQuantity;
            }
        }
    }

    $tong = 0;
    $i = 0;

    echo '<div id="cart-container">'; // Add a container for the cart items

    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><i class="bi bi-trash"></i></a>';

        // Sử dụng number_format để thêm dấu phẩy cho giá tiền và $cart[4]
        $formatted_ttien = number_format($ttien) . ' VND';
        $formatted_quantity = number_format($cart[4]);

        echo '
        <div class="bag1">
            <img src="'.$hinh.'" alt="">
            <div class="name_">
                <a href="">'.$cart[1].'</a>
                <p>Older Kids Shoes</p>
                <p>'.$cart[7].'</p>
                <form method="post" action="">
                    <p> size '.$cart[6].' Quality <input type="number" class="quantity-input" name="quantity[]" value="'.$cart[4].'" min="1" max="10"></p>
                    </p>
                    <input type="hidden" name="product_id" value="'.$cart[0].'">
                </form>
                <span class="heart_trash">
                    <i class="bx bx-heart"></i>
                    '.$xoasp.'
                </span>
            </div>
            <div class="price_">'.$formatted_ttien.'</div>
            <hr>
        </div>';
        $i += 1;
    }

    echo '</div>'; // Close the cart container

    // Add JavaScript for auto-updating
    echo '
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var quantityInputs = document.querySelectorAll(".quantity-input");

            quantityInputs.forEach(function(input) {
                input.addEventListener("change", function() {
                    // Trigger the form submission when the quantity changes
                    input.closest("form").submit();
                });
            });
        });
    </script>
    </div>
    </div>
        <div class="sidebar">
            <form action="">
            <h4>Summary</h4>
            <div class="total">
            <div class="total_left">
                <span>Subtotal  <i class="bi bi-question-circle-fill"></i></span>
                
                <p>Estimated Delivery & Handling</p>
    
            </div>
            <div class="total_right">
                <span>'.number_format($tong).' VND</span>
                
                <p>Free</p>
            </div>
            </div>
            <div class="total boder">
                <div class="total_left">
                   
                    <p>Total</p>
    
                </div>
                <div class="total_right">
                    <span>'.number_format($tong).' VND</span>
                </div>
            </div>';
}

function viewcart2(){
    global $img_path;
    $tong=0;
    foreach ($_SESSION['mycart'] as $cart) {
    $hinh=$img_path.$cart[2];
    $ttien=$cart[3]*$cart[4];
    $tong+=$ttien;
    echo '<tr>
    <td><img src="'.$hinh.'" alt="" height="80px"></td>
    <td>'.$cart[1].'</td>
    <td>'.$cart[3].'</td>
    <td>'.$cart[4].'</td>
    <td>'.$cart[6].'</td>
    <td>'.$cart[7].'</td>
    <td>'.$ttien.   '</td>
    </tr>';
    
}
echo '<tr>
<td colspan="4">Tổng đơn hàng</td>
<td>'.$tong.'</td>

</tr>';
}
function bill_chi_tiet($listbill){
    global $img_path;
    $tong=0;
    $i=0;

    foreach ($listbill as $cart) {
    $hinh=$img_path.$cart['img'];
    $tong+=$cart['thanhtien'];
    echo '<tr>
    <td><img src="'.$hinh.'" alt="" height="80px"></td>
    <td>'.$cart['name'].'</td>
    <td>'.$cart['price'].'</td>
    <td>'.$cart['soluong'].'</td>
    <td>'.$cart['thanhtien'].'</td>
    </tr>';
    $i+=1;
}
echo '<tr>
<td colspan="4">Tổng đơn hàng</td>
<td>'.$tong.'</td>

</tr>';
}
function tongdonhang(){
    $tong=0;
    foreach ($_SESSION['mycart'] as $cart) {
    $ttien=$cart[3]*$cart[4];
    $tong+=$ttien;
  
}
return $tong;
}

function insert_bill($iduser,$name, $email, $address, $tel, $pttt, $ngaydathang,$tongdonhang){ 
$sql="insert into bill(iduser,bill_name, bill_email, bill_address,bill_tel, bill_pttt,ngaydathang, total) values('$iduser','$name', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang')";
return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong,$thanhtien,$idbill){ 
    $sql="insert into cart(iduser, idpro, img, name, price, soluong,thanhtien,idbill) values('$iduser', '$idpro', '$img', '$name', '$price', '$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
    }
    function loadone_bill($id){
        $sql="select * from bill where id=".$id;
        $bl=pdo_query_one($sql);
        return $bl;
    }
    function  update_bill($id,$bill_status){
        $sql="update bill set bill_status='".$bill_status."' where id=".$id;
        pdo_execute($sql);
    }
    function loadall_cart($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return $bill;
    }
    function loadall_cart_count($idbill){ 
        $sql="select * from cart where idbill=".$idbill; 
        $bill=pdo_query($sql); 
        return sizeof($bill);
    }
     function loadall_bill($iduser){ 
        $sql="select * from bill where iduser=".$iduser;
        $listbill=pdo_query($sql); 
        return $listbill;}
  
   function loadall_bill_admin($kyw="",$iduser=0){
            $sql="select * from bill where 1";
            if($iduser>0) $sql.=" AND iduser=".$iduser;
            if($kyw!= "") $sql.=" AND id like '%".$kyw. "%'";
            $sql.=" order by id desc";
            $listbilladmin=pdo_query($sql); 
            return $listbilladmin;}  
    function get_ttdh($n) {
        switch ($n) {
        case '0':
        $tt="Chờ xác nhận";
        break;
        case '1':
        $tt="Đang xử lý";
        break;
        case '2':
        $tt="Đang vận chuyển";
        break;
        case '3':
        $tt="Đã giao hàng";
        break;
        case '4':
        $tt="Đã nhận hàng";
        break;
        case '5':
        $tt="Hủy đơn";
        break;
        default:
        $tt="Đơn hàng mới" ;
        break;
        }
        return $tt;
        }
        function delete_cart_bill($id){
            $sql=" delete from bill where id=".$id;
            pdo_execute($sql);
        }
        function loadall_thongke(){
            $sql="select danhmuc.id as madm, danhmuc.namedm as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price )as avgprice";
            $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm"; 
            $sql.=" group by danhmuc.id order by danhmuc.id desc";
            $listtk=pdo_query($sql); 
            return $listtk;


        }
?>