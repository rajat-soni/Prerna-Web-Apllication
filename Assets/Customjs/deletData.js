function deleteData(deletedid){

	var confir = confirm("Are You sure To Delete");
	if(confir===true){

	 	$.ajax({
	 		url:"deleteData.php",
	 		type:"POST",
	 		data:{ id:deletedid },
	 		success: function(data){

	 			if(data)
	 			{

		 			load_data();
		 			$("#response").fadeIn();
	                     $("#response").addClass('success-msg').removeClass('error-msg').html(data);
	                       
                        setTimeout(function(){
                        $("#response").fadeOut("slow");
                        },4000);
	 		    }else{
	 			alert("Error In Deletion");
	 		}
	 	}
	 	});
	}
}