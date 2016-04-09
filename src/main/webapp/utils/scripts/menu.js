function highlight(element) {
	// remove high-light style
	objects = $(".menuHighLight");
	if (objects.size() > 0) {
		objects.removeClass("menuHighLight");
		objects.addClass("menuNormal");
	}
	
	if (element !== null) {
		// set high-light style
		element.removeClass("menuNormal");
		element.addClass("menuHighLight");
	}
}

function clickmenu(element) {
	if (element.attr("id") == "menupoint1") {
		window.location = "home.action";
	} else if (element.attr("id") == "menupoint2") {
		window.location = "products.action";
	} else if (element.attr("id") == "menupoint3") {
		window.location = "pricing.action";
	} else if (element.attr("id") == "menupoint4") {
		window.location = "about.action";
	} else if (element.attr("id") == "menupoint5") {
		window.location = "contact.action";
	}
}