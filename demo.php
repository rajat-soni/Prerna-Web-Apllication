<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
 
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
</body>
</html>



<!-- <div class="col-md-6 mt-4">
                <div class="card bg-light shadow outline">
                    <div class="card-header">Add Record</div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6" class="form-group">
                                <label>Region</label>
                                <Select  class="form-control" id="region" placeholder="Region">
                                    <option>Select Value</option>
                                    <option value="India" id="region">India</option>
                                </Select>
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label>State</label>
                                <Select  class="form-control" id="state" placeholder="state">
                                    <option>Select Value</option>
                                    <option value="uttar pradesh" id="state">Uttar Pradesh</option>
                                </Select>
                            </div>

                        </div>

                         <div class="row mb-3">
                 
                            <div class="col-md-6" class="form-group">
                                <label>SSO</label>
                                <Select  class="form-control" id="sso" placeholder="state">
                                    <option>Select Value</option>
                                    <option value="lucknow" id="sso">Lucknow</option>
                                </Select>
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label>Range</label>
                                <input type="text" class="form-control" placeholder="Enter Range" name="range" id="range">
                            </div>   
                        </div>
                        <div class="row mb-3">
                            
                            <div class="col-md-6" class="form-group">
                                <label>Dir/Tass</label>
                                <input type="text" class="form-control" id="dir" placeholder="Enter DIR/TASS" name="dir">
                            </div>
                             <div class="col-md-6" class="form-group">
                                <label>HelpLine Number</label>
                                <input type="text" class="form-control" id="helpline" placeholder="Enter Helpline Number" >
                            </div>
                            
                            

                        </div>

                         <div class="row mb-3">
                 
                            <div class="col-md-6" class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" id="location" placeholder="Enter location" name="location" id="location">
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label>Adress</label>
                               <textarea type="text" id="address" class="form-control" placeholder="Enter Location"></textarea>
                            </div>   
                        </div> -->

                             <!-- <div class="row mb-3">

                            <div class="col-md-6" class="form-group">
                                <label>NH</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="nh" id="nh">
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label>24*helpline</label>
                                <input type="password" class="form-control" placeholder="Enter Helpline number" name="helpline" id="helpline">
                            </div>

                        </div> -->
<!-- 
                         <div class="row mb-3">
                 
                            <div class="col-md-6" class="form-group">
                                <label>Escalation1</label>
                                <input type="text" class="form-control" id="escalation" placeholder="Enter Escalation1" name="email" id="escalation">
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label>Escalation2</label>
                                <input type="text" class="form-control" placeholder="Enter password" name="pswd" id="Escalation2">
                            </div>  
                             <! <div class="col-md-4" class="form-group">
                                <label> Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>  -->
                  <!--       </div>
                        <div class="row mb-3">
                            <div class="col-md-4" class="form-group">
                                <label>SSM</label>
                                <input type="text" class="form-control" id="ssm" placeholder="Enter SSM" name="ssm" id="ssm">
                            </div>
                            <div class="col-md-4" class="form-group">
                                <label>Number</label>
                                <input type="text" class="form-control" placeholder="Enter password" name="number" id="number">
                            </div>
                            <div class="col-md-4" class="form-group">
                                <label>SSM CRM_ID</label>
                                <input type="text" class="form-control" id="ssm_id" placeholder="Enter crm_ssm_id" name="crm_id">
                            </div>

                        </div>

                         <div class="row mb-3">
                 
                            <div class="col-md-4" class="form-group">
                                <label>CSM_Name</label>
                                <input type="text" class="form-control" id="csm_Name" placeholder="Enter Csm_Name" name="csm_Name" id="csm_Name">
                            </div>
                            <div class="col-md-4" class="form-group">
                                <label>Number</label>
                                <input type="text" class="form-control" placeholder="Enter Number" name="number" id="number1">
                            </div>  
                            <div class="col-md-4" class="form-group">
                                <label>CSM_CRM_ID</label>
                                <input type="text" class="form-control" placeholder="Enter csm_crm_id" name="csm_id" id="csm_crm_id">
                            </div>    
                        </div>
                             <div class="row mb-3">
                            <div class="col-md-6" class="form-group">
                                <label>DPM Name</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter dpm name" name="dpm name" id="dpm_name">
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label>DPM_Number</label>
                                <input type="password" class="form-control" placeholder="Enter Dpm Number" name="dpm_number" id="dpm_Number">
                            </div>

                        </div>

                         <div class="row mb-3">
                 
                            <div class="col-md-6" class="form-group">
                                <label>APM Name</label>
                                <input type="text" class="form-control" id="apm_Name" placeholder="Enter Name" id="apm_name">
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label>APM Number</label>
                                <input type="text" class="form-control" placeholder="Enter Apm Number" id ="apm_Number">
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6" class="form-group">
                                <label>RPM Name</label>
                                <input type="text" class="form-control" id="rpm_Name" placeholder="Enter RPM" name="rpm_Name" >
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label>RPM Number</label>
                                <input type="password" class="form-control" placeholder="Enter RPM" name="rpm" id="rpm_Number">
                            </div>

                        </div>

                         <div class="row mb-3">
                 
                            <div class="col-md-6" class="form-group">
                                <label>Part CO</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter Part-CO" id="parts">
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label>Number</label>
                                <input type="text" class="form-control" placeholder="Enter number" id="number2">
                            </div>   
                        </div>
                             <div class="row mb-3">
                            <div class="col-md-6" class="form-group">
                            <label>RMCC</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter rmcc" id="rmcc">
                            </div>
                            <div class="col-md-6" class="form-group">
                                <label>RMCC Number</label>
                                <input type="password" class="form-control" placeholder="Enter rmcc_number" id="rmcc_no">
                            </div> -->

                        <!-- </div> -->

                          <!--- End  Last Row ---->
                        <button type="button"  class="btn-btn-success btn-md">Save</button>
                        <button type="button"  class="btn-btn-primary btn-md" onclick="addData()">Submit</button>

                    </div> 
                    <div class="card-footer">Footer</div>
                </div>
                
                <div id="response">
            </div>
            <div class="col-md-3"></div>
        </div>
        
    </div>