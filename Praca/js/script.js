$(function () {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});


function registerIn() {
    document.getElementById('login-form').setAttribute('style', 'display: none');
    document.getElementById('login-form-link').setAttribute('style', 'font-size: 17px; color: black;');
    document.getElementById('register-form').setAttribute('style', 'display: block');
    document.getElementById('register-form-link').setAttribute('style', 'font-size: 120%; color: #E72C02;');
};
function loginIn() {
    document.getElementById('register-form').setAttribute('style', 'display: none');
    document.getElementById('register-form-link').setAttribute('style', 'font-size: 17px; color: black;');
    document.getElementById('login-form').setAttribute('style', 'display: block');
    document.getElementById('login-form-link').setAttribute('style', 'font-size: 120%; color: #E72C02;');
};