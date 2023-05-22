var pageOn = 0;

function scanForCurrentPage() {
	for(var i = 0; i <= 5; i++) {
		// childNodes 1 is actually index 0?
		if(document.getElementById(i.toString()).childNodes[1].getAttribute("class").includes("active")) {
			pageOn = i;
		}
	}
}

function disableTab(id) {
	var additionalClasses = "nav-link "
	var element = document.getElementById(id).childNodes[1];
	if(pageOn == parseInt(id)) {
		additionalClasses += "active "
		
		document.getElementsByClassName("mainContent")[0].innerHTML = "<h2>You don't have the valid information to be on this page!</h2><p>Go back to the overview and fill out all the information to come back here.</p>"
		return;
	}
	element.setAttribute("class", additionalClasses + "disabled");
}

function enableTab(id) {
	var additionalClasses = "nav-link "
	var element = document.getElementById(id).childNodes[1];
	if(pageOn == parseInt(id)) {
		additionalClasses += "active "
	}
	element.setAttribute("class", additionalClasses + "");
}


function availableTabs() {
	if(sessionStorage.ship != undefined) {
	
	enableTab("2")
	
	if(sessionStorage.room != undefined) {
	
	enableTab("3")
	
	
	if(sessionStorage.destination != undefined) {
	
	enableTab("4")
	
	} else {
		disableTab("4")
		disableTab("5")
	}
	
	} else {
	disableTab("3")
	disableTab("4")
	disableTab("5")
	}
	
	} else {
	disableTab("2")
	disableTab("3")
	disableTab("4")
	disableTab("5")
	}
	
}

scanForCurrentPage();

const interval = setInterval(function() {
   availableTabs();
 }, 100);