<html>
<head>
	<link rel="stylesheet" type="text/css" href="terminal.css">
	<title>Terminal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
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
	
	</script>
</head>

<body>
<script>
// Auto focus input on load
window.onload = function() {
	document.getElementById("usrinpt").focus();
}
</script>

<p><b>TMF Mainframe v0.1</b></p>
<p><b><i>Terminal</b></i></p>
<div id="main">
	<div id="disp"></div>
</div>
<br>
<div id="inpt">
	<input id="usrinpt" type="text" size="1" onkeypress="colwidth(); if (event.keyCode==13) process();" onkeydown="if (event.keyCode==8) bckspc();" onblur="this.focus();" autofocus><span id="cursor">&#x2588;</span>
</div>
</body>
</html>
