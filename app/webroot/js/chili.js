$(document).ready(function() {
	$('.nav').on("click", function() {
		$('.nav-items', this).slideToggle('fast');
	});

	$(".imageDelete").click(function(e) {
		e.preventDefault()
		var wrapper = $(this).parent()
		var url = $(this).attr("href")

		$.ajax({
			type: "GET",
			url: url,
			success: function() {
				wrapper.fadeOut('slow')
			}
		
		})
	})


})