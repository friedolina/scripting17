      //  var counter = 1;

    //    var limit = 5;  

    function addInput(inputName, divName, arrayName){


      //   if (counter == limit)  {

    //          alert("Du hast das Limit von " + counter + " Eingaben erreicht");

      //   }

        // else { 

              var newdiv = document.createElement('div');

              newdiv.innerHTML = "<input class='eingabe' type='text' name='" + arrayName + "'><input class='plusbutton' type='button' value='-' onClick='this.parentElement.remove(); counter--;'>";
              newdiv.className = "newInput";

              document.getElementById(divName).appendChild(newdiv);
          //    counter++;
        // }

    }