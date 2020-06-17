$(document).ready(function(){
	document.getElementById("alert").style.visibility="visible";
	
	document.getElementById("message").innerHTML="Is connected";
	
	$(".alert").hide().delay(1000);
	
	document.getElementById("message").innerHTML="";
	
});