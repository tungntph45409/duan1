<section class="content" id="orders">

    <h2>Order</h2>
    <!-- Content goes here -->
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập id đơn hàng">
        <button type="submit" name="listok">Tìm kiếm</button>
    </form>

    <table>
        <thead>
            <tr>
                <th></th>
                <th> ID </th>
                <th> KHÁCH HÀNG </th>
                <th> SỐ LƯỢNG HÀNG </th>
                <th> GIÁ TRỊ ĐƠN HÀNG </th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>THAO TÁC </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listbilladmin as $bill) {
                extract($bill);
                $suabill = "index.php?act=suabill&id=" . $id;
                $xoabill = "index.php?act=xoabill&id=" . $id;
                $kh = $bill["bill_name"] . '
                <br>' . $bill["bill_email"] . '
                <br>' . $bill["bill_address"] . '
                <br>' . $bill["bill_tel"];
                $ttdh = get_ttdh($bill["bill_status"]);
                $countsp = loadall_cart_count($bill["id"]);
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td> ' . $bill['id'] . '</td>
                <td>' . $kh . '</td>
                <td>' . $countsp . '</td>
                <td><strong>' . $bill["total"] . '</strong> VNĐ</td>
                <td>' . $ttdh . '<a href="' . $suabill . '"><input type="button" value="cập nhật" class="gr"></a></td>
                <td>' . $bill["ngaydathang"] . '</td>
                <td> <a href="' . $xoabill . '"><input type="button" value="Xóa" class="re"></a></td>
                
                </tr>';
            }
            ?>

            <!-- Add more rows as needed -->
        </tbody>
    </table>
    <input type="button" value="Chọn tất cả" class="blu mrbut">
    <input type="button" value="Bỏ chọn tất cả" class="reset">
    <input type="button" value="Xóa các mục đã chọn" class="re mrbut">
</section>
