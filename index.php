
<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/cart.php";
$dsdm=loadall_danhmuc();
include "view/header.php";
include "global.php";
if (!isset($_SESSION['mycart'])) 
$_SESSION['mycart']=[];
$spnew=loadall_sanpham_home();
$dstop10=loadall_sanpham_top10();
if ((isset($_GET['act']))&&($_GET['act']!="")) {
    $act=$_GET['act'];
    switch ($act) {
        
case 'sanpham':
    if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
    $kyw=$_POST['kyw'];
    }else{ 
    $kyw ="";
    }
    if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
     $iddm=$_GET['iddm'];
    }else{
    $iddm=0;
    }
    $dssp=loadall_sanpham($kyw,$iddm);
    $tendm=load_ten_dm($iddm);
    include "view/sanpham.php";
    
    break;
        case 'sanphamct':
            if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                $id =$_GET['idsp'];
                $view= update_view($id);
                $onesp=loadone_sanpham($id);
                extract($onesp);
                $onebt=loadone_sanpham_bienthe($id);
                $size_sp_id=loadone_sp_size_id($id);
                $spcl=load_sanpham_cungloai($id,$iddm);  
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                    $one_dm_sp=loadone_danhmuc_sanpham($iddm);
                    extract($one_dm_sp);
                   }
               
                include "view/sanphamct.php";
            }else{
                include "view/home.php";
            }
                      
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                   $id=$_POST['id'];
                   $name=$_POST['name'];
                   $img=$_POST['img'];
                   $price=$_POST['price'];
                   $soluong=1;
                   $ttien=$soluong*$price;
                   $size=$_POST['size'];
                   $bienth=$_POST['bienthe'];
                   $spadd=[$id,$name,$img,$price,$soluong,$ttien,$size,$bienth];
                   array_push($_SESSION['mycart'],$spadd);
                   include "view/cart/viewcart.php";

               
            }
                break;
            case 'delcart':
                    if(isset($_GET['idcart'])){
                  
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                    }else{
                    $_SESSION['mycart']=[];
                    }
                 include "view/cart/viewcart.php";
                    
                break;
                    case 'viewcart':
                     include "view/cart/viewcart.php";
                        break;
                       /*  bill */
                        case 'bill':
                          /*   if (isset($_SESSION['user'])) {
                                include "view/cart/bill.php";
                            }else {
                              echo'you can login !<a href="login.php">
                              <span>Sign In</span>
                              </a>';
                            } */
                            include "view/cart/bill.php";
                               break;
                        case 'billcomfirm':
                            //tao bill
                            if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                            if (isset($_SESSION['user'])) {
                                $iduser=$_SESSION['user']['id']; 
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $address=$_POST['address'];
                                $tel=$_POST['tel'];
                                $pttt=$_POST['pttt'];
                                $ngaydathang=date('h:i:sa d/m/Y');
                                $tongdonhang=tongdonhang();
                                $idbill=insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);
                                foreach ($_SESSION['mycart'] as $cart) {
                                    insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1], $cart[3],$cart[4],$cart[5], $idbill); 
                                }
                                $_SESSION['cart']=[];
                            }else {
                                $iduser=0;
                                $name=$_POST['name'];
                            $email=$_POST['email'];
                            $address=$_POST['address'];
                            $tel=$_POST['tel'];
                            $pttt=$_POST['pttt'];
                            $ngaydathang=date('h:i:sa d/m/Y');
                            $tongdonhang=tongdonhang();
                            $idbill=insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);
                           
                            }
                            
                            }
                            if(isset($_GET['idcart'])){
                  
                                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                                }else{
                                $_SESSION['mycart']=[];
                                }   
                            $bill=loadone_bill($idbill);
                            $billct=loadall_cart($idbill);
                                include "view/cart/billcomfirm.php"; 
                                break;
                      
         case 'mybill':
        $listbill=loadall_bill($_SESSION['user']['id']);
        include "view/cart/mybill.php";
        break;
        case 'updatebill':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $bill_status=$_POST['bill_status'];
                $id=$_POST['id'];
                update_bill($id,$bill_status);
                $thongbao="cap thanh cong";
            }
            $listbill=loadall_bill($_SESSION['user']['id']);                    
            include "view/cart/mybill.php";
            break;      
        
        case 'account':
            if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                $user =$_POST['user'];
                $pass =$_POST['pass'];
                $email =$_POST['email'];
                $birthday = date('Y-m-d', strtotime($_POST['birthday']));
                $address =$_POST['address'];
                $tel =$_POST['tel'];
                $id =$_POST['id'];
                update_taikhoan($id,$user,$pass,$email,$address,$tel,$birthday);
                $_SESSION['user']=checkuser($user,$pass);
            } 
            include "view/account.php";
            break;
        case 'sanpham':
            include "view/sanpham.php";
            break;
        case 'gopy':
            include "view/gopy.php";
            break;
        case 'login':
                include "view/login.php";
                break;
        case 'gopy':
                include "view/gopy.php";
                break;
        
        default:
           include "view/home.php";
            break;
    }
}else{
include "view/home.php";}
include "view/footer.php";


?>