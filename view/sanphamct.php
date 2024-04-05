
<script>
    function validateForm() {
        var selectedColor = document.querySelector('.new-custom-select__item--selected');
        var selectedSize = document.querySelector('.custom-select option:checked');
        var newCustomSelect = document.querySelector('.new-custom-select');
        var customSelect = document.querySelector('.custom-select');

        if (!selectedColor) {
            alert('Vui lòng chọn màu sắc.');
            newCustomSelect.classList.remove('valid');
            return false;
        } else {
            newCustomSelect.classList.add('valid');
        }

        if (!selectedSize) {
            alert('Vui lòng chọn kích thước.');
            customSelect.classList.remove('valid');
            return false;
        } else {
            customSelect.classList.add('valid');
        }

        return true;
    }
</script>
        <form action="index.php?act=addtocart" method="post" onsubmit="return validateForm();" class="validate-form">
           

  <div class="main_ctsp">
 <div class="img_sp">
 <?php
         extract($onesp);
          // Sử dụng number_format để thêm dấu phẩy cho giá tiền
    $formatted_price = number_format($price) . '₫';
    
    // Chỉ hiển thị giá cũ khi nó lớn hơn 0
    $formatted_priceold = ($priceold > 0) ? number_format($priceold) . '₫' : '';
  ?>

      
<?php
$hinh = $img_path . $img;
echo '<img src="' . $hinh . '" alt="Main Image" id="newLargerImage">'; 
?>
</div>
<div class="ttsp">
    <h4><?=$name?> </h4>
    <p><?=$namedm?></p>
    <p><?=$formatted_price?></p>
    <p>Color</p>
    <div class="color">
<select name="bienthe" class="new-custom-select" multiple require="require">
<option value="<?=$name?>" data-image="<?=$hinh?>"></option>
<?php 
  foreach ($onebt as $onebt) {
  extract($onebt);
  $hinhbt = $img_path . $hinhbt;
  echo' <option value="'.$namebt.'" data-image="'.$hinhbt.'"></option>';
  
}
?> 
    </select>



    <script>
    class NewClassName {
            constructor(originalSelect) {
                this.originalSelect = originalSelect;
                this.customSelect = document.createElement("div");
                this.customSelect.classList.add("new-custom-select"); // Change the class name

                // Larger image container and element
                this.largerImageContainer = document.querySelector('.larger-image-container');
                this.largerImage = document.getElementById('newLargerImage'); // Change the ID

                this.originalSelect.querySelectorAll("option").forEach((optionElement) => {
                    const itemElement = document.createElement("div");

                    itemElement.classList.add("new-custom-select__item"); // Change the class name

                    // Replace text with an image
                    const imageElement = document.createElement("img");
                    imageElement.src = optionElement.getAttribute('data-image');
                    itemElement.appendChild(imageElement);

                    this.customSelect.appendChild(itemElement);

                    itemElement.addEventListener("click", () => {
                        this._select(itemElement, optionElement.getAttribute('data-image'));
                    });
                });

                this.originalSelect.insertAdjacentElement("afterend", this.customSelect);
                this.originalSelect.style.display = "none";
            }

            _select(itemElement, largerImagePath) {
                this.customSelect.querySelectorAll(".new-custom-select__item").forEach((el) => {
                    el.classList.remove("new-custom-select__item--selected"); // Change the class name
                });

                const index = Array.from(this.customSelect.children).indexOf(itemElement);
                this.originalSelect.querySelectorAll("option")[index].selected = true;
                itemElement.classList.add("new-custom-select__item--selected"); // Change the class name

                // Set the source of the larger image
                this.largerImage.src = largerImagePath;
            }
        }

        document.querySelectorAll(".new-custom-select").forEach((selectElement) => {
            new NewClassName(selectElement);
        });
</script>
</div>
<div class="size">
  <p>select size</p>
  <select name="size" class="custom-select" multiple require="require">
  <?php

foreach ($size_sp_id as $size_sp_id) {
  extract($size_sp_id);
  echo' <option value="'.$namesize.'">'.$namesize.'</option>';
}
?> 
</select>
<div class="buyortym">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="name" value="<?=$name?>">
            <input type="hidden" name="img" value="<?=$img?>">
            <input type="hidden" name="price" value="<?=$price?>">

         <input type="submit" name="addtocart" value="Add to Bag">
 </form>
<p>This product is excluded from site promotions and discounts.
These classic Dunks get a metamorphous refresh inspired by the merging of digital and physical worlds. Jewel-like hardware, holographic accents and a special JDI dubrae add the finishing touch so you can take centre stage in style.</p>
</div>
<div class="danh_gia">
<li>Colour Shown: Black/Multi-Colour/White/Black</li>
<li>Style: FQ8143-001</li>
<a href="">View Product Details</a>
<hr>
 <ul class="ul_danhgia">
<li class="lisx">
  <div id="btn_lisx_down">
    Free Delivery and Returns
    <i class="bi bi-chevron-down"></i>
 
</div>
<div id="btn_lisx_up">
  Free Delivery and Returns
  <i   class="bi bi-chevron-up"></i>
</div>
  <div class="sx" id=lisx>
    <ul class="sx-ul">
     <p>Your order of 5.000.000₫ or more gets free standard delivery.</p>
     <li>Standard delivered 4-5 Business Days</li>
      <li>Express delivered 2-4 Business Days</li>
      <p>Orders are processed and delivered Monday-Friday (excluding public holidays) </p>
      <p> Nike Members enjoy <a href="">free returns.</a></p>
    </ul>
  </div>
</li>
</ul>

<hr>
<ul class="ul_danhgia">
  <li class="lisx">
    <div id="btn_lisx_down">
      Reviews (13) +sao
      <i class="bi bi-chevron-down"></i>
   
  </div>
  <div id="btn_lisx_up">
    Reviews (13) +sao
    <i   class="bi bi-chevron-up"></i>
  </div>
    <div class="sx" id=lisx>
      <ul class="sx-ul">
      <li>ak</li>
     <p>Good + time +sao + noidung</p>
      </ul>
    </div>
  </li>
  </ul>
<hr>
</div>
</div>
 </div>
 

</div>
</form>
</main>
<main>
  <h3>Comment</h3>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
        $("#clear").load("view/sanphamct.php", {idpro: <?=$id?>});
        });
        </script>
            <div class="row " id="binhluan"> 
            </div>
</main>
<main>
  <h3 style="text-align: center;">Đặc điểm nổi bật</h3>
  <?php
        echo $mota;
        echo'<br><br><br>view:'.$luotxem.'';
        ?>
</main>
<main>
  <div class="new">
<h3>You Might Also Like</h3>
<div class="trending">
   <?php
         foreach ($spcl as $spcl) {
          if (isset($iddm)&&($iddm)>0) {
           extract($spcl);
            // Sử dụng number_format để thêm dấu phẩy cho giá tiền
    $formatted_price = number_format($price) . '₫';
    
    // Chỉ hiển thị giá cũ khi nó lớn hơn 0
    $formatted_priceold = ($priceold > 0) ? number_format($priceold) . '₫' : '';
           $hinh=$img_path.$img;
           $linksp="index.php?act=sanphamct&idsp=".$id;
           echo'<div class="col1">
           <a href="'.$linksp.'" ><img src="'.$hinh.'" alt=""></a>
               <h4 class="name_ a"><a  href="'.$linksp.'">'.$name.'</a></h4>
               <div class=".price">
               <p>' . $formatted_price;
                    
    if ($priceold > 0) {
        echo '<del>' . $formatted_priceold . '</del>';
    }
    
    echo '</p>
            </div>
          </div>';
  }}
        
         ?> 
      <!--   <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
        <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div> -->
      </div>
      
      
</main>
</div>
<script>
        class CustomSelect {
            constructor(originalSelect) {
                this.originalSelect = originalSelect;
                this.customSelect = document.createElement("div");
                this.customSelect.classList.add("select");
    
                this.originalSelect.querySelectorAll("option").forEach((optionElement) => {
                    const itemElement = document.createElement("div");
    
                    itemElement.classList.add("select__item");
                    itemElement.textContent = optionElement.textContent;
                    this.customSelect.appendChild(itemElement);
    
                    if (optionElement.selected) {
                        this._select(itemElement);
                    }
    
                    itemElement.addEventListener("click", () => {
                        this._select(itemElement);
                    });
                });
    
                this.originalSelect.insertAdjacentElement("afterend", this.customSelect);
                this.originalSelect.style.display = "none";
            }
    
            _select(itemElement) {
                const index = Array.from(this.customSelect.children).indexOf(itemElement);
    
                this.customSelect.querySelectorAll(".select__item").forEach((el) => {
                    el.classList.remove("select__item--selected");
                });
    
                this.originalSelect.querySelectorAll("option")[index].selected = true;
                itemElement.classList.add("select__item--selected");
            }
        }
    
        document.querySelectorAll(".custom-select").forEach((selectElement) => {
            new CustomSelect(selectElement);
        });
    </script>
