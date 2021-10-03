<?php 

include 'dbManager/dbConfig.php';
//print_r($_POST);
 //die;
    if(isset($_POST['id']) && isset($_POST['id'])!= ""){

        $id = $_POST['id'];

        extract($_POST);;


         $sqlQry = "UPDATE `ssm_tbl` SET  `email` = '$email', `password` ='$password', region='$region',`state` = '$state', `sso` = '$sso', `rang` = '$range', `dir` = '$dir', `helpline`='$helpline', `location` = '$location', `address`='$address' WHERE `ssm_id`=".$id."";
          // print_r($sqlQry);
          // die;

        if($runQry = $mysqli->query( $sqlQry ) === True){
                echo "Record  Successfully Updated..";
            }else{
               $response['status'] = 200;
               $response['msg'] = "data is not found";
            }

            

    }else{

        $response['status'] = 200;
        $response['msg'] = "Id is not find";
    }        
          
?>