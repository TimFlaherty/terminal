var chat = '';
var counter = 1;
var keyarray = [];

// Call PHP to query SQL keywords; generate list
function keyarrgen() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			rawarr = this.responseText;
			keyarray = rawarr.split("<br>");
		}
	};
	xmlhttp.open("GET", "keyarray.php", true);
	xmlhttp.send();
}
// Generate array of keywords
keyarrgen();
// Display list of link keywords
function keyarrshow() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			chat += "---LINKS---<br>INPUT A KEYWORD FROM THE LIST BELOW TO GO TO THE INDICATED PAGE:<br>"+this.responseText+"<br>";
			document.getElementById("disp").innerHTML = chat;
			var dispwindow = document.getElementById("main");
			dispwindow.scrollTop = dispwindow.scrollHeight;
		}
	};
	xmlhttp.open("GET", "keyarray.php", true);
	xmlhttp.send();
}
// Opens link corresponding to given keyword
function linkr(x) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			window.open(this.responseText);
		}
	};
	xmlhttp.open("GET", "linkr.php?x=" + x, true);
	xmlhttp.send();
}

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
	var inpt = document.getElementById("usrinpt").value;
	chat += inpt + "<br>";
	document.getElementById("disp").innerHTML = chat;
	document.getElementById("usrinpt").value = '';
	var dispwindow = document.getElementById("main");
	dispwindow.scrollTop = dispwindow.scrollHeight;
	counter = 1;
	document.getElementById("usrinpt").size = counter;
	// Link on keyword
	if (inpt.length > 0) {
		if(keyarray.indexOf(inpt) > -1){
			linkr(inpt);
		}
	}
	// Command cases
	switch(inpt) {
		case "dir": 
		case "ls":
			keyarrshow();
			break;
	}
}