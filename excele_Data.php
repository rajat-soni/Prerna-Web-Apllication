    <?php include 'db/dbManager.php';
    // include 'header.php';
    //html code for output
    $opt = '<table class="table table-bordered shadow mt-4" id="data_table">
    <tbody>
        <tr>
        <th>id</th>
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
                    <td>'.$row["region"].'</td>
                    <td>'.$row["state"].'</td>
                    <td>'.$row["sso"].'</td>
                    <td>'.$row["rang"].'</td>
                    <td>'.$row["dir"].'</td>
                    <td>'.$row["helpline"].'</td>
                    <td>'.$row["location"].'</td>
                    <td>'.$row["address"].'</td>
                   
                </tr>'
                ;
                $no++;
    }
    
    $opt .=
        '</table>';
    // echo our output that we can use in our index.php using ajax response
    echo $opt;
}
<?php include'footer.php';?>