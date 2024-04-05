<footer>
    
    <div class="thongtin" >
        
    <div class="thongtin1">
        <h3>Tìm một cửa hàng</h3>
        <h3>Trở thành một thành viên</h3>
        <h3>Gủi phản hồi cho chúng tôi</h3>
      </div>
      <div class="thongtin1">
        <h3>Được Giúp Đỡ</h3>
        <li><a href="">Tình trạng đặt hàng</a></li>
        <li><a href="">Vận chuyển</a></li>
        <li><a href="">Trả lại</a></li>
        <li><a href="">Các lựa chọn thanh toán</a></li>
        <li><a href="">Liên hệ chúng tôi</a></li>
      </div>
      <div class="thongtin1">
        <h3>Giới Thiệu Về Monkey <br>Sport</h3>
        <li><a href="">Tin tức</a></li>
        <li><a href="">Nghề nghiệp</a></li>
        <li><a href="">Nhà đầu tư</a></li>
        <li><a href="">Sự bền vững</a></li>
      </div>
      <div class="thongtin1">
        <div class="icon2">
          <button><i class="bx bxl-twitter"></i></button>
          <button><i class="bx bxl-facebook-circle"></i></button>
          <button><i class="bx bxl-youtube"></i></button>
        </div>
      </div>
    </div>
    <div class="footercon">
    <p>© 2024 MonkeySport, Inc. All Rights Reserved</p>
    </div>

</footer>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
window.onscroll = function() {myFunction()};
var prevScrollpos = window.pageYOffset;
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos && window.pageYOffset >= sticky) {
     navbar.classList.add("sticky");


  } else {
    navbar.classList.remove("sticky");
  }
  prevScrollpos = currentScrollPos;
}

</script>
<script src="js/menu.js"></script>


</body>
</html>