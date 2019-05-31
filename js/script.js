$(document).ready(function () {
	$(".progress-bar").circularProgress({
		color: "red",
		line_width: 20,
		height: "350px",
		width: "350px",
		percent: 0,
		starting_position: 0
	}).circularProgress('animate', 100, 1500);
});

$(window).on('load', function () {
	var $preloader = $('#preloader');
	$preloader.delay(1800).fadeOut('slow');
});