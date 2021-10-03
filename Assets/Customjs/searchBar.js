// 
   function searchData(){
    // $("#search").on('keyup',function(){

    var search_id = $("#search").val();
     $.ajax({

     	url: "searchData.php",
     	type: "POST",
     	data: {search_id:search_id},
     	success: function(data){

     		if(data){

     			$("#newTable").html(data);
     		}else{
     			alert("data is not Get");
     		}
     	}
     });


   	 //});
   }
// $(document).ready(function(){

// $("#search").keyup(function(){

// 	alert("hello");
// });
// });