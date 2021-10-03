<?php
include("dbManager/dbConfig.php");

if(isset($_POST['id'])){

	$userid = $_POST['id'];

	$sqlQry = "DELETE FROM `add_tbl` WHERE id = '$userid'";
	$runQry = $mysqli->query($sqlQry) or die("Error In Query");
	if($runQry = $mysqli->query($sqlQry) === True){

		echo " Data is deleted successfully..";
	}else{

		echo"Error in deletion";
	}

}
?>