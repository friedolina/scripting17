


$(document).ready(function() {

    $("#searchField").keyup(function() {                

	//var searchString = $(this).val();
	//$("#responsecontainer").html(searchString);
      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "search_ajax.php",             
        dataType: "html",   //expect html to be returned  
        data:{
        	//"html",   //expect html to be returned                
        	searchString: $(this).val()
        },
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
});
});