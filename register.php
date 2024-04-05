
<?php
include "model/pdo.php";
include "model/taikhoan.php";
  if (isset($_POST['dangky'])&&($_POST['dangky'])) {
      $email =$_POST['email'];
      $user =$_POST['user'];
      $pass =$_POST['pass'];
      insert_taikhoan($email,$user,$pass);
      $thongbao="Registered successfully!";  
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
    <h2>Register</h2> 
    </div>
    <form action="register.php" method="post">
      <div class="inputBox">
        <input type="email" required="required" name="email">
        <span> Email</span>
    </div>
    <div class="inputBox">
        <input type="text" required="required" name="user">
        <span> User name</span>
    </div>
    <div class="inputBox">
        <input type="password" required="required"  name="pass">
        <span>  Password</span>
    </div>
    <div class="inputBox">
      <input type="password" required="required">
      <span> Re-password</span>
  </div>
  <div class="remember">
    <label><input type="checkbox">I agree to terms & conditions  </label>
  </div>

    <div class="inputSubmit" >
    <p class="thongbao"><?php
           if (isset($thongbao)&&($thongbao!="")) {
            echo $thongbao;
           }
           
           ?>
    </p>
    <input type="submit" value="Register" name="dangky" >
    <p>Already have an account?<a href="login.php">login</a></p>
    
    </div>
    </form>
    </div>
</body>
</html>
