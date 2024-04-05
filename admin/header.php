<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <style>
    .addnew {
    padding: 10px 15px;
    font-size: 14px;
    background-color: #4CAF50; /* Green color for addnew */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.addnew:hover {
    background-color: #45a049; /* Darker green color on hover */
}

.reset {
    padding: 10px 15px;
    font-size: 14px;
    background-color: #3498db; /* Blue color for reset */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.reset:hover {
    background-color: #2980b9; /* Darker blue color on hover */
}


/* You can add more styles as needed */

 /* Common styles for buttons */
.gr, .re, .blu {
    padding: 10px 16px;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    color: #fff;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    transition: opacity 0.3s ease;
}

/* Styles for the UPDATE button */
.gr {
    background-color: #5cb85c;
}

/* Styles for the DELETE button */
.re {
    background-color: #d9534f;
}

/* Styles for the ADD button */
.blu {
    background-color: #428bca;
}

/* Hover effect for all buttons */
.gr:hover, .re:hover, .blu:hover {
    opacity: 0.9;
    transform: scale(1.05);
}



/* Optional: Add some margin or padding to the buttons for better spacing */
.gr, .re, .blu {
    margin: 4px;
}


    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: #f5f5f5;
      color: #fff;
      height: 50px;
      text-align: center;
    }

    #container {
      display: flex;
      flex: 1;
    }

    #sidebar {
      background-color: #2c3e50;
      width: 220px;
      height: 100vh;
      overflow-y: auto;
      transition: width 0.3s ease;
      position: relative;
      z-index: 1;
    }
.header{
    width: 100%;
    height: 60px;
    background-color: #ccc;
}
    #toggle-btn {
      font-size: 24px;
      color: #fff;
      cursor: pointer;
      padding: 10px;
      background-color: #2c3e50;
      border: none;
      outline: none;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    nav ul li {
      padding: 15px;
      border-bottom: 1px solid #34495e;
      transition: background-color 0.3s ease;
    }

    nav a {
      text-decoration: none;
      color: #ecf0f1;
      font-size: 16px;
    }

    nav a:hover {
      background-color: #34495e;
    }

    #main {
      flex: 1;
      padding: 20px;
      transition: margin-left 0.3s ease;
    }

    .content {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    footer {
      background-color: #333;
      color: #fff;
      margin-top: 5px;
      margin-bottom: 0;
      padding: 15px;
      text-align: center;
    }

    @media (max-width: 768px) {
      #sidebar {
        width: 60px;
      }
      
      #sidebar.collapsed {
        width: 60px;
      }

      #sidebar:hover {
        width: 220px;
      }

      nav ul li {
        text-align: center;
      }

      nav a {
        font-size: 12px;
      }

      #main.expanded {
        margin-left: 60px;
      }

      #sidebar:not(.expanded) {
        width: 60px;
      }
    }
    /* Style for the table */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

/* Style for table header */
thead {
  background-color: #3498db;
  color: #fff;
}

th, td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

/* Style for alternating row colors */
tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Hover effect for rows */
tbody tr:hover {
  background-color: #e0e0e0;
}

/* Style for buttons within the table */
button {
  background-color: #2ecc71;
  color: #fff;
  border: none;
  padding: 8px 12px;
  cursor: pointer;
  border-radius: 3px;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #27ae60;
}
/* Style for primary action button */
.primary-btn {
  background-color: #3498db;
  color: #fff;
}

.primary-btn:hover {
  background-color: #2980b9;
}

/* Style for success action button */
.success-btn {
  background-color: #2ecc71;
  color: #fff;
}

.success-btn:hover {
  background-color: #27ae60;
}

/* Style for danger action button */
.danger-btn {
  background-color: #e74c3c;
  color: #fff;
}

.danger-btn:hover {
  background-color: #c0392b;
}

/* Style for input fields */
input[type="text"], input[type="number"], input[type="password"], input[type="email"], textarea {
  width: 100%;
  padding: 10px;
  margin: 8px 0;
  box-sizing: border-box;
}

/* Style for select dropdown */
select {
  width: 100%;
  padding: 10px;
  margin: 8px 0;
  box-sizing: border-box;
}

/* Style for form labels */
label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
}

/* Style for form container */
.form-container {
  max-width: 400px;
  margin: 0 auto;
}
.modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
    
    header {
      position: fixed;
      width: 100%;
      z-index: 1000;
      height: 50px; /* Giảm chiều cao của header */
      transition: height 0.3s ease; /* Hiệu ứng khi thay đổi chiều cao */
    }

    #container {
      display: flex;
      flex: 1;
    }

    #sidebar {
      /* (phần CSS hiện tại của bạn cho aside) */
      height: 100%;
      width: 60px; /* Thu nhỏ độ rộng của aside */
      transition: width 0.3s ease; /* Hiệu ứng khi thay đổi độ rộng */
    }

    #sidebar:hover,
    #sidebar.expanded {
      width: 220px; /* Khi hover hoặc khi được mở rộng, độ rộng sẽ tăng lên */
    }

    #main {
      flex: 1;
      padding: 20px;
      transition: margin-left 0.3s ease;
    }

    @media (max-width: 768px) {
      /* (phần CSS hiện tại của bạn cho màn hình nhỏ) */

      #main.expanded {
        margin-left: 60px; /* Đảm bảo phần nội dung không bị che khuất bởi aside khi mở rộng */
      }
    }
    #admin-info {
  display: flex;
  align-items: center;
  padding: 15px;
  background-color: #2c3e50;
}

#admin-info img {
  border-radius: 50%;
  margin-right: 10px;
}

#admin-info p {
  color: #fff;
  margin: 0;
}
#scroll-to-top {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #3498db;
  color: #fff;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 20px;
  border-radius: 50%;
  cursor: pointer;
  display: none;
  transition: background-color 0.3s ease;
}

#scroll-to-top:hover {
  background-color: #2980b9;
}
  .contai{height: 100%;}
  </style>
</head>

<body>

 <!--  <header>
    <p>Admin Dashboard</p>
    <p>Welcome, Admin User</p>
  </header> -->
  
  <div id="container">
  <div id="c">
    <aside id="sidebar" class="expanded">
      
        <div id="admin-info">
            <img src="logoadmin.png" alt="Admin Image" width="50" height="50">
            <p>Hello, <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                   echo ''.$user.'';}?></p>
          </div>
         
        <nav>
          <ul>
            <li><a href="index.php?" onclick="showPage('dashboard')">Dashboard</a></li>
            <li><a href="index.php?act=list_dm" onclick="showPage('Category Items')">Category Items</a></li>
            <li><a href="index.php?act=dskh" onclick="showPage('user')">Users</a></li>
            <li><a href="index.php?act=listsp" onclick="showPage('products')">Products</a></li>
            <li><a href="index.php?act=listbill" onclick="showPage('orders')">Orders</a></li>
<!--        <li><a href="index.php?act=listsize" onclick="showPage('size-variants')">Size Variants</a></li>
 -->        <li><a href="index.php?act=addsize" onclick="showPage('size')">Size</a></li>
            <li><a href="index.php?act=bieudo" onclick="showPage('statistics')">Statistics</a></li>
            <li><a href="../index.php?">Website</a></li>

            <li><a href="index.php?act=list_dm" onclick="showPage('settings')">Settings</a></li>

            
          </ul>
        </nav>
      </aside>
      </div>
      <main id="main">
        <div class="header">
        <button id="toggle-btn" onclick="toggleSidebar()">☰</button>
        </div>

   