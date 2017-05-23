<html>
<head>
	<link rel="stylesheet" type="text/css" href="lib/terminal.css">
	<title>Terminal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="controllers/terminal.js"></script>
	<?php
		include('../models/dbconnect.php');
	?>
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
