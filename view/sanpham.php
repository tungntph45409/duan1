
<div class="mainallsanpham">
<main id="navbar">
  <summary>
  <div class="header-main">
    <div class="new-sp-all">
    <h4><?=$tendm?></h4>
    </div>
    <div class="new-sp-loc">
        <ul>
         <!--  <li>
            <div id="btn_loc">
            Lọc
            <i class="bi bi-sliders"></i>
           </div>
           <div id="btn_loc_start">
            Lọc
            <i class="bi bi-sliders"></i>
           </div>

          </li> -->
        </ul>
       <ul class="ulsx">
       
      <li class="lisx">
        <div id="btn_lisx_down">
          By sort 
        <i class="bi bi-chevron-down"></i>
       
      </div>
      <div id="btn_lisx_up">
      By sort 
        <i   class="bi bi-chevron-up"></i>
      </div>
        <div class="sx" id=lisx>
          <ul class="sx-ul">
            <li><a href="">Featured </a></li>
            <li><a href="">New est </a></li>
            <li><a href="">Price hight-low</a></li>
            <li><a href="">Price low-hight</a> </li>
          </ul>
        </div>
      </li>
      </ul>
      </div>
    </div>
  </summary>
  <!-- <div id="main-loc-loc">
<div id="main-loc"> -->
  <!-- <div id="loc" >
  <div class="list_loc">
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>
      <p><a class="menu_link_black" href="#" >Sản phẩm </a></p>

    
  </div>
  </div> -->
  
   <div class="box-all-sp">

   <?php
foreach ($dssp as $spc) {
    extract($spc);
    $linksp = "index.php?act=sanphamct&idsp=" . $id;
    $hinh = $img_path . $img;

    // Sử dụng number_format để thêm dấu phẩy cho giá tiền
    $formatted_price = number_format($price) . '₫';
    
    // Chỉ hiển thị giá cũ khi nó lớn hơn 0
    $formatted_priceold = ($priceold > 0) ? number_format($priceold) . '₫' : '';

    echo '<div class="box-sp">
            <a href="' . $linksp . '" style="text-decoration: none; color: black;"><img src="' . $hinh . '" alt=""></a>
            <div class="name-box-sp">
                <p><a href="' . $linksp . '" style="text-decoration: none; color: black;">' . $name . '</a></p>
                <div class="price">
                    <p>' . $formatted_price;
                    
    if ($priceold > 0) {
        echo '<del>' . $formatted_priceold . '</del>';
    }
    
    echo '</p>
                </div>
            </div>
          </div>';
}
?>



   <!--  <div class="box-sp">
      <img src="images/disuwww5uxkqulu2aivh.webp" alt="">
      <div class="name-box-sp">
        <p>Giày nam</p>
        <div class="price">
        <p>1.369.000đ <del>999.000đ</del></p>
        </div>
      </div>
    </div>
    <div class="box-sp">
      <img src="images/disuwww5uxkqulu2aivh.webp" alt="">
      <div class="name-box-sp">
        <p>Giày nam</p>
        <div class="price">
        <p>1.369.000đ <del>999.000đ</del></p>
        </div>
      </div>
    </div>
    <div class="box-sp">
      <img src="images/disuwww5uxkqulu2aivh.webp" alt="">
      <div class="name-box-sp">
        <p>Giày nam</p>
        <div class="price">
        <p>1.369.000đ <del>999.000đ</del></p>
        </div>
      </div>
    </div>
    <div class="box-sp">
      <img src="images/disuwww5uxkqulu2aivh.webp" alt="">
      <div class="name-box-sp">
        <p>Giày nam</p>
        <div class="price">
        <p>1.369.000đ <del>999.000đ</del></p>
        </div>
      </div>
    </div>
    
    <div class="box-sp">
      <img src="images/disuwww5uxkqulu2aivh.webp" alt="">
      <div class="name-box-sp">
        <p>Giày nam</p>
        <div class="price">
        <p>1.369.000đ <del>999.000đ</del></p>
        </div>
      </div>
    </div>    -->
 <!--  </div>
</div> -->
</div>

</main>
</div>
