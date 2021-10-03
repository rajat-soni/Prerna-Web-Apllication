<?php
session_start();
if(isset($_POST['email']))
{
    include "../dbManager/dbConfig.php";
    $table = 'admin_login_tbl';
     
    $email = $_POST['email'];
 
    $sqlQry = "SELECT * FROM `admin_login_tbl` WHERE email_id='" . $email . "'";
    //print_r($sqlQry);
    $runQry = $mysqli->query($sqlQry);
    if(!empty($runQry) && $runQry->num_rows>0){
    $row = $runQry->fetch_assoc();

    $username =$row['user_name'];
    $email=$row['email_id'];
    $admin_id= $row['admin_id'];
    //echo $username,$email,$admin_id;
    $subject ="Password Reset";
    $body = " Dear, '".$username."' Click here to reset your password http://localhost/Escalation%20Matrix%20Tracker/loginPage/password_Reset_Data.php?admin_id=$admin_id";
    $sender_Email = "rs.rajatsoni441@gmail.com";

    if(mail($email, $subject, $body, $username,$sender_Email)){

      $_SESSION['msg'] = "Dear '".$username."' please check your email";
      header("location: password_Reset_data.php");
    }else{
      Echo "Email Sending Failed";
    }

    
  
}else{echo "row is not find";}
}
?>