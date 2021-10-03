
    function load_data() { // read data function
        $.ajax({
            url: 'readData.php',
            method: "GET",
            success: function (res, status) {
                if (status == "success") {
                    $("#dataTable").html(res);
                
                }
            }
        });
    }

  load_data();

function addData(){ 

	var region = $("#region").val();
	var state = $("#state").val();
	var sso = $("#sso").val();
	var range = $("#range").val();
    var dir = $("#dir").val();
    var helpline = $("#helpline").val();
    var location = $("#location").val();
    var address = $("#address").val();
    // var helpline = $("#helpline").val();
    // var nh = $("#nh").val();
    // var helpline = $("#helpline").val();
    // var escalation = $("#escalation").val();
    // var escalation1 = $("#escalation1").val();
    // var ssm = $("#ssm").val();
    // var number = $("#number").val();
    // var crm_id = $("#crm_id").val();
    // var csm_Name = $("#csm_Name").val();
    // var number1 = $("#number1").val();
    // var csm_crm_id = $("#csm_crm_id").val();
    // var dpm_name = $("#dpm_name").val();
    // var dpm_Number = $("#dpm_Number").val();
    // var apm_name = $("#apm_name").val();
    // var apm_Number = $("#apm_Number").val();
    // var rpm_Name = $("#rpm_Name").val();
    // var rpm_Number = $("#rpm_Number").val();
    // var parts = $("#parts").val();
    // var number2 = $("#number2").val();
    // var rmcc = $("#rmcc").val();
    // var rmcc_no = $("#rmcc_no").val();
    
    


	if(region != '' && state != '' && sso != '' && range != '' && dir != '' && helpline != ''&& location != '' && address != ""){
       

		$.ajax({
   
	   		url: "addData.php",
	   		type: 'POST',
	   		data: {region:region,state:state,sso:sso,range:range,dir:dir,helpline:helpline,location:location, address:address},
   	   			success: function(data){
	                if(data){
                        $("#addModal").modal("hide");
	                   load_data();
                       
                     $("#response").fadeIn();
                      
                        $("#response").addClass('success-msg').removeClass('error-msg').html(data);
                       
                        setTimeout(function(){
                            $("#response").fadeOut("slow");
                        },4000);
                       
	                }else{
	                 $("#response").fadeIn();
         
                        $("#response").addClass('success-msg').removeClass('error-msg').html(data);
                       
                        setTimeout(function(){
                        $("#response").fadeOut("slow");
                        },4000);
	            }
	        }
	    });

	}else{

		$('#response').addClass('error-msg').removeClass('success-msg').html("Please Fill Required Field");

	}	
}	



function getUserDetails(userid)

    {

    $("#updateModal").modal("show");
    $("#id").val(userid);
    //alert(userid);
    $.post(
        "editData.php",
        {user_id:userid},
        function(data,status)
    {
        var user = JSON.parse(data);
        
        $("#updateRegion").val( user.region ); // field  val( user.region same as table not your form)//
        $("#upateState").val( user.state );
        $("#updateSso").val( user.sso );
        $("#updateRange").val(user.rang); 
        $("#updateDir").val(user.dir); 
        $("#updateHelpline").val( user.helpline );
        $("#updateLocation").val(user.location);
        $("#updateAddress").val(user.address);
    }
   );
        $("#updateModal").modal("show"); 
}
    


    //Update function //

    function updateData(){
    
    var id = $("#id").val();
    var uRegion = $("#updateRegion").val();
    var uState = $("#upateState").val();
    var uSso = $("#updateSso").val();
    var uRange = $("#updateRange").val();
    var uDir = $("#updateDir").val();
     var uHelpline = $("#updateHelpline").val();
    var uLocation  =  $("#updateLocation").val();
     var uAddress  = $("#updateAddress").val();


    if(uRegion != '' && uState != '' && uSso != '' && uRange != '' && uDir != '' && uLocation != '' && uAddress != ''){
       

        $.ajax({
   
            url: "updateData.php",
            type: 'POST',
            data: { id:id, mregion:uRegion, state:uState, sso:uSso, range:uRange, dir:uDir, helpline:uHelpline, location:uLocation, address:uAddress},
                success: function(data,status){
                    if(data){
                      $("#updateModal").modal("hide");
                      load_data();
                     $("#response").fadeIn();
                     $("#response").addClass('success-msg').removeClass('error-msg').html(data);
                       
                        setTimeout(function(){
                        $("#response").fadeOut("slow");
                        },4000);
                    }else{
                        $("#response").fadeIn();
         
                        $("#response").addClass('success-msg').removeClass('error-msg').html(data);
                       
                        setTimeout(function(){
                        $("#response").fadeOut("slow");
                        },4000);

                }
            }
        });     
    }else{

        $("#response").fadeIn();
        $('#response').addClass('success-msg').removeClass('error-msg').html("Please Fill Required Field");
        setTimeout(function(){
            $("#response").fadeOut("slow");
        },4000);

    }   

} 



// Add ssm Function ///


