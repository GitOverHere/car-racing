

$(document).ready(function () {
	$(".register").hide();
	$(".reset").hide();
	$(".login").show();
	$("html").show();
    $(".sign_up").click(function () {
        $(".login").hide();
        $(".register").fadeIn(600);
		$(".menu").hide();
		$(".error").hide();
    }
	); 
	
	$(".sign_in").click(function () {
        $(".register").hide();
        $(".login").fadeIn(600);
		$(".menu").show();
		$(".error").hide();
    }
	

	);
	$(".forgot").click(function () {
		$(".menu").hide();
        $(".login").hide();
        $(".reset").fadeIn(600);
		$(".error").hide();
    }
	);
	 $(".back").click(function () {
		$(".menu").show();
        $(".reset").hide();
        $(".login").fadeIn(600);
    }
	

	);
	
	$(".login").submit(function (){
		 $.ajax({
                   type: "POST",
                   url: "login.php",
 
	
    });
});

$(".register").submit(function (){
		 $.ajax({
                   type: "POST",
                   url: "register.php",
 
	
    });
});

$(".reset").submit(function (){

		 $.ajax({

                   type: "POST",
                   url: "forgot.php",
 
	
    });
});





});








