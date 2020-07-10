$(function() {
	$(".btn").click(function() {
		$(".form-signin").toggleClass("form-signin-left");
    $(".form-signup").toggleClass("form-signup-left");
    $(".signin-active").toggleClass("signin-inactive");
    $(".signup-inactive").toggleClass("signup-active");
    $(this).removeClass("idle").addClass("active");
	});
});