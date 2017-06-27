


$(document).ready(function() {
    $("#searchField").keyup(function() {                
          $.ajax({    //create an ajax request to load_page.php
            type: "GET",
            url: "/TCM/search_ajax.php",             
            dataType: "html",   //expect html to be returned  
            data:{
            	searchString: $(this).val()
            },
            success: function(response){                    
                $("#responsecontainer").html(response); 
            }
    
        });
    });
    
    $("#formelkraut_eingabe").keyup(function() {
        //alert($(this).val())

          $.ajax({    //create an ajax request to load_page.php
            type: "GET",
            url: "/TCM/formel/formel_ajax.php",             
            dataType: "html",   //expect html to be returned  
            data:{
            	formelkrautString: $(this).val()
            },
            success: function(response){   
                $("#formel_response").slideDown().html(response);; 
            }
        });
    });
    var counter = 0;

    $('body').on('click', '.formelkraut_auswahl', function (){
        var kraut_clicked = $(this).text();
        counter ++;
        $(this).closest("#formel_response").slideUp( "fast" , function() {
                    $.ajax({
                        type: "GET",
                        url: "/TCM/formel/formel_ajax2.php",
                        dataType: "html",
                        data: {data: kraut_clicked},
                        success: function(kra_id) {
                            //return kra_id;
                            //$("#kraut_link").attr('href', '/TCM/kraut/einzelkraut.php?kraut=" + kra_id + "');
                        $("#formelkraeuter").append( "\
                    <div class='kraut_clicked' id='kraut_clicked" + counter + "'>\
                    <p><a href='/TCM/kraut/einzelkraut.php?kraut=" + kra_id + "' id='kraut_link' target='_blank'>" + kraut_clicked + "</a></p>\
                    <input type='hidden' name='formelkraut_name[]' value='" + kraut_clicked + "'>\
                    <input class='menge' type='text' id='formelmenge_eingabe' name='formelmenge_eingabe[]' maxlength='150' placeholder='Menge...'>\
                    <select name='wichtigkeit[]' class='wichtigkeit'>\
                        <option>Kaiser</option>\
                        <option>Minister</option>\
                        <option>Botschafter</option>\
                        <option>Assistent</option>\
                    </select>\
                    <input class='funktion_eingabe' type='text' id='funktion_eingabe" + counter + "' name='funktion_eingabe[]' maxlength='150' placeholder='Funktion...'>\
                    <input class='plusbutton' type='button' value='-' onClick='this.parentElement.remove(); counter--;'>\
                </div>");
                        }
                    })

            
        });

        //alert($(this).text());
        //$( this ).parent("#formelkraut_eingabe").after( "<input class='eingabe' type='text' id='formelmenge_eingabe' name='formelmenge_eingabe' maxlength='150' placeholder='Menge...'>" );
    });
});