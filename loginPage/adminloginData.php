<?php
session_start();
       
    include '../dbManager/dbConfig.php';

        $email = $_POST['email'];
        $password = $_POST['password'];

            if ($email != "" && $password != ""){

                $runQry = $mysqli->query("SELECT * FROM `admin_login_tbl`");
                
                    if ($runQry->num_rows > 0) {
                        $row = $runQry->fetch_assoc();
                        $newemail = $row['email_id'];
                       
                        $newpassword = $row['password'];
                        
                            if($email == $newemail && $password == $newpassword){
                                // header("location:../dashBord.php");
                                $_SESSION['email'] = $newemail;
                                echo 1;

                            }else
                            {   echo "Dear ".$row['user_name']." please check your credentails";

                            }

                    }else {
                            echo "Data Not Find";
                    }

            }else{
                echo"fill Required Field";
            }
          $mysqli->close();

?>