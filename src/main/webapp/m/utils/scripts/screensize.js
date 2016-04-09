var loaded = false;

function setScreenSize() {
	try {
		// set loaded marker
		loaded = true;
	} catch(e) {}
}

function resetScreenSize() {
	if (loaded == true) {
		// reset height/width to original
		$("#page3").height("*");
		
		// retrieve height/width
		contentWidth = $("#page3").outerWidth(true);
		contentHeight = $("#page3").outerHeight(true);
		
		// retrieve difference
		diffWidth = $("#page3").outerWidth(true) - $("#page3").width();
		diffHeight = $("#page3").outerHeight(true) - $("#page3").height();

		// determine smallest width
		var x = $(window).innerWidth();
		if ($(document).innerWidth() < x) {
			x = $(document).innerWidth();
		}
		if ($("body").innerWidth() < x) {
			x = $("body").innerWidth();
		}
		
		// determine smallest height
		var y = $(window).innerHeight();
		if ($(document).innerHeight() < y) {
			y = $(document).innerHeight();
		}
		if ($("body").innerHeight() < y) {
			y = $("body").innerHeight();
		}

		// set frame height
		if (y < contentHeight + $("#menu2").outerHeight(true) + $("#footer").outerHeight(true)) {
			$("#page3").height(contentHeight-diffHeight);
		} else {
			$("#page3").height(y-diffHeight-$("#menu2").outerHeight(true)-$("#footer").outerHeight(true));
		}
			
		// set outer frames
		try {
			a = $("#page3").outerHeight(true) + $("#menu2").outerHeight(true) + $("#footer").outerHeight(true);
			b = $("#page2").outerHeight(true) - $("#page2").height();
			
			$("#page2").height = a-b;
		} catch (e) {}
		try {
			a = $("#page2").outerHeight(true);
			b = $("#page1").outerHeight(true) - $("#page1").height();
			
			$("#page1").height = a-b;
		} catch (e) {}
		
		try {
			a = $("#page2").outerWidth(true);
			b = $("#menu2").outerWidth(true) - $("#menu2").width();
			$("#menu2").width(a-b);
			
			b = $("#page3").outerWidth(true) - $("#page3").width();
			$("#page3").width(a-b);
			//$("#page3").width($("#page2").width());
			
			b = $("#footer").outerWidth(true) - $("#footer").width();
			$("#footer").width(a-b);
		} catch (e) {}
	}
}
