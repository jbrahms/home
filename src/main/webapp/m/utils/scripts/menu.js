var toggle = false;

function togglemenu () {
	// toggle content-menu
	if (toggle == false) {
		$("#page2").animate({ "left": "+=200px" }, "slow" );
		toggle = true;
	} else {
		$("#page2").animate({ "left": "-=200px" }, "slow" );
		toggle = false;
	}
}

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
		window.location = "home.html";
	} else if (element.attr("id") == "menupoint2") {
		window.location = "products.html";
	} else if (element.attr("id") == "menupoint3") {
		window.location = "pricing.html";
	} else if (element.attr("id") == "menupoint4") {
		window.location = "about.html";
	} else if (element.attr("id") == "menupoint5") {
		window.location = "contact.html";
	}
}