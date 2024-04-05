
      <footer>
        &copy; 2024 Admin Dashboard by Nguyễn Thái
      </footer>
      
    </main>

  </div>
  <div id="scroll-to-top" onclick="scrollToTop()">
    &#9650;
  </div>
 
  <script>
     // ... (các đoạn mã JavaScript hiện tại của bạn)

    // Hàm cuộn lên đầu trang
    function scrollToTop() {
      document.body.scrollTop = 0; // Cho trình duyệt Edge và các phiên bản cũ
      document.documentElement.scrollTop = 0; // Cho trình duyệt hiện đại
    }

    // Hiển thị hoặc ẩn mũi tên cuộn lên đầu trang khi cuộn trang
    window.onscroll = function () {
      var scrollButton = document.getElementById('scroll-to-top');
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollButton.style.display = 'block';
      } else {
        scrollButton.style.display = 'none';
      }
    };
  </script>
  <script>
    
    // ... (Phần JavaScript của bạn ở đây)

    // Hàm mở modal edit
    function openEditModal() {
      document.getElementById('sizeEditModal').style.display = 'block';
    }

    // Hàm đóng modal edit
    function closeEditModal() {
      document.getElementById('sizeEditModal').style.display = 'none';
    }

    // Hàm lưu thông tin Size sau khi chỉnh sửa
    function saveEditSize() {
      // Lấy thông tin từ input
      var editedSizeName = document.getElementById('editSizeName').value;

      // Thực hiện lưu thông tin (có thể gửi request lưu thông tin lên server)

      // Sau khi lưu xong, đóng modal và làm mới bảng hoặc thêm hàng mới vào bảng
      closeEditModal();
    }

    // Hàm sửa thông tin Size và mở modal edit
    function editSize(sizeId) {
      // Lấy thông tin từ server dựa trên sizeId và điền vào form
      document.getElementById('editSizeName').value = 'Tên size từ server'; // Thay bằng dữ liệu thực từ server

      // Hiển thị modal edit
      openEditModal();
    }
  </script> 
  <script>
    function toggleSidebar() {
      var sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('expanded');
      var main = document.getElementById('main');
      main.classList.toggle('expanded');

      var header = document.querySelector('header');
      header.style.height = sidebar.classList.contains('expanded') ? '50px' : 'auto';
    }

    function showPage(pageId) {
      // Hide all sections
      var sections = document.querySelectorAll('.content');
      sections.forEach(function (section) {
        section.style.display = 'none';
      });

      // Show the selected section with fade-in effect
      var selectedSection = document.getElementById(pageId);
      selectedSection.style.display = 'block';
      selectedSection.classList.add('fade-in');

      // Collapse sidebar if it's currently expanded on small screens
      if (window.innerWidth <= 768) {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.remove('expanded');
        sidebar.classList.add('collapsed');
        var main = document.getElementById('main');
        main.classList.remove('expanded');
      }
    }
  </script>

</body>

</html>
