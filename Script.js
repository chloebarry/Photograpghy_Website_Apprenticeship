function email() {
	document.getElementById("button").innerHTML =
		"Email: Photography@gmail.com";

	var x = document.getElementById("button");
	if (x.style.display == "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}


function phone() {
	document.getElementById("button2").innerHTML =
		"Phone: 07638726451";

	var x = document.getElementById("button2");
	if (x.style.display == "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}