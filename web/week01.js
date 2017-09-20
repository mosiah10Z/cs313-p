function myFunction() {
    document.getElementById("demo").innerHTML = "Clicked";
}

function changeCeolor() {
	var x = document.getElementById("input").value;
	document.getElementById("one").style.backgroundColor = '"' + x + '"';
	console.log(x);
}

function changeColor() {
	var textbox_id = "input";
	var textbox = document.getElementById(textbox_id);

	var div_id = "two";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = textbox.value;
	div.style.backgroundColor = color;

}