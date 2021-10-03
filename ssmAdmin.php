 <!DOCTYPE html>
                
<html lang = "en">
<head>
	<meta charset="UTF">

     <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/> -->
      <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="../Assets/Customcss/loginPage.css"> -->
        <link rel="stylesheet" type="text/css" href="Assets/Customcss/custom.css">
        <link rel="stylesheet" type="text/css" href="Assets/Customcss/searchBox.css">
    
	<title>Dashbord</title>
</head>
<body>
<nav class="navbar navbar-dark  bg-secondary fixed-top flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 " href="#" class="text-white">Escalation Matrix Tracker</a><p class="text-white mt-2"> Welcome to ssm Admin</p></nav>
<!-- Start Container ----->
<div class="container-fluid" style="margin-top: 40px;">

	<div class="row">
		<nav class="col-2 bg-light slidebar py-5">
			<div class="slidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
      					<a class="nav-link  bg-secondary text-white <?php if(PAGE === 'ssmAdmin'){echo 'active';} ?>"href="ssmAdmin.php"><i  class="fa fa-tachometer"></i> &nbsp;DashBord</a>
    				</li>
					
    				<li class="nav-item">
      					<a class="nav-link bg-light text-muted  <?php if(PAGE == 'addSSM'){echo 'active';} ?>" href="addSSm.php"><i  class="fa fa-user"></i>&nbsp;Add SSM</a>

    				</li>
      					<li class="nav-item">
      					<a class="nav-link  bg-light text-muted <?php if(PAGE == 'Logout'){echo'active';} ?>" href="logout.php"><i  class="fa fa-sign-out"></i>&nbsp;Logout</a>
    				</li>	
    			</ul>	
	       </div>
        </nav> <!--End the nav-->
        <div class="col-sm-9 col-md-10">
        	<div class="row">
        		<div class="col-lg-12 mx-auto text-white text-center mt-4">
        			<!-- <form> -->
	      				<div class="input-group">
	    					<input type="text" class="form-control" placeholder="Search Records here" id="search" onkeyup = "searchData()">
	    						<div class="input-group-append" class="form-control">
	      							<button class="btn btn-secondary" type="button" >
	        							<i class="fa fa-search" id="icon"></i>
	      							</button>
	    						</div>
	  					</div>
	  				<!-- </form> -->
    			</div> 	<!-- end of  seach row -->

    			<div class="row" >
    				<div class="col-sm-12 col-md-12 mx-auto" >
    					<div id="newTable" ></div>
    					<div id="response" ></div>
    				</div>
    			</div>



                    <?php

						//including db.php file for database connection
						include ("dbManager/dbConfig.php");

						//query for selecting data from our database
						$query = "SELECT * FROM `ssm_tbl`";
						$result = $mysqli->query($query);
	 					$no =1;
						//checking result that should be more than 0
						if ($result->num_rows > 0) {
    						// include 'header.php';
    						$opt = '<table class="table table-bordered bg-light shadow mt-4  id="myTable">
    							<tbody >
        							<tr class="bg-secondary text-white">
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
									                    <i class="fa fa-trash" style="font-size: 24px" onclick="deleteData('.$row['ssm_id'].')" class="btn btn-danger delete"></i</td>
						                            </tr>'
                                                    ;
                                                $no++;
    								    }
    
    					                    $opt .=
                                '</table>';
                                                      // echo our output that we can use in our index.php using ajax response
                            echo $opt;
                        }
                   
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php 
     include'footer.php';
     ?>