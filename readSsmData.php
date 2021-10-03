<?php

//including db.php file for database connection
include ("dbManager/dbConfig.php");

//query for selecting data from our database
$query = "SELECT * FROM `ssm_tbl`";

//execute query
$result = $mysqli->query($query);
$no =1;
//checking result that should be more than 0
if ($result->num_rows > 0) {
    // include 'header.php';
    //html code for output
    $opt = '<table class="table table-bordered shadow mt-4 table-responsive bg-light">
    <tbody>
        <tr class="bg-secondary text-white hover">
        <th>id</th>
        <th>Email</th>
        <th>Password</th>  
        <th>Region</th>
        <th>State</th>
        <th>SSO</th>
        <th>Range</th>
        <th>DIR/TASS</th>
        <th>HelpLine No</th>
        <th>Location</th>
        <th>Address</th>
        <th>Actions</th>
        </tr>
    ';

    //looping our data till the last on our database
    while ($row = $result->fetch_assoc()) {
        $opt .= '<tr>
                    <td>'.$no.'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["password"].'</td>
                    <td>'.$row["region"].'</td>
                    <td>'.$row["state"].'</td>
                    <td>'.$row["sso"].'</td>
                    <td>'.$row["rang"].'</td>
                    <td>'.$row["dir"].'</td>
                    <td>'.$row["helpline"].'</td>
                    <td>'.$row["location"].'</td>
                    <td>'.$row["address"].'</td>
                    <td><i class="fa fa-edit" style="font-size:24px" onclick="getSsmDetails('.$row['ssm_id'].')"></i>
                    <i class="fa fa-trash" style="font-size: 24px" onclick="deleteSsmData('.$row['ssm_id'].')" class="btn btn-danger delete"></i</td>
                </tr>';
                $no++;
    }
    
    $opt .=
        '</table>';
    // echo our output that we can use in our index.php using ajax response
    echo $opt;
}
 ?>