<style>
  /* CSS cho trang "My Bill" */
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
  }
  .update-button {
    background-color: #4CAF50; /* Màu xanh lá cây */
    color: #ffffff; /* Màu chữ trắng */
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.update-button:hover {
    background-color: #45a049; /* Màu xanh lá cây nhạt khi di chuột qua */
}

.cancel-button {
    background-color: #f44336; /* Màu đỏ */
    color: #ffffff; /* Màu chữ trắng */
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.cancel-button:hover {
    background-color: #d32f2f; /* Màu đỏ nhạt khi di chuột qua */
}
.detail-button {
    background-color: #3498db; /* Màu xanh dương */
    color: #ffffff; /* Màu chữ trắng */
   
    border: none;
    cursor: pointer;
    font-size: 12px;
    transition: background-color 0.3s ease; /* Hiệu ứng chuyển đổi màu nền */
}

.detail-button:hover {
    background-color: #2980b9; /* Màu xanh dương nhạt khi di chuột qua */
}

.detail-button:focus {
    outline: none; /* Loại bỏ đường viền khi nút được focus */
}

.detail-button:active {
    background-color: #1f618d; /* Màu xanh dương đậm khi nút được nhấn */
}
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

  /* td:nth-child(5) {
    color: #fff;
    padding: 8px;
    text-align: center;
    border-radius: 5px;
  } */

  /* .Hoàn {
    background-color: #28a745;
  }

  .shipping {
    background-color: #007bff;
  }

  .pending {
    background-color: #ffc107;
  }

  .cancelled {
    background-color: #dc3545;
  } */
</style>
<main>
<table>
  <tr>
    <th>MÃ ĐƠN HÀNG </th>
    <th>NGÀY ĐẶT </th>
    <th>SỐ LƯỢNG MẶT HÀNG </th>
    <th>TỔNG GIÁ TRỊ ĐƠN HÀNG </th>
    <th>Tình trạng đơn hàng </th>
    <th>Thao tác </th>
  </tr>
  <?php
  if (is_array($listbill)) {
    foreach ($listbill as $bill) {
      extract($bill);

      $ttdh = get_ttdh($bill['bill_status']);
      $countsp = loadall_cart_count($bill['id']);
      $formattedTotal = number_format($bill['total'], 0, ',', '.'); // Định dạng giá tiền có dấu phẩy

      echo '
      
      <tr>
      <td>' . $bill['id'] . '</td>
      <td>' . $bill['ngaydathang'] . '</td>
      <td>' . $countsp . '    <button type="button" name="capnhat" class="detail-button" onclick="openModal()">Xem chi tiết</button>

      </td>
      <td>' . $formattedTotal . ' VND</td>
      <td class="'. $ttdh . '">' . $ttdh . '</td>
      <td>' ;
      if (($bill['bill_status'])==0) 
        echo'
        <form action="index.php?act=updatebill" method="post">
        <input type="hidden" name="id" value="' . $bill['id'] . '">
        <input type="hidden" name="bill_status" value="5"> 
        <input type="submit" value="Hủy đơn" name="capnhat" class="cancel-button">
        </form>';
       
        if (($bill['bill_status'])!=0&&($bill['bill_status'])==3) 
        echo'
        <form action="index.php?act=updatebill" method="post">
        <input type="hidden" name="id" value="' . $bill['id'] . '">
        <input type="hidden" name="bill_status" value="4"> 
        <input type="submit" value="Đã nhận hàng" name="capnhat" class="update-button">
        </form>';
        else {
            # code...
        }
      
      echo'
      </td>
      </tr>
      ';
    }
  }
  ?>
</table>
<!-- Modal -->
<div id="detailModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Thông tin sản phẩm</h2>
        <p>Tên sản phẩm: Product Name</p>
        <p>Giá: $10</p>
        <p>Kích thước: M</p>
        <p>Màu sắc: Đen</p>
    </div>
</div>
<script>
    function openModal() {
    var modal = document.getElementById('detailModal');
    modal.style.display = 'block';
}

function closeModal() {
    var modal = document.getElementById('detailModal');
    modal.style.display = 'none';
}

// Đóng modal khi nhấn ra ngoài phần modal
window.onclick = function(event) {
    var modal = document.getElementById('detailModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

</script>
</main>
