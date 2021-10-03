<?php

	include ("dbManager/dbConfig.php");
	     // print_r($_POST);
	     	// die;
		// error_reporting(0);
      	$search = $_POST['search_id'];


     		 $sqlQry  = "SELECT `region`, `state`, `sso`, `dir`, `rang`, `dealer_name`, `location`, `address`, `nh`, `helpline`, `escalation`, `escalation1`, `escalation2`, `escalation3`, `escalation4`, `escalation5`, `dpm`, `number`, `csm_name`, `number1`, `csm_crm_id`, `ssm`, `ssm_crm_id`, `number2`, `parts_co_ordinator`, `number3`, `apm_name`, `apm_number`, `rpm`, `rpm_number`, `rmcc`, `rmcc_number`, `manager`, `number4`, `head_field_service`, `number5`, `dealer_devsion_code`, `crm_id`, `dlr_code` FROM `escalation_tbl` WHERE `region` LIKE '$search%' OR `state` LIKE '$search%' OR `sso` LIKE '$search%' OR `dir` LIKE '$search%' OR `rang` LIKE '$search%' OR `dealer_name` LIKE '$search%' OR `location` LIKE '$search%' OR `address` LIKE '$search%' OR `nh` LIKE '$search%' OR `helpline` LIKE '$search%' OR `escalation` LIKE '$search%' OR `escalation1` LIKE '$search%' OR `escalation2` LIKE '$search%' OR `escalation3` LIKE '$search%' OR `escalation4` LIKE '$search%' OR `escalation5` LIKE '$search%' OR `dpm` LIKE '$search%' OR `number` LIKE '$search%' OR `csm_name` LIKE '$search%' OR `number1` LIKE '$search%' OR `ssm_crm_id` LIKE '$search%' OR `ssm` LIKE '$search%' OR `ssm_crm_id` LIKE '$search%' Or `number2` LIKE '$search%' OR
         		`parts_co_ordinator` LIKE '$search%' OR `number3` LIKE '$search%' OR `apm_name` LIKE '$search%' OR `apm_number` LIKE '%$search%' OR `rpm` LIKE '%$search%' OR `rpm_number` LIKE '%$search%' OR `rmcc` LIKE '$search%' OR `rmcc_number` LIKE '$search%' OR `manager` LIKE '$search%' OR `number4` LIKE '$search%' OR `head_field_service` LIKE '%$search%' OR `number5` LIKE '%$search%' OR `dealer_devsion_code` LIKE '$search%'  OR `crm_id` LIKE '$search%'  OR `dlr_code` LIKE '$search%' LIMIT 10"; 
         		// print_r($sqlQry);
         		// die;


			$result = $mysqli->query($sqlQry) or die("Not Executed");
				 $no =1;
				
				if($result->num_rows > 0) {

				    $opt = '<table class="table table-bordered  shadow mt-4 bg-light">
				    <tbody>
				        <tr class="bg-secondary text-white hover">
				        <th>id</th>
				        <th>Region</th>
				        <th>State</th>
				        <th>SSO</th>
				        <th>DIR/TASS</th>
				        <th>Range</th>
				        <th>Dealer_Name</th>
				        <th>Location</th>
				        <th>Address</th>
				        <th>nh</th>
				        <th>24/7HelpLine</th>
				        <th>Escalation 1</th>
				        <th>Escalation 2</th>
				        <th>Escalation 3</th>
				        <th>Escalation 4</th>
				        <th>Escalation 5</th>
				        <th>Escalation 6</th>
				        <th>Dpm</th>
				        <th>Number</th>
				        <th>Csm_name</th>
				        <th>Number</th>
				        <th>Csm_Crm_id</th>
				        <th>Number</th>
				        <th>Parts</th>
				        <th>Number</th>
				        <th>Apm_Name</th>
				        <th>ApmNo</th>
				        <th>Rpm</th>
				        <th>RpmNumber</th>
				        <th>Rmcc</th>
				        <th>Rmcc_Number</th>
				        <th>Manager</th>
				        <th>Number</th>
				        <th>HeadFieldSservice</th>
				        <th>Number</th>
				        <th>Dealer_DevisonCode</th>
				        <th>Crmid</th>
				        <th>DealerCode</th>
				        </tr>
				    ';
				    while ($row = $result->fetch_assoc()) {
				        $opt .= '<tr>
			                <td>'.$no.'</td>
			                <td>'.$row["region"].'</td>
			                <td>'.$row["state"].'</td>
			                <td>'.$row["sso"].'</td>
			                <td>'.$row["dir"].'</td>
			                <td>'.$row["rang"].'</td>
			                <td>'.$row["dealer_name"].'</td>
			                <td>'.$row["location"].'</td>
			                <td>'.$row["address"].'</td>
			                <td>'.$row["nh"].'</td>
			                <td>'.$row["escalation"].'</td>
			                <td>'.$row["escalation1"].'</td>
			                <td>'.$row["escalation2"].'</td>
			                <td>'.$row["escalation3"].'</td>
			                <td>'.$row["escalation4"].'</td>
			                <td>'.$row["escalation5"].'</td>
			                <td>'.$row["dpm"].'</td>
			                <td>'.$row["number"].'</td>
			                <td>'.$row["csm_name"].'</td>
			                <td>'.$row["number1"].'</td>
			                <td>'.$row["csm_crm_id"].'</td>
			                <td>'.$row["ssm"].'</td>
			                <td>'.$row["ssm_crm_id"].'</td>
			                <td>'.$row["number2"].'</td>
			                <td>'.$row["parts_co_ordinator"].'</td>
			                <td>'.$row["number3"].'</td>
			                <td>'.$row["apm_name"].'</td>
			                <td>'.$row["apm_number"].'</td>
			                <td>'.$row["rpm"].'</td>
			                <td>'.$row["rpm_number"].'</td>
			                <td>'.$row["rmcc"].'</td>
			                <td>'.$row["rmcc_number"].'</td>
			                <td>'.$row["manager"].'</td>
			                <td>'.$row["number4"].'</td>
			                <td>'.$row["head_field_service"].'</td>
			                <td>'.$row["number5"].'</td>
			                <td>'.$row["dealer_devsion_code"].'</td>
			                <td>'.$row["crm_id"].'</td>
			                <td>'.$row["dlr_code"].'</td>
				        </tr>';
				            $no++;
				    }
				    
				    $opt .=
				        '</table>';
				    	echo $opt;
				}else{

					  echo "Dear User No Records Found";
				}
	

		 ?>

		 <?php
		 //include ("dbManager/dbConfig.php");
		 $sqlQry =" SELECT * FROM `escalation_tbl` ";
         //print_r($sqlQry);
		 $runQry = $mysqli->query($sqlQry) or die("query faild");
		 if( $total_reco = $runQry->num_rows > 0 ){

		  $result = $runQry->fetch_assoc();


		 	$limit = 3;
		 	
		 	$total_Pages = ceil($total_reco/$limit);
		 	echo  '<ul class="pagination">';
  
		 	for( $i = 1; $i <= $total_Pages; $i++){
		 		echo '<li class="active"><a href ="newDashbord.php?page = '.$i.'">'.$i.'</a></li>';

		 	}
		 	echo '</ul>';
		 }
		 ?>	

		