<?php include'newHeader.php';?>

    
    <div class="container-fluid mt-4">

    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Record</button>
    

    <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog"></div></div>

        <div id="dataTable"></div>
<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" id="myModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle bg-light text-mute" >Add Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal" name="" onclick="saveData()">Save</button>
                <button type="button" class="btn btn-primary" name="update" onclick="addData()">Submit</button>
                <!-- <input type="hidden" id="id" name="id"> -->
            </div>
        </div>
    </div>
</div>
 <div id="response"></div>

    <!--- end modal ------>
    
            
            <!-- Modal content-->
            <!-- <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="card bg-light shadow outline">
                        <div class="card-header"> Add Record </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6" class="form-group">
                                    <label>Region</label>
                                    <Select  class="form-control" id="region" name="region" placeholder="Region">
                                        <option>Select Value</option>
                                        <option value="India" id="region" name="region">India</option>
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
                                    <input type="text" class="form-control" placeholder="Enter Range" name="rang" id="range">
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
                            </div>
                            
                            <button type="button"  class="btn-btn-success btn-md">Save</button>
                            <button type="button"  class="btn-btn-primary btn-md" onclick="addData()">Submit</button>
                        </div>
                        <div class="card-footer">Footer</div>
                    </div>
                </div>
                
                <div id="response">
                </div>
                <div class="col-md-3"></div>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    
</div> -->
<!-- </div>
</div> -->


 <!---------------------------------------- Update_Modal ----------------------------------->
 <!---------------------------------------- Update_Modal ----------------------------------->

<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Udate Record</button> -->
    <!-- Modal -->




<!-- Modal -->
<div class="response"></div>
<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" id="updateModal">
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
                <button type="button" class="btn btn-primary" name="update" onclick="updateData()" onclick = "newUpdate()">update changes</button>
                <input type="hidden" id="id" name="id">
            </div>
        </div>
    </div>
</div>
</div>
<?php include'footer.php';?>
<!----Update_Modal_End----->




    <!-- <div class="modal fade"  role="dialog" id="">
        <div class="modal-dialog" > -->
            
            <!-- Modal content-->
            <!-- <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    Update Record
                </div>
                <div class="modal-body">
                    <div class="card bg-light shadow outline">
                        <div class="card-header"> Update Record </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6" class="form-group">
                                    <label>Region</label>
                                    <Select  class="form-control" id="updateRegion" placeholder="Region">
                                        <option>Select Value</option>
                                        <option value="India" id="udateRegion">India</option>
                                    </Select>
                                </div>
                                <div class="col-md-6" class="form-group">
                                    <label>State</label>
                                    <Select  class="form-control" id="udateState" placeholder="state">
                                        <option>Select Value</option>
                                        <option value="uttar pradesh" id="udateState">Uttar Pradesh</option>
                                    </Select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                
                                <div class="col-md-6" class="form-group">
                                    <label>SSO</label>
                                    <Select  class="form-control" id="UpdateSso" placeholder="state">
                                        <option>Select Value</option>
                                        <option value="lucknow" id="udateSso">Lucknow</option>
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
                                    <input type="text" class="form-control" id="UpdateHelpline" placeholder="Enter Helpline Number" >
                                </div>
                                
                                
                            </div>
                            <div class="row mb-3">
                                
                                <div class="col-md-6" class="form-group">
                                    <label>Location</label>
                                    <input type="text" class="form-control" id="location" placeholder="Enter location" name="location" id="updateLocation">
                                </div>
                                <div class="col-md-6" class="form-group">
                                    <label>Adress</label>
                                    <textarea type="text" id="updateAddress" class="form-control" placeholder="Enter Location"></textarea>
                                </div>
                            </div>
                            
                            <button type="button"  class="btn-btn-success btn-md">Save</button>
                            <button type="button"  class="btn-btn-primary btn-md">Submit</button>
                        </div>
                        <div class="card-footer">Footer</div>
                    </div>
                </div>
                
                <div id="response">
                </div>
                <div class="col-md-3"></div>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

    </div> -->
