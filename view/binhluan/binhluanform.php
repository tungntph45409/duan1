<?php
 session_start();  
 include "../../model/pdo.php";
 include "../../model/binhluan.php";
 $idpro=$_REQUEST['idpro'];
 $dsbl= loadall_binhluan($idpro);

?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Comment Box Like On Monkey Sport</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap');
.body_comment{
    display: flex;
    justify-content: center;
    flex-direction: column;

    align-items: center;
    height: 100%;
    font-family: 'Roboto', sans-serif;
}
.comment
{
    width: 100%;
    padding: 15px 10px;
}
.comment h2
{
    text-align: center;
    margin-bottom: 15px
}
.textarea
{
    height: 20px;
    width: 100%;
    border: none;
    border-bottom: 2px solid #aaa;
    background-color: transparent;
    margin-bottom: 10px;
    resize: none;
    outline: none;
    transition: .5s
}

.btn_comment input[type="submit"],
.btn_comment button
{
    padding: 10px 15px;
    border: none;
    outline: none;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
}
.tt{
    color:red;
}
.table{
  width: 100%;
}
.btn_comment input[type="submit"]
{
    color: #fff;
    background-color: black;
}
.btn_comment button
{
    color: #333;
    background-color: transparent
}
.btn_comment
{
  margin-right:0px;
    display: none
}
.tr{
width: 300px;
}
.td1{
  width: 5%;
}
.td3{
  width: 50%;
}
.td3{
  width: 100%;
}

        </style>
         <body>
        <div class="body_comment">
          <table class="table">
        <?php
        foreach ($dsbl as $bl) {
        extract($bl);
        echo '<tr class="tr"><td class="td1"><h4>@'.$user.'</h4></td>';
        echo '<td class="td2">'.$ngaybinhluan.'</td>';
        echo '<td class="td3">'.$noidung.'</td></tr>';
       
        }
        ?>
        </table>
            <div class="comment">
            
                <h2>Leave Us a Comment</h2>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <input type="hidden" name="idpro" value="<?=$idpro?>" >
                    <textarea placeholder='Add Your Comment' class="textarea" name="noidung"  required="required"></textarea>
                    <div class="btn_comment">
                        <input type="submit" name="guibinhluan" value="comment">
                        <button id='clear'>Cancel</button>
                    </div>
                </form>
                <?php
        if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
            if (isset($_SESSION['user'])) {
          $noidung=$_POST['noidung'];
          $idpro=$_POST['idpro'];
          $iduser=$_SESSION['user']['id'];
          $ngaybinhluan=date('h:i:sa d/m/Y');
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location: ".$_SERVER['HTTP_REFERER']);}
        else{
            echo'<div class="tt">Bạn cần phải đăng nhập !</div>

            ';
      }

        }
        
        ?>
            </div>
        </div>
        <script>
          var feild = document.querySelector('textarea');
var backUp = feild.getAttribute('placeholder');
var btn = document.querySelector('.btn_comment');
var clear = document.getElementById('clear')

feild.onfocus = function(){
    this.setAttribute('placeholder', '');
    this.style.borderColor = '#333';
    btn.style.display = 'block'
}

feild.onblur = function(){
    this.setAttribute('placeholder',backUp);
    this.style.borderColor = '#aaa'
}

clear.onclick = function(){
    btn.style.display = 'none';
    feild.value = '';
}


        </script>
</body>

    </html>