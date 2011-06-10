$(document).ready(function() {
	$("#namebar").attr("value", "Name");

	var text = "Name";

	$("#namebar").focus(function() {
		$(this).addClass("active");
		if($(this).attr("value") == text) $(this).attr("value", "");
	});

	$("#namebar").blur(function() {
		$(this).removeClass("active");
		if($(this).attr("value") == "") $(this).attr("value", text);
	});
});

$(document).ready(function() {
	$("#mailbar").attr("value", "Email");

	var text = "Email";

	$("#mailbar").focus(function() {
		$(this).addClass("active");
		if($(this).attr("value") == text) $(this).attr("value", "");
	});

	$("#mailbar").blur(function() {
		$(this).removeClass("active");
		if($(this).attr("value") == "") $(this).attr("value", text);
	});
});

$(document).ready(function() {
	$("#msgbar").attr("value", "Message");

	var text = "Message";

	$("#msgbar").focus(function() {
		$(this).addClass("active");
		if($(this).attr("value") == text) $(this).attr("value", "");
	});

	$("#msgbar").blur(function() {
		$(this).removeClass("active");
		if($(this).attr("value") == "") $(this).attr("value", text);
	});
});
