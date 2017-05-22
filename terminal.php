<html>
<head>
	<link rel="stylesheet" type="text/css" href="terminal.css">
	<title>Terminal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
	var chat = '';
	
	//jQuery cursor blink
		setInterval(function(){
		  $('#cursor').each(function() {
			$(this).css('visibility', $(this).css('visibility') === 'hidden' ? 'visible' : 'hidden')
		  });
		}, 666);
	
	// Javascript grab input
	function process() {
		chat += document.getElementById("usrinpt").value + "<br>";
		document.getElementById("disp").innerHTML = chat;
		document.getElementById("usrinpt").value = '';
		var dispwindow = document.getElementById("main");
		dispwindow.scrollTop = dispwindow.scrollHeight;
	}
	
	</script>
</head>

<body>
<script>
// Auto focus on load
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
	<input id="usrinpt" type="text" onkeypress="if (event.keyCode==13) process();" onblur="this.focus();" autofocus><!--<span id="cursor">&#x2588;</span>-->
</div>
</body>
</html>
