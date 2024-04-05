<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="view/css/index.css">
    <link rel="stylesheet" href="view/css/responsive.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<header>
   <div class="logo-menu1" >
    <div class="logo1">
       <a href="index.html"><img src="images/logo1.jpg" alt=""></a> 
    </div>
   
    <div class="menu1">
        <ul> <li><a href=""><span>Find a Store</span></a> <span>|</span></li>
           
            <li class="dropdown"><a href="" >   
        <span>Help</span> </a>
      <div class="dropdown-content">
        <h4>Help</h4>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
      </div>
      <span>|</span>
      </li>
     
      <li class="dropdown2">
        <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            
            ?>
        <a href="login.php">
        <span>Hello, <?=$user?> 
        <div class="icon">
        <a href="index.php?act=account"><i class="bi bi-person"></i></a>
        </div></span>
        </a>
        <div class="dropdown-content2">
        <a href="index.php?act=account"><h4>Account</h4></a>
        <a href="index.php?act=mybill">Don hang cua toi</a>
        <a href="">Doi mat khau</a>
        <a href="index.php?act=account">Cap nhat tai khoan</a>
        <?php if ($role==1) {
            # code...
          ?>
           <a href="admin/index.php">Dang nhap admin</a>
           <?php  }?>
           <a href="login.php?lg=thoat">Thoat</a>
           </div>
            <?php
            }else{
            ?>
        <a href="login.php">
        <span>Sign In</span>
        </a>
        <?php }?>
      </li>
        </ul>
    </div>
  </div>
</header>
<nav id="navbar">
  <div class="auto92">
    <div class="logo2">
    <a href="index.html"><img src="images/logo2.jpg" alt=""></a>
    </div>
    
    <div class="box-2">
        <ul class="menu_index">
            <li class="menu_item">
            <a href="index.php" class="menu_link">Trang chủ</a>
           
            </li>
            <li class="menu_item"><a class="menu_link" href="index.php?act=sanpham" >Sản phẩm </a>
            <div class="menu_child">
            <div class="menu_child2">

                <div class="menu_child-item">
                  
                   <ul class="menu_child-list">
                   <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm="index.php?act=sanpham&iddm=".$id;
                echo'
                <span><a href="'.$linkdm.'">'.$namedm.'</a></span>
                ';
            }
        
            ?>   </ul>
                </div>
                <div class="menu_child-item">
                   
                  <ul class="menu_child-list">
                  <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm="index.php?act=sanpham&iddm=".$id;
                echo'
                <span><a href="'.$linkdm.'">'.$namedm.'</a></span>
                ';
            }
        
            ?> 
                  </ul>
                 </div>
                 <div class="menu_child-item">
                   
                    <ul class="menu_child-list">
                    <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm="index.php?act=sanpham&iddm=".$id;
                echo'
                <span><a href="'.$linkdm.'">'.$namedm.'</a></span>
                ';
            }
        
            ?> 
                    </ul>
                 </div>
                 <div class="menu_child-item">
                   
                    <ul class="menu_child-list">
                    <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm="index.php?act=sanpham&iddm=".$id;
                echo'
                <span><a href="'.$linkdm.'">'.$namedm.'</a></span>
                ';
            }
        
            ?> 
                    </ul>
                 </div>
                 </div>
   
            </div>
          
            </li>
            <li class="menu_item"><a class="menu_link" href="#">Nam</a></li>
            <li class="menu_item"><a class="menu_link" href="#">Nữ</a></li>
            <li class="menu_item"><a class="menu_link" href="#">Sale</a></li>
            <li class="menu_item"><a class="menu_link" href="#">Tin tức</a></li>
        </ul>
    </div>
    <div class="box-3">
        <div class="search_bar">
          <div class="timkiem">
            <form action="index.php?act=sanpham"  method="post">
                <button type="submit" name="timkiem"><i class="bx bx-search"></i></button>
                <input placeholder="Search" type="text" name="kyw">
            </form>
          </div>
          <div class="giohang">
            <div class="iconhiden">
              <a href="#"><i class="bx bx-search"></i></a>
            </div>
          <div class="icon">
            <div class="iconshow">
            <a href="#"><i class="bx bx-heart"></i></a>
            </div>
          </div>
          <div class="icon">
            <a href="index.php?act=viewcart"> <i class="bx bx-cart"></i></a>
          </div>
          <div class="pd10">
          <div class="box box-2-1">
          <button id="btn1">
              <i class="bi bi-list"></i>
               
            </button>
          
          
        </div>
    </div>
       </div>
        </div>
    </div>
</nav >
