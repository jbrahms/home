var loaded = false;

function setScreenSize() {
	try {
		// set loaded marker
		loaded = true;
	} catch(e) {}
}

function resetScreenSize() {
	if (loaded == true) {
		// reset heights
		$("#page").height("*");
		$("#pageframe").height("*");
		
		// calculate height
		var headerHeight = $("#header").outerHeight(true);
		var pageHeight = $("#page").outerHeight(true);
		var footerHeight = $("#footer").outerHeight(true);
		var contentHeight = headerHeight + pageHeight + footerHeight;
		
		// calculate difference
		var headerDiffHeight = $("#header").outerHeight(true) - $("#header").height();
		var pageDiffHeight = $("#page").outerHeight(true) - $("#page").height();
		var footerDiffHeight = $("#footer").outerHeight(true) - $("#footer").height();
		var diffHeight = headerDiffHeight + pageDiffHeight + footerDiffHeight;
		
		// determine smallest height
		var y = $(window).innerHeight();
		if ($(document).innerHeight() < y) {
			y = $(document).innerHeight();
		}
		if ($("body").innerHeight() < y) {
			y = $("body").innerHeight();
		}
		
		// set frame height
		if (y > contentHeight) {
			$("#page").height(y-headerHeight-footerHeight-headerDiffHeight-pageDiffHeight-1);
		}
	}
}
