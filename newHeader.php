<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF">

     <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/> -->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="../Assets/Customcss/loginPage.css"> -->
        <link rel="stylesheet" type="text/css" href="Assets/Customcss/custom.css">
    
	<title>Dashbord</title>
</head>
<body>
<nav class="navbar navbar-dark  bg-secondary fixed-top flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashbord.php">Escalation Matrix Tracker</a></nav>
<!-- Start Container ----->
<div class="container-fluid" style="margin-top: 40px;">

	<div class="row">
		<nav class="col-2 bg-light slidebar py-5">
			<div class="slidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
      					<a class="nav-link  bg-secondary text-white <?php if(PAGE == 'dashbord'){echo 'active';} ?>"href="newDashbord.php"><i  class="fa fa-tachometer"></i> &nbsp;DashBord</a>
    				</li>
					<li class="nav-item">
      					<a class="nav-link bg-light text-muted <?php if(PAGE == 'view'){echo 'active';} ?>"href="view.php"><i  class="fa fa-user"></i> &nbsp;View Record</a>
    				</li>

    				<li class="nav-item">
      					<a class="nav-link bg-light text-muted  <?php if(PAGE == 'addSSM'){echo 'active';} ?>" href="addSSm.php"><i  class="fa fa-user"></i>&nbsp;View SSM</a>
                    </li>
      					<li class="nav-item">
      					<a class="nav-link bg-light text-muted <?php if(PAGE == 'agentRecord'){echo 'active';} ?>" href="agentRecord.php"><i  class="fa fa-user"></i>&nbsp;Agentlink</a>
    				</li>

    				</li>
      					<li class="nav-item">
      					<a class="nav-link  bg-light text-muted <?php if(PAGE == 'Logout'){echo'active';} ?>" href="logout.php"><i  class="fa fa-sign-out"></i>&nbsp;Logout</a>
    				</li>	
    			</ul>	
	       </div>
        </nav> <!--End the nav---->
        <div class="col-sm-9 col-md-10">
        	<div class="row">
            
                    