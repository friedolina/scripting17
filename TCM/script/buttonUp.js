
// When the user scrolls down 20px from the top of the document, show the button
/**window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
} **/

$(document).ready(function(){

	// Der Button wird mit JavaScript erzeugt und vor dem Ende des body eingebunden.
	var back_to_top_button = ['<form><input class="back-to-top" Type="button" value="Hoch"></form>'].join("");
	$("body").append(back_to_top_button)

	// Der Button wird ausgeblendet
	$(".back-to-top").hide();

	// Funktion für das Scroll-Verhalten
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) { // Wenn 100 Pixel gescrolled wurde
				$('.back-to-top').fadeIn();
			} else {
				$('.back-to-top').fadeOut();
			}
		});

		$('.back-to-top').click(function () { // Klick auf den Button
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
