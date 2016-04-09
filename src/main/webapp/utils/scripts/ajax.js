/**
 * 
 */

/** Globals */
var requestType = "";
var requestUrl = "";
var requestParameters = {};
var requestTimeOut = 0;
var response = [];

/**
 * Function used to start and run AJAX-request to given URL with given Parameters and Timeout 
 */
function runAjaxRequest() {
	// definition of XML/HMTL-Request Object for later use
	var xmlHttpRequest  = $.ajax({
		url: requestUrl,
		method: "POST",
		cache: false,
		data: requestParameters,
		timeout: requestTimeOut
	})
	.done(function( data, textStatus, jqXHR ){
		// start AJAX Response-Worker for Non-Failure
		ajaxResponseWorker(
				textStatus.toUpperCase(),
				jqXHR.responseText);
	})
	.fail(function(jqXHR, textStatus, errorThrown){
		// start AJAX Response-Worker for Failure
		ajaxResponseWorker(
				textStatus.toUpperCase(),
				errorThrown);
	});
}

/**
 * Function is used to start worker-process on XML-response 
 */
function ajaxResponseWorker(textStatus, responseText) {
	
	// switch inbetween different given request-types
	switch (requestType.toUpperCase()) {
		case 'PORTFOLIO': {
			if (textStatus.toUpperCase() == "SUCCESS") {
				// read portfolio
				fillResponse(responseText);
			} else {
				// fill response
				response = new Array();
				response["SUCCESS"] = "ERROR";
				response["PORTFOLIO"] = "<div class=\"modal-header\">" +
					"<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
					"<h5 class=\"modal-title\" id=\"myModalLabel\">Requested Portfolio: ???</h5>" +
					"</div>" +
					"<div class=\"modal-content\"><div class=\"modal-body\">" + responseText + "</div></div>";
			}
			
			// 'callback' to request originator
			fillModalContent();
			
			// stop here
			break;
		}
		case 'FEEDBACK': {
			if (textStatus.toUpperCase() == "SUCCESS") {
				// read portfolio
				fillResponse(responseText);
			} else {
				// fill response
				response = new Array();
				response["SUCCESS"] = "ERROR";
				response["ANSWER"] = "<div class=\"feedback\">" +
									 responseText + "</div>";
			}
			
			// 'callback' to request originator
			fillAnswer();
			
			// stop here
			break;
		}
	}
}

/**
 * Function is used to fill response-array from XML-response 
 */
function fillResponse(responseText) {
	
	// create new response array
	response = new Array();
	
	// parse text into html-object (without tabs, new-lines, returns)
	html = $.parseHTML(responseText.replace(/(\r\n|\n|\r|\t)/gm,""));
	
	// loop over all nodes in html-object
	$.each (html, function(i, node) {
		// only use DIV-nodes
		if (node.nodeName.toUpperCase() == "DIV") {
			if (node.hasChildNodes() == true) {
				response[node.getAttribute("id").toUpperCase()] = node.innerHTML;
			} else {
				response[node.getAttribute("id").toUpperCase()] = "";
			}
		}
	});
}