        var counter = 1;

        var limit = 5;  

    function addInput(inputName, divName, arrayName){


         if (counter == limit)  {

              alert("Du hast das Limit von " + counter + " Eingaben erreicht");

         }

         else { 

              var newdiv = document.createElement('div');

              newdiv.innerHTML = "<li>" + inputName + " " + (counter + 1) + " <input type='text' name='" + arrayName + "'><input type='button' value='-' onClick='this.parentElement.remove(); counter--;'>";
              newdiv.className = "newInput";

              document.getElementById(divName).appendChild(newdiv);
              counter++;
         }

    }