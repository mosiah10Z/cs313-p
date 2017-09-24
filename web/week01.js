// ta02.js
function clickMe() {
	alert("Clicked!");
}

function changeCoelor() {
	var textbox_id = "txtColor";
	var textbox = document.getElementById(textbox_id);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = textbox.value;
	div.style.backgroundColor = color;

}

function changeColor() {
	var x = document.getElementById("txtColor").value;
	document.getElementById("div1").style.backgroundColor = x;
	console.log(x);
}