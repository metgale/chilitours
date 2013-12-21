$(document).ready(function() {
	$('.nav1').on("click", function() {
		$('.nav-items1', this).slideToggle('fast');
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

	$(".filterCategory").click(function(e) {
		e.preventDefault()
		var url = $(this).attr("href")
		$.ajax({
			type: "GET",
			url: url,
			success: function(data) {
				$('.wrapper').html(data);
			}

		})
	});


})




