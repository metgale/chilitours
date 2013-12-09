$(document).ready(function() {
	$('.nav').on("click", function() {
		$('.nav-items', this).slideToggle('fast');
	});
})