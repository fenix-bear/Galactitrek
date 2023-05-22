var price = 0;

function newCostItem(val, otherText, mode) {
	// Mode 0 acts nightly for price
	try {
		newJson = JSON.parse(val)
		
		if(mode == 0 && sessionStorage.days != undefined) {
			var days = parseFloat(sessionStorage.days)
			otherText += " ($" + (days * parseFloat(newJson.price)) + ")"
			price+=(days * parseFloat(newJson.price))
		} else {
			price+=parseFloat(newJson.price)
		}
		
		// Credit: http://www.java2s.com/Tutorials/Javascript/Javascript_Element_How_to/UL/Create_new_LI_element_and_append_to_UL.htm
		el = document.createElement('li');
		el.innerHTML = '<p>' + newJson.name + ": $" + newJson.price + otherText + '</p>';
		document.getElementById('costItems').appendChild(el);
		document.getElementById('totalPrice').innerHTML = "$" + Math.round(price)
	} catch(e) {
		
	}
}
function savingsItem(num) {
	if(num != undefined) {
		el = document.createElement('li');
		el.innerHTML = '<p>' + parseFloat(num) * 100 + "% discount" + "</p>"
		document.getElementById('costItems').appendChild(el);
		
		price *= 1 - parseFloat(num)
		document.getElementById('totalPrice').innerHTML = "$" + Math.round(price)
	}
}


function clearCostItems() {
	// Credit: https://stackoverflow.com/questions/10750137/remove-all-li-from-ul
	price = 0;
	document.getElementById("costItems").innerHTML = "";
}

function updateDisplays() {
	clearCostItems()
	newCostItem(sessionStorage.ship, " per night", 0);
	newCostItem(sessionStorage.room, " per night", 0);
	newCostItem(sessionStorage.destination, " additional per night", 0);
	savingsItem(sessionStorage.discount);
	
	if(sessionStorage.days != undefined) {
		var days = parseFloat(sessionStorage.days)
		document.getElementById('totalPrice').innerHTML += " for " + days + " days"
	}
}

updateDisplays()

var intervalId = window.setInterval(function () {
	  updateDisplays()
}, 100);
