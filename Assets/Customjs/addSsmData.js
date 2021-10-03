function read_Ssm() { // read data function
    $.ajax({
        url: 'readSsmData.php',
        method: "GET",
        success: function (res, status) {
            if (status == "success") {
                $("#mytable").html(res);
                //$(".mytable").html(res);
            }
        }
});
}
read_Ssm();

function addSsmData(){ // Insert Data Function ///
    var email = $("#email").val();
    var password = $("#password").val();
    var region = $("#region").val();
    var state = $("#state").val();
    var sso = $("#sso").val();
    var range = $("#range").val();
    var dir = $("#dir").val();
    var helpline = $("#helpline").val();
    var location = $("#location").val();
    var address = $("#address").val();
    


    if(email != '' && password != '' && region != '' && state != '' && sso != '' && range != '' && dir != '' && helpline != ''&& location != '' && address != ""){
       

        $.ajax({
   
            url: "addSsm_Data.php",
            type: 'POST',
            data: {email:email, password:password, region:region,state:state,sso:sso,range:range,dir:dir,helpline:helpline,location:location, address:address},
                success: function(data){
                    if(data){
                       read_Ssm();
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

function getSsmDetails(ssm_id)
 {
    //alert(userid);

    $("#updateSsmModal").modal("show");
    $("#ssm_id").val(ssm_id);
    //alert(userid);
    $.post(
        "edit_Ssm_Data.php",
        {user_id:ssm_id},
        function(data,status)
    {
        var user = JSON.parse(data);
        $("#updateEmail").val( user.email );
        $("#updatePassword").val( user.password );
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
        $("#updateSsmModal").modal("show"); 
}



function updateSsmData(){
    
    var id = $("#ssm_id").val();
    var uEmail = $("#updateEmail").val();
    var uPassword = $("#updatePassword").val();
    var uRegion = $("#updateRegion").val();
    var uState = $("#upateState").val();
    var uSso = $("#updateSso").val();
    var uRange = $("#updateRange").val();
    var uDir = $("#updateDir").val();
     var uHelpline = $("#updateHelpline").val();
    var uLocation  =  $("#updateLocation").val();
     var uAddress  = $("#updateAddress").val();


    if( uEmail != '' && uPassword != '' && uRegion != '' && uState != '' && uSso != '' && uRange != '' && uDir != '' && uLocation != '' && uAddress != ''){
       

        $.ajax({
   
            url: "updateSsm_Data.php",
            type: 'POST',
            data: { id:id, email:uEmail, password:uPassword, region:uRegion, state:uState, sso:uSso, range:uRange, dir:uDir, helpline:uHelpline, location:uLocation, address:uAddress},
                success: function(data,status){
                    if(data){
                      $("#updateSsmModal").modal("hide");
                      read_Ssm();
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

    
