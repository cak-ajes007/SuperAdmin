function changeTab(tab) {
	var x = document.getElementsByClassName("single-tab");
	for (var i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}	document.getElementById(tab).style.display = "block";

}

var header = document.getElementById("header");
var btns = header.getElementsByClassName("btn");

for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener('click', function () {
		var current = document.getElementsByClassName('active');
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
}
