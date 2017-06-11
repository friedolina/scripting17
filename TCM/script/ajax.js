


$(document).ready(function() {
  /**      if ($(this).val() == false) {
            $("responsecontainer").css("display", "none");
        } **/
    $("#searchField").keyup(function() {                
	//var searchString = $(this).val();
	//$("#responsecontainer").html(searchString);
      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "/TCM/search_ajax.php",             
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