    var counter = 1;

    var limit = 5;

    function addInput(divName){

         if (counter == limit)  {

              alert("Du hast das Limit von " + counter + " Eingaben erreicht");

         }

         else {

              var newdiv = document.createElement('div');

              newdiv.innerHTML = "<li>Eingabe " + (counter + 1) + " <input type='text' name='myInputs[]'>";

              document.getElementById(divName).appendChild(newdiv);

              counter++;

         }

    }