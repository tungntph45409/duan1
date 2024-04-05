<?php
session_start();
include "model/pdo.php";
include "model/taikhoan.php";
    if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
        $user =$_POST['user'];
        $pass =$_POST['pass'];
        $checkuser= checkuser($user,$pass);
        if (isset($checkuser)&&(is_array($checkuser))&&(count($checkuser)>0)) {
           extract($checkuser);
        
        if ($role==1) {
            $_SESSION['user']=$checkuser;
            header('location:admin/index.php');
         }
        else{
            $_SESSION['user']=$checkuser;
            header('location: index.php');
        }
    }
    }
    if ((isset($_GET['lg']))&&($_GET['lg']!="")) {
        $lg=$_GET['lg'];
    switch ($lg) {
        case 'thoat':
        session_unset();
        header('location:index.php');
            break;
        case 'resetpass':
                if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                    $email =$_POST['email'];
                    $checkemail=checkemail($email);
                    if (is_array($checkemail)) {
                        $email =$_POST['email'];
                       $pass=substr(md5(rand(0,999999) ), 0, 8);        
                       update_pass($pass,$email);  
                       guimail($email,$pass);
                       $thongbao="gửi thành công vui long check email";   
                    }else {
                        $thongbao="khong ton tai email trong he thong";
                    }
                    header('location:resetpass.php');
                }
                header('location:resetpass.php');
                 break;
        default:
        header('location:index.php');
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
<div class="body">
    
<div class="logologin">
<a href=""><img src="images/logo1.jpg" alt=""></a> 
        <h2>Login</h2>
    </div>
    <form action="login.php" method="post">
    <div class="inputBox">
        <input type="text" required="required" name="user">
        <span> User name</span>
    </div>
    <div class="inputBox">
        <input type="password" required="required"name="pass">
        <span>  Password</span>
    </div>
    <div class="remember">
        <label><input type="checkbox">Remember me  </label>
        <a href="login.php?lg=resetpass">Forgot Password</a>
      </div>
    <div class="inputSubmit" >
    <input type="submit" value="login" name="dangnhap">
    <p>Don't have an account?<a href="register.php">Register</a></p>
    </div>
    </form>
    </div>
</body>
</html>


    
