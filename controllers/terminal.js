var chat = '';
var counter = 1;

//jQuery cursor blink
	setInterval(function(){
	  $('#cursor').each(function() {
		$(this).css('visibility', $(this).css('visibility') === 'hidden' ? 'visible' : 'hidden')
	  });
	}, 666);
// Set input size to input length
function colwidth() {
	counter++;
	document.getElementById("usrinpt").size = counter;
}
// Account for backspace
function bckspc() {
	if (counter > 1) {
		counter--;
		document.getElementById("usrinpt").size = counter;
	}
}
// Javascript grab input
function process() {
	inpt = document.getElementById("usrinpt").value;
	chat += inpt + "<br>";
	document.getElementById("disp").innerHTML = chat;
	document.getElementById("usrinpt").value = '';
	var dispwindow = document.getElementById("main");
	dispwindow.scrollTop = dispwindow.scrollHeight;
	counter = 1;
	document.getElementById("usrinpt").size = counter;
	// Link on keyword; to be replaced with PHP/MySQL for scalability
	if (inpt == "tmf") {
		window.open("http://www.tmfmusic.com");
	} else if (inpt == "github") {
		window.open("http://github.com/timflaherty");
	}
}