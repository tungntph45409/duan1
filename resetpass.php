
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
    <h2> Forgot password</h2> 
    </div>
    <form action="login.php?lg=resetpass" method="post">
      <div class="inputBox">
        <input type="email" required="required" name="email">
        <span> Email</span>
    </div>
    <div class="inputSubmit" >
    
    <input type="submit" value="Send " name="dangky" >
    <p><a href="login.php">login</a></p>
    <p class="thongbao">
      <?php
           if (isset($thongbao)&&($thongbao!="")) {
            echo $thongbao;
           }
           
           ?>
    </p>
    </div>
    </form>
    </div>
</body>
</html>
