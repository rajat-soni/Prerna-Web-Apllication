
function loginFun(){

	var email = $("#email").val();
	var password = $("#password").val();

	if(email != '' && password != ''){
       

		$.ajax({
   
	   		url: "../loginPage/adminloginData.php",
	   		type: 'POST',
	   		data: {email:email, password:password},
   	   			success: function(data){
	                if(data == 1){
	                 window.location = "../newDashBord.php";

	                }else{
	                	$("#response").fadeIn();
         
				        $("#response").addClass('success-msg').removeClass('error-msg').html(data);
				       
				        setTimeout(function(){
				        $("#response").fadeOut("slow");
        				},4000);
	                	// $("#response").fadeIn();
	                    //    $("#response").addClass('error-msg'). removeClass('success-msg').html(data);
	                    //    setTimeout(function(){
                        //        $("response").fadeOut("slow");                    //    },4000)      
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


function ssmLoginFun(){

	var email = $("#email").val();
	var password = $("#password").val();

	if(email != '' && password != ''){
       

		$.ajax({
   
	   		url: "ssmLoginData.php",
	   		type: 'POST',
	   		data: {email:email, password:password},
   	   			success: function(data){
	                if(data == 1){
	                 window.location = "ssmdashBord.php";

	                }else{
	                	$("#response").fadeIn();
         
				        $("#response").addClass('success-msg').removeClass('error-msg').html(data);
				       
				        setTimeout(function(){
				        $("#response").fadeOut("slow");
        				},4000);
	                	  	   // $("#response").fadeIn();
	                     	  //    $("#response").addClass('error-msg'). removeClass('success-msg').html(data);
	                   		 //    setTimeout(function(){
                       		//        $("response").fadeOut("slow");
	                  	   //    },4000);
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