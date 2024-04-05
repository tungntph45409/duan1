


<div class="concac margin-bottom">
    <div class="left-box right-box">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="concac margin-bottom">
                <div class="title-box">THÔNG TIN ĐẶT HÀNG </div>
                <div class="concac content-box form-box">
                    <table class="table1">
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <tr>
                            <td> Người đặt hàng </td>
                            <td><input type="text" name="name" value="<?= $name ?>" required="required"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?= $address ?>" required="required"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email ?>" required="required"></td>
                        </tr>
                        <tr>
                            <td> Điện thoại </td>
                            <td><input type="text" name="tel" value="<?= $tel ?>" required="required"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="concac margin-bottom">
                <div class="title-box"> PHƯƠNG THỨC THANH TOÁN </div>
                <div class="concac content-box flex-box">
                    <table class="table2">
                        <tr>
                        <td><input type="radio" name="pttt" value="cash" checked> Trả tiền khi nhận hàng </td>
            <td><input type="radio" name="pttt" value="bank_transfer"> Chuyển khoản ngân hàng </td>
            <td><input type="radio" name="pttt" value="online" onchange="onPaymentMethodChange()"> Thanh toán online </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="concac margin-bottom">
                <div class="title-box"> THÔNG TIN GIỎ HÀNG </div>
                <div class="concac content-box cart">
                    <table class="table3">
                        <tr>
                            <th>Hình </th>
                            <th>Sản phẩm </th>
                            <th> Đơn giá</th>
                            <th> Số lượng </th>
                            <th> size </th>
                            <th> biến thể màu</th>
                            <th>Thành tiền </th>
                        </tr>
                        <?php viewcart2(); ?>
                    </table>
                </div>
            </div>
            <div class="concac margin-bottom">
            <input type="submit" value="DỒNG Ý ĐẶT HÀNG" name="dongydathang" class="bill-button">
            </div>
        </form>
     
    </div>
</div>
<script>
    // Hàm được gọi khi người dùng thay đổi phương thức thanh toán
    function onPaymentMethodChange() {
        // Lấy giá trị của phương thức thanh toán được chọn
        var selectedPaymentMethod = document.querySelector('input[name="pttt"]:checked').value;

        // Lấy thẻ nút submit
        var submitButton = document.querySelector('input[name="dongydathang"]');

        // Kiểm tra giá trị của nút submit
        if (submitButton.value === "DỒNG Ý ĐẶT HÀNG") {
            // Nếu đang ở trạng thái "DỒNG Ý ĐẶT HÀNG"
            if (selectedPaymentMethod === 'online') {
                // Nếu phương thức thanh toán là "Thanh toán online", thay đổi giá trị và văn bản của nút submit
                submitButton.value = "THANH TOÁN ONLINE";
                // Thêm thuộc tính action để chuyển hướng khi submit
                submitButton.form.action = "url_of_online_payment_page";
            }
        } else {
            // Nếu đang ở trạng thái "THANH TOÁN ONLINE"
            if (selectedPaymentMethod !== 'online') {
                // Nếu phương thức thanh toán không phải "Thanh toán online", thay đổi giá trị và văn bản của nút submit
                submitButton.value = "DỒNG Ý ĐẶT HÀNG";
                // Khôi phục action về trang xử lý đơn đặt hàng mặc định
                submitButton.form.action = "url_of_order_processing_page";
            }
        }
    }
</script>

