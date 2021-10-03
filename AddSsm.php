<?php 
include'ssmHeader.php';?>
<div class="container-fluid mt-4" id="myTable">
    
    <!-- <h2>Add SSM</h2> -->
    <!-- Trigger the modal with a button -->


    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Add SSM</button>
    <!-- Modal -->
    <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog"></div></div>
        
   <div id="mytable"></div>
<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" id="myModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle bg-light text-muted" >Add SSM Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            	<div class="row mb-3">
                    <div class="col-md-6" class="form-group">
                        <label>Email</label>
                        
                        <input type="email" id ="email" placeholde="Enter email" class="form-control">
                    </div>
                    <div class="col-md-6" class="form-group">
                        <label>Password</label>
                        <input type="password" id ="password" placeholde="Enter password" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6" class="form-group">
                        <label>Region</label>
                        <Select  class="form-control" id="region" name="udateRegion" placeholder="Region">
                            <option>Select Value</option>
                            <option value="North" id="region">North</option>
                        </Select>
                    </div>
                    <div class="col-md-6" class="form-group">
                        <label>State</label>
                        <Select  class="form-control" id="state" name="updateState" placeholder="state">
                            <option>Select Value</option>
                            <option value="uttar pradesh" id="state" name="updateState">Uttar Pradesh</option>
                        </Select>
                    </div>
                </div>
                <div class="row mb-3">
                                
                                <div class="col-md-6" class="form-group">
                                    <label>SSO</label>
                                    <Select  class="form-control" id="sso" placeholder="state">
                                        <option>Select Value</option>
                                        <option value="lucknow">Lucknow</option>
                                    </Select>
                                </div>
                                <div class="col-md-6" class="form-group">
                                    <label>Range</label>
                                    <input type="text" class="form-control" placeholder="Enter Range" name="UpdateRange" id="range">
                                </div>
                            </div>
                            <div class="row mb-3">
                                
                                <div class="col-md-6" class="form-group">
                                    <label>Dir/Tass</label>
                                    <input type="text" class="form-control" id="dir" placeholder="Enter DIR/TASS" name="Dir">
                                </div>
                                <div class="col-md-6" class="form-group">
                                    <label>HelpLine Number</label>
                                    <input type="text" class="form-control" id="helpline" placeholder="Enter Helpline Number" >
                                </div>
                                
                                
                            </div>
                            <div class="row mb-3">
                                
                                <div class="col-md-6" class="form-group">
                                    <label>Location</label>
                                    <input type="text" class="form-control"  placeholder="Enter location" name="location" id="location">
                                </div>
                                <div class="col-md-6" class="form-group">
                                    <label>Adress</label>
                                    <textarea type="text" id="address" class="form-control" placeholder="Enter Location"></textarea>
                                </div>
                            </div>




            </div>
            <div class="modal-footer" class="form-group">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" name="">Save</button>
                <button type="button" class="btn btn-primary" name="save" onclick="addSsmData()">Submit</button>
                <!-- <input type="hidden" id="id" name="id"> -->
            </div>
        </div>
    </div>
    
</div>

<div id="response"></div>

<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" id="updateSsmModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle bg-light text-mute" >Update Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-6" class="form-group">
                        <label>Email</label>
                        
                            <input type ="email" id ="updateEmail" placeholder="Enter Email" class="form-control">
                    </div>
                    <div class="col-md-6" class="form-group">
                        <label>Password</label>
                         <input type ="password" id ="updatePassword" placeholder="Enter Password" class="form-control">
                        </Select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6" class="form-group">
                        <label>Region</label>
                        <Select  class="form-control" id="updateRegion" name="udateRegion" placeholder="Region">
                            <option>Select Value</option>
                            <option value="North" id="upateRegion">North</option>
                        </Select>
                    </div>
                    <div class="col-md-6" class="form-group">
                        <label>State</label>
                        <Select  class="form-control" id="upateState" name="updateState" placeholder="state">
                            <option>Select Value</option>
                            <option value="uttar pradesh" id="updateState" name="updateState">Uttar Pradesh</option>
                        </Select>
                    </div>
                </div>
                <div class="row mb-3">
                                
                                <div class="col-md-6" class="form-group">
                                    <label>SSO</label>
                                    <Select  class="form-control" id="updateSso" placeholder="state">
                                        <option>Select Value</option>
                                        <option value="lucknow">Lucknow</option>
                                    </Select>
                                </div>
                                <div class="col-md-6" class="form-group">
                                    <label>Range</label>
                                    <input type="text" class="form-control" placeholder="Enter Range" name="UpdateRange" id="updateRange">
                                </div>
                            </div>
                            <div class="row mb-3">
                                
                                <div class="col-md-6" class="form-group">
                                    <label>Dir/Tass</label>
                                    <input type="text" class="form-control" id="updateDir" placeholder="Enter DIR/TASS" name="updateDir">
                                </div>
                                <div class="col-md-6" class="form-group">
                                    <label>HelpLine Number</label>
                                    <input type="text" class="form-control" id="updateHelpline" placeholder="Enter Helpline Number" >
                                </div>
                                
                                
                            </div>
                            <div class="row mb-3">
                                
                                <div class="col-md-6" class="form-group">
                                    <label>Location</label>
                                    <input type="text" class="form-control"  placeholder="Enter location" name="location" id="updateLocation">
                                </div>
                                <div class="col-md-6" class="form-group">
                                    <label>Adress</label>
                                    <textarea type="text" id="updateAddress" class="form-control" placeholder="Enter Location"></textarea>
                                </div>
                            </div>

            </div>
            <div class="modal-footer" class="form-group">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" name="">Close</button>
                <button type="button" class="btn btn-primary" name="update" onclick="updateSsmData()">Update</button>
                <input type="hidden" id="ssm_id" name="id">
            </div>
        </div>
    </div>
</div>
     <div id="response"></div>       
<?php include'footer.php';

?>