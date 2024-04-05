<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";


include "header.php";

//controler danh muc
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
      /*   danhmuccha */
        case 'adddmcha':
            //kiem tra xem nguoi dung co click vao nut add hay khong
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tendmcha=$_POST['tendmcha'];
                insert_danhmuc_cha($tendmcha);
                $thongbao="Them thanh cong";
                
            }
            $listdanhmuc=loadall_danhmuc();
            $listdanhmuccha=loadall_danhmuc_cha();
            include "danhmuc/list_dm.php";
            break;
        case 'listdm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tendmcha=$_POST['tendmcha'];
                insert_danhmuc_cha($tendmcha);
                $thongbao="Them thanh cong";
            }
            $listdanhmuc=loadall_danhmuc();
            $listdanhmuccha=loadall_danhmuc_cha();
            include "danhmuc/list.php";
            break;
        case 'xoadmcha':
            if (isset($_GET['iddmcha'])&&($_GET['iddmcha']>0)) {
                delete_sanpham_danhmuc_danhmuc_cha($_GET['iddmcha']);
                delete_danhmuc_cha($_GET['iddmcha']);
               
                
            }
            $listdanhmuc=loadall_danhmuc();
            $listdanhmuccha=loadall_danhmuc_cha();
                include "danhmuc/list_dm.php";
                break;
        case 'suadmcha':
        if (isset($_GET['iddmcha'])&&($_GET['iddmcha']>0)) {
            $dmcha=loadone_danhmuc_cha($_GET['iddmcha']);
        }
            include "danhmuc/updatecha.php";
            break;

         case 'updatedmcha':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                
                $tendmcha=$_POST['tendmcha'];
                $iddmcha=$_POST['iddmcha'];
                update_danhmuc_cha($iddmcha,$tendmcha); 
                $thongbao="cap thanh cong";
            }
            $listdanhmuc=loadall_danhmuc();
            $listdanhmuccha=loadall_danhmuc_cha();
            include "danhmuc/list_dm.php";
            break;
           /*  danhmuccon */
        case 'adddmcon':
            if (isset($_GET['iddmcha'])&&($_GET['iddmcha']>0)) {
                $dmcha=loadone_danhmuc_cha($_GET['iddmcha']);
            }
                include "danhmuc/add.php";
                break;
        case 'adddm':
            //kiem tra xem nguoi dung co click vao nut add hay khong
            if(isset($_POST['themmoib'])&&($_POST['themmoib'])){
                $iddmcha=$_POST['iddmcha'];  
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai,$iddmcha);
                $thongbao="Them thanh cong";
            }
            $listdanhmuc=loadall_danhmuc();
            $listdanhmuccha=loadall_danhmuc_cha();
            include "danhmuc/list_dm.php";
            break;
         case 'list_dm':
            $listdanhmuc=loadall_danhmuc();
            $listdanhmuccha=loadall_danhmuc_cha();
            
            include "danhmuc/list_dm.php";
            break; 
        case 'xoadm':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_danhmuc($_GET['id']);
                
            }
                $listdanhmuc=loadall_danhmuc();
                $listdanhmuccha=loadall_danhmuc_cha();
                include "danhmuc/list_dm.php";
                break;
        case 'suadm':
        if (isset($_GET['id'])&&($_GET['id']>0)) {
            $dm=loadone_danhmuc($_GET['id']);
        }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id'];
                update_danhmuc($id,$tenloai);
                
                $thongbao="cap thanh cong";
            }
            $listdanhmuccha=loadall_danhmuc_cha();
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/add.php";
            break;
        //controler san pham
        case 'addsp':
          //kiem tra xem nguoi dung co click vao nut add hay khong
          if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
              $iddm=$_POST['iddm'];  
              $tensp=$_POST['tensp'];
              $giasp=$_POST['giasp'];
              $mota=$_POST['mota'];
              $hinh=$_FILES['hinh']['name'];
              $target_dir ="../upload/";
              $target_file =$target_dir. basename($_FILES["hinh"]["name"]); 
              if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) { 
              }else { 
              }
              insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
              $thongbao="Them thanh cong";
          }
          $listdanhmuc=loadall_danhmuc();
         /*  var_dump($listdanhmuc); */
          include "sanpham/add.php";
          break;
      case 'listsp':
        if(isset($_POST['listok'])&&($_POST['listok'])){
            $kyw=$_POST['kyw'];
            $iddm=$_POST['iddm'];

        }else{
            $kyw='';
            $iddm=0;
        }
          $listdanhmuc=loadall_danhmuc();
          $listsanpham=loadall_sanpham($kyw,$iddm);
          $listsize_sanpham=loadall_sanpham_size();
          $listsanpham_bienthe=loadall_sanpham_bienthe();
          include "sanpham/list.php";
          break;
      case 'xoasp':
          if (isset($_GET['id'])&&($_GET['id']>0)) {
              delete_sanpham($_GET['id']);
              
          }
        $listsanpham_bienthe=loadall_sanpham_bienthe();
        $listsize_sanpham=loadall_sanpham_size();
        $listsize=loadall_size();
        $listdanhmuc=loadall_danhmuc();
        $listsanpham=loadall_sanpham();
              include "sanpham/list.php";
              break;
      case 'suasp':
      if (isset($_GET['id'])&&($_GET['id']>0)) {
          $sp=loadone_sanpham($_GET['id']);
      }
          $listdanhmuc=loadall_danhmuc();
          include "sanpham/update.php";
          break;
      case 'updatesp':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tensp=$_POST['tensp'];
                $id=$_POST['id'];
                $giasp=$_POST['giasp'];
                $giacu=$_POST['giacu'];
                $mota=$_POST['mota'];
                $iddm=$_POST['iddm']; 
              $hinh=$_FILES['hinh']['name'];
              $target_dir ="../upload/";
              $target_file =$target_dir. basename($_FILES["hinh"]["name"]); 
              if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) { 
              }else { 
              }
                update_sanpham($id,$tensp,$giasp,$giacu,$hinh,$mota,$iddm,);
                $thongbao="cap thanh cong";
            }
            $listsanpham_bienthe=loadall_sanpham_bienthe();
            $listsize_sanpham=loadall_sanpham_size();
            $listsize=loadall_size();
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham();
            include "sanpham/list.php";
            break;
           /*  addbienthe */
        case 'add_bt':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $sp=loadone_sanpham($_GET['id']);
                }
                    include "sanpham/addbienthe.php";
                    break;
            
        case 'start_add_bt':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $id=$_POST['id'];  
                $tenbt=$_POST['tenbt'];
                $hinhbt=$_FILES['hinhbt']['name'];
                $target_dir ="../upload/";
                $target_file =$target_dir. basename($_FILES["hinhbt"]["name"]); 
                if (move_uploaded_file($_FILES["hinhbt"]["tmp_name"], $target_file)) { 
                }else { 
                }
                insert_bienthe($tenbt,$hinhbt,$id);
                $thongbao="Them thanh cong";
            }
            $listsanpham_bienthe=loadall_sanpham_bienthe();
            $listsize_sanpham=loadall_sanpham_size();
            $listsize=loadall_size();
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham();
            include "sanpham/list.php";
          
                        break;
         case 'xoabt':
                        if (isset($_GET['idbt'])&&($_GET['idbt']>0)) {
                                delete_bienthe($_GET['idbt']);
                                
                            }
                          $listsanpham_bienthe=loadall_sanpham_bienthe();
                          $listsize_sanpham=loadall_sanpham_size();
                          $listsize=loadall_size();
                          $listdanhmuc=loadall_danhmuc();
                          $listsanpham=loadall_sanpham();
                                include "sanpham/list.php";
                                break;
        case 'suabt':
                        if (isset($_GET['idbt'])&&($_GET['idbt']>0)) {
                            $bt=loadone_bienthe($_GET['idbt']);
                        }
                            include "sanpham/updatebt.php";
                            break;
        case 'updatebt':
                              if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                  $tenbt=$_POST['tenbt'];
                                  $idbt=$_POST['idbt'];
                                $hinhbt=$_FILES['hinhbt']['name'];
                                $target_dir ="../upload/";
                                $target_file =$target_dir. basename($_FILES["hinhbt"]["name"]); 
                                if (move_uploaded_file($_FILES["hinhbt"]["tmp_name"], $target_file)) { 
                                }else { 
                                }
                                  update_bienthe($idbt,$tenbt,$hinhbt);
                                  $thongbao="cap thanh cong";
                              }
                              $listsanpham_bienthe=loadall_sanpham_bienthe();
                              $listsize_sanpham=loadall_sanpham_size();
                              $listsize=loadall_size();
                              $listdanhmuc=loadall_danhmuc();
                              $listsanpham=loadall_sanpham();
                              include "sanpham/list.php";
                              break;
/* size */
case 'addsize':
    //kiem tra xem nguoi dung co click vao nut add hay khong
    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
        $namesize=$_POST['namesize'];
        insert_size($namesize);
        $thongbao="Them thanh cong";
        
    }
    $listsize=loadall_size();
    include "sanpham/listsize.php";
    break;
case 'listsize':
    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
        $namesize=$_POST['namesize'];
        insert_size($namesize);
        $thongbao="Them thanh cong";
    }
    $listsize=loadall_size();
    include "sanpham/listsize.php";
    break;
case 'xoasize':
    if (isset($_GET['idsize'])&&($_GET['idsize']>0)) {
        delete_size($_GET['idsize']);
       
    }
    $listsize=loadall_size();
    include "sanpham/listsize.php";
        break;     
        case 'add_size':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $sp=loadone_sanpham($_GET['id']);
                $listsize=loadall_size();
                

            }
                include "sanpham/addsize.php";
                break;
    case 'start_add_size':
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $spid=$_POST['spid']; 
            $sizeid=$_POST['sizeid'];  
            $slsize=$_POST['slsize'];  
            insert_size_sp($spid,$sizeid,$slsize);
            $thongbao="Them thanh cong";
        }
        $listsanpham_bienthe=loadall_sanpham_bienthe();
        $listsize_sanpham=loadall_sanpham_size();
        $listsize=loadall_size();
        $listdanhmuc=loadall_danhmuc();
        $listsanpham=loadall_sanpham();
        include "sanpham/listsize.php";
        break;                
//TAI KHOAN CONTROLER
   
            case 'dskh':
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
            case 'xoatk':
                        if (isset($_GET['id'])&&($_GET['id']>0)) {
                            delete_taikhoan($_GET['id']);
                            
                        }
                            $listtaikhoan=loadall_taikhoan();
                            include "taikhoan/list.php";
                            break;
            case 'suatk':
                        if (isset($_GET['id'])&&($_GET['id']>0)) {
                                    $tk=loadone_taikhoan($_GET['id']);
                                }
                                    include "taikhoan/update.php";
                                    break;
                                    
            case 'updatetk':
                                   if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                        $user=$_POST['user'];
                                        $id=$_POST['id'];
                                        $pass=$_POST['pass'];
                                        $email=$_POST['email'];
                                        $address=$_POST['address'];
                                        $tel=$_POST['tel'];
                                        $role=$_POST['role'];
                                        update_taikhoan($id,$user,$pass,$email,$address,$tel,$role);
                                        $thongbao="cap thanh cong";
                                    }
                                    
                                    $listtaikhoan=loadall_taikhoan();
                                    include "taikhoan/list.php";
                                    break;
                                        
            break;
            case 'dsbl':
                $listbinhluan=loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'xoabl':
                    if (isset($_GET['idbl'])&&($_GET['idbl']>0)) {
                        delete_binhluan($_GET['idbl']);
                        
                    }
                    $listbinhluan=loadall_binhluan(0);
                    include "binhluan/list.php";
                        break;
          
            case 'dsbl':
                            $listbinhluan=loadall_binhluan(0);
                            include "binhluan/list.php";
                            break;
        
        case 'listbill':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){ 
                $kyw=$_POST['kyw']; 
            }else{
                    $kyw="";
                }
            $listbilladmin=loadall_bill_admin($kyw,0); 
            include "bill/listbill.php"; 
            break;
         /* bill */
         case 'xoabill':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_cart_bill($_GET['id']);
            }
            $listbilladmin=loadall_bill_admin(); 
            include "bill/listbill.php"; 
                break;
         case 'suabill':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $lb=loadone_bill($_GET['id']);
            }
                include "bill/update.php";
                break;
        case 'updatebill':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $bill_status=$_POST['bill_status'];
                    $id=$_POST['id'];
                    update_bill($id,$bill_status);
                    $thongbao="cap thanh cong";
                }
                $listbilladmin=loadall_bill_admin();                                 
                include "bill/listbill.php"; 
                break;
       case 'thongke':
                    $listthongke=loadall_thongke();
                    $listbilladmin=loadall_bill_admin(); 
                   include "thongke/list.php";
                   break;
        case 'bieudo':
                $listthongke=loadall_thongke();
                $listbilladmin=loadall_bill_admin(); 
                include "thongke/bieudo.php";
                break;


        default:
            include "home.php";
            break;
    }
}else{ 
    include "home.php";
}
include "footer.php";

?>