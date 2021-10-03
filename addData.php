<?php 

include 'dbManager/dbConfig.php';
// print_r($_POST);
// die;

        $region = $_POST['region'];
        $state = $_POST['state'];
        $sso =   $_POST['sso'];
        $range =   $_POST['range'];
        $dir =   $_POST['dir'];
        $helpline =   $_POST['helpline'];
        $location =   $_POST['location'];
        $address =   $_POST['address'];


            if ($region != "" && $state != "" && $sso!= "" && $dir != "" && $helpline != "" && $location != "" && $address != ""){
                $sqlQry = "INSERT INTO `add_tbl`(`region`,`state`,`sso`,`rang`,`dir`,`helpline`,`location`,`address`) VALUES ('$region','$state','$sso', '$range','$dir','$helpline','$location','$address')";
                if($runQry = $mysqli->query($sqlQry)===TRUE){
                        
                      echo "Recored Added Successfully..";
                    } else {
                      echo "Error in Adding Recorde";
                    } 

                    

            }else{
                echo"Fill Required Field";
            }
          $mysqli->close();
?>