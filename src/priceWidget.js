var price = 0;

function newCostItem(val, otherText, mode) {
	// Mode 0 acts nightly for price
	try {
		newJson = JSON.parse(val)
		
		if(mode == 0) {
			var days = parseFloat(sessionStorage.days)
			otherText += " ($" + (days * parseFloat(newJson.price)) + ")"
			price+=(days * parseFloat(newJson.price))
		} else {
			price+=parseFloat(newJson.price)
		}
		
		// Credit: http://www.java2s.com/Tutorials/Javascript/Javascript_Element_How_to/UL/Create_new_LI_element_and_append_to_UL.htm
		el = document.createElement('li');
		el.innerHTML = newJson.name + ": $" + newJson.price + otherText;
		document.getElementById('costItems').appendChild(el);
		document.getElementById('totalPrice').innerHTML = "$" + price
	} catch(e) {
		
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
	newCostItem(sessionStorage.destination, " additional per night", 0);
}

updateDisplays()

var intervalId = window.setInterval(function () {
	  updateDisplays()
}, 100);
