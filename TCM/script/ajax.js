


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
    
    $("#formel_eingabe").keyup(function() {
        //alert($(this).val())
          $.ajax({    //create an ajax request to load_page.php
            type: "GET",
            url: "/TCM/formel/formel_ajax.php",             
            dataType: "html",   //expect html to be returned  
            data:{
            	//"html",   //expect html to be returned                
            	formelkrautString: $(this).val()
            },
            success: function(response){   
                console.log(response);
                $("#formel_response").html(response); 
            }
        });

    });
});