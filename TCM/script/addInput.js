/*
function addInput(divName, arrayName){
    var newdiv = document.createElement('div');

    newdiv.innerHTML = "<input class='eingabe' type='text' name='" + arrayName + "'><input type='button' value='-' class='minusbutton'>";
    newdiv.className = "flexcontainer";

    document.getElementById(divName).appendChild(newdiv);
}
$(document).on("click", "plusbutton", 
*/

function addInput(divName, arrayName) {
    console.log("<div class='flexcontainer'><input class='eingabe' type='text' name='" + arrayName + "'><input type='button' value='-' class='minusbutton'></div>");
    $('#' + divName).append("<div class='flexcontainer'><input class='eingabe' type='text' name='" + arrayName + "'><input type='button' value='-' class='minusbutton'></div>");
};

$(document).on("click", ".minusbutton", function(){
    $(this).parent().remove();
});