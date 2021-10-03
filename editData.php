<?php 

include 'dbManager/dbConfig.php';
//print_r($_POST);
 //die;
    if(isset($_POST['user_id']) && isset($_POST['user_id'])!= ""){

        $userid = $_POST['user_id'];


         $sqlQry = "SELECT * FROM `add_tbl` WHERE `id` = '$userid'";
         // print_r($sqlQry);
        $runQry = $mysqli->query($sqlQry);
        
        $response[] = array();
                
            if($runQry->num_rows>0){
                while ($row = $runQry->fetch_assoc()){
                  $response = $row;
                  // print_r($row['id']);
                  // die;
                //    print_r($response);
                 
                  }
                  echo json_encode($response); 
            }else{
               $response['status'] = 200;
               $response['msg'] = "data is not found";
            }

            

    }else{

        $response['status'] = 200;
        $response['msg'] = "Id is not find";
    }        
          
?>