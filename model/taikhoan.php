<?php
function delete_taikhoan($id){
    $sql=" delete from taikhoan where id=".$id;
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="select * from taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function loadone_taikhoan($id){
    $sql="select * from taikhoan where id=".$id;
    $tk=pdo_query_one($sql);
    return $tk;
}
function insert_taikhoan($email,$user,$pass){
    $sql="insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
    
}
function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
    
}
 function update_passlogin($id,$pass,$user){
    $sql="update taikhoan set user='".$user."', pass='".$pass."' where id=".$id;
    pdo_execute($sql);
} 
function update_pass($pass,$email){
    $sql="update taikhoan set pass='".$pass."' where email='".$email."'";
    pdo_execute($sql);
}
function update_taikhoanadmin($id,$user,$pass,$email,$address,$tel,$role){
   
    $sql="update taikhoan set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."',role='".$role."' where id=".$id;
    pdo_execute($sql);
}
function update_taikhoan($id,$user,$pass,$email,$address,$tel,$birthday){
   
    $sql="update taikhoan set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."', birthday='".$birthday."' where id=".$id;
    pdo_execute($sql);
}
function guimail($email,$pass){
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'ngod5712@gmail.com'; // SMTP username
        $mail->Password = 'gpca zjqj lsou mepd';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('ngod5712@gmail.com', 'Monkey Sport' ); 
        $mail->addAddress($email, 'you'); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'send password new';
        $noidungthu = "We are sends password new you login on 7 day if it delete! passnew :{$pass}"; 
        $mail->Body = $pass;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
}
?>