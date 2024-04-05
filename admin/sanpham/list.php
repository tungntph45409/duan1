

<style>
        /* Set the initial visibility of sections */
        .content {
            display: none;
        }

        #product {
            display: block;
        }
    </style>
    <!-- Add buttons to toggle between sections -->
    <button onclick="showSection('product')">Show Product Section</button>
    <button onclick="showSection('bienthe')">Show Biển Thể Section</button>
    <button onclick="showSection('size_product')">Show Size Product Section</button>

    <section class="content" id="product">
    <h2>product</h2>
        <!-- Content goes here -->
        <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw" placeholder="Nhập tên sản phẩm cần tìm ..." required="required">
                    <select name="iddm" >
                        <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$namedm.'</option>';
            }
            ?> 
                    </select>
                    <input type="submit" name="listok" value="Tìm kiếm" class="addnew">
                </form>
        <table>
          <thead>
            <tr>
            <th></th>
                    <tH>MÃ </tH>
                    <tH>TÊN SẢN PHẨM</tH>
                    <tH>HÌNH </tH>
                    <tH>GIÁ</tH>
                    <tH>GIÁ CŨ</tH>
                    <tH>LƯỢT XEM</tH>
                    <th><a href="index.php?act=addsp"><input type="button" value="Nhập thêm" class="blu mrbut"></a></th>
            </tr>
          </thead>
          <tbody>
          <?php
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $add_bt="index.php?act=add_bt&id=".$id;
                    $add_size="index.php?act=add_size&id=".$id;
                    $hinhpath="../upload/".$img;
                    if (is_file($hinhpath)) {
                       $hinh="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $hinh="nophoto";
                    }
                    echo'  
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$price.'₫</td>
                    <td>'.$priceold.'₫</td>
                    <td>'.$luotxem.'</td>
                    <td><a href="'.$suasp.'"><input type="button" value="sửa" class="gr"></a>
                    <a href="'.$xoasp.'"><input type="button" value="xóa" class="re"></a>
                    <a href="'.$add_bt.'"><input type="button" value="+bien the" class="blu"></a>
                    <a href="'.$add_size.'"><input type="button" value="+size" class="blu"></a>
                    </td>
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

    <section class="content" id="bienthe">
    <h2>color_product</h2>
        <!-- Content goes here -->
        <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw" placeholder="Nhập tên sản phẩm cần tìm ..." required="required">
                    <select name="iddm" >
                        <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$namedm.'</option>';
            }
            ?> 
                    </select>
                    <input type="submit" name="listok" value="Tìm kiếm" class="addnew">
                </form>
        <table>
          <thead>
            <tr>
            <th></th>
                    <tH>MÃ </tH>
                    <tH>TÊN SẢN PHẨM</tH>
                    <tH>HÌNH </tH>
                    <tH>TÊN BIẾN THỂ</tH>
                    <tH>HÌNH BIẾN THỂ</tH>
                    <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
                 foreach($listsanpham_bienthe as $sanpham_bienthe){
                    extract($sanpham_bienthe);
                    $suabt="index.php?act=suabt&idbt=".$idbt;
                    $xoabt="index.php?act=xoabt&idbt=".$idbt;
                    $add_bt="index.php?act=add_bt&idbt=".$idbt;
                    $hinhpath="../upload/".$img;
                    if (is_file($hinhpath)) {
                       $hinh="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $hinh="nophoto";
                    }
                    $hinhpath="../upload/".$hinhbt;
                    if (is_file($hinhpath)) {
                       $hinhbt="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $hinhbt="nophoto";
                    }
                    echo'  
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$namebt.'</td>
                    <td>'.$hinhbt.'</td>
                    <td><a href="'.$suabt.'"><input type="button" value="sửa" class="gr"></a>
                    <a href="'.$xoabt.'"><input type="button" value="xóa" class="re"></a>
                    </td>
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

    <section class="content" id="size_product">
    <h2>Size_product</h2>
        <!-- Content goes here -->
        <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw" placeholder="Nhập tên sản phẩm cần tìm ..." required="required">
                    <select name="iddm" >
                        <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$namedm.'</option>';
            }
            ?> 
                    </select>
                    <input type="submit" name="listok" value="Tìm kiếm" class="addnew">
                </form>
        <table>
          <thead>
            <tr>
            <th></th>
                    <tH>MÃ </tH>
                    <tH>TÊN SẢN PHẨM</tH>
                    <tH>HÌNH </tH>
                    <tH>size</tH>
                    <tH>Số lượng</tH>
                    <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
               
               foreach($listsize_sanpham as $size_sanpham){
                   extract($size_sanpham);
                   
                   $suasp="index.php?act=suasp&id=".$id;
                   $xoasp="index.php?act=xoasp&id=".$id;
                   $add_bt="index.php?act=add_bt&id=".$id;
                   $hinhpath="../upload/".$img;
                   if (is_file($hinhpath)) {
                      $hinh="<img src='".$hinhpath."' height='80'>";
                   }else{
                       $hinh="nophoto";
                   }
                   if ($id!="") {
                    echo'
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$namesize.'</td>
                    <td>'.$slsize.'</td>
 
                    <td>
                    <a href="'.$xoasp.'"><input type="button" value="xóa" class="re"></a>
                    </td>
                    </tr>
                    ';
                }else {
                    
                }
               }
               ?>
               
                
            <!-- Add more rows as needed -->
          </tbody>
        </table>
        <input type="button" value="Chọn tất cả" class="blu mrbut">
                <input type="button" value="Bỏ chọn tất cả" class="we mrbut">
                <input type="button" value="Xóa các mục đã chọn"class="re mrbut">
    </section>

    <!-- Add your JavaScript to toggle between sections -->
    <script>
        function showSection(sectionId) {
            // Toggle the visibility of each section
            document.querySelectorAll('.content').forEach(section => {
                section.style.display = (section.id === sectionId) ? 'block' : 'none';
            });
        }
    </script>

    <!-- Add your other scripts and closing body/html tags here -->

