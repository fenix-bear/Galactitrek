<?php ob_start(); ?>
	<div class="d-flex">
		<div class="d-md-flex flex-md-equal my-md-3 pl-md-3" style="width: 100%">
			<ul class="nav nav-tabs">
			  <li class="nav-item" id="0">
				<a class="nav-link" aria-current="page" href="overview.php">Overview</a>
			  </li>
			  <li class="nav-item" id="1">
				<a class="nav-link" href="ships.php">Choose your Ship</a>
			  </li>
			  <li class="nav-item" id="2">
				<a class="nav-link" href="room.php">Room</a>
			  </li>
			  <li class="nav-item" id="3">
				<a class="nav-link" href="destinations.php">Destinations</a>
			  </li>
			  <li class="nav-item" id="4">
				<a class="nav-link active" href="payment.php">Payment info</a>
			  </li>
			  <li class="nav-item" id="5">
				<a class="nav-link disabled" href="confirm.php">Confirm your booking</a>
			  </li>
			  
			  <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="width: 100%">
				<div class="my-3 py-3 row">
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Payment</h2>
						<p class="lead">We use standardized Earth Credits™ for payment, or if you have a credit card that supports Galactibucks™, you are able to obtain a discount or even get a free cruise. Note that the discounts do not stack.</p>
						
						<h2 class="display-5 font-weight-light">Discount code</h2>
						<input class="btn bg-transparent btn-outline-primary" id="discountInput" ></input>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="discount(document.getElementById('discountInput').value)">Apply discount</button>
						<hr>

						<h2 class="display-5 font-weight-light">Earth Credits</h2>
						<input class="btn bg-transparent btn-outline-primary rgb" onload="loadCard()" id="card" disabled style="width: 100%"></input>
						<br>
						<label class="kindaHidden">Note that your card number is automatically put in</label>
					</div>
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Email</h2>
						<p class="lead">Receive information about your next cruise.</p>
						
						<input class="btn bg-transparent btn-outline-primary" id="email"></input>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="submitEmail()">Submit email</button>
					</div>
					
					<a href="confirm.php">
						<button class="btn bg-transparent btn-outline-primary rgb" style="width: 100%; height: 400px; font-size: 50px">Book your flight!</button>
					</a>
				</div>
			  </div>
			  
			</ul>
		</div>
		<div>
			<?php include ("../currentPriceWidget.html");?>
		</div>
	</div>
	<?php $content = ob_get_clean();
include "../parent.php"; ?>

<script src="/setAvailableTabs.js"></script>
<script>
	function randomCard() {
		var availableCharacters = [0, 1, 2, 3, 5, 7, 8, "a", "S", "Q", "EARTH", "GA", "TSA", "-"]
		var string = ""
		for(var i = 0; i < 10; i++) {
			string+=availableCharacters[parseInt(Math.random() * availableCharacters.length)]
		}
		string+=availableCharacters[parseInt(Math.random() * availableCharacters.length - 1)]
		return string
	}
	
	function asciiStringRandom(str) {
		var num = 0;
		for(var i = 0; i < str.length; i++) {
			num += str.charCodeAt(i) * (i+1)
		}
		return num
	}
	
	function seededRandom(seed) {
		var encoded = asciiStringRandom(seed)
		return Math.sin(Math.tan(encoded * Math.sin(encoded + 1) + encoded));
	}
	
	function addDestinationToCart(shipIndex) {
		var pricing;
		fetch("/pricing.json")
			.then(response => {
				return response.json();
			})
			// for some goofy reason you can only store strings in here
			// So you have to stringify the json
			.then(data => {
			sessionStorage.setItem('days', JSON.stringify(data.destinations[shipIndex].days));
			sessionStorage.setItem('destination', JSON.stringify(data.destinations[shipIndex]));
			
			
			});
	}
	
	function discount(discountText) {
		var ran = seededRandom(discountText)
		if(ran < -0.5) {
			sessionStorage.discount = "0.17"
		} else if(ran < 0) {
			sessionStorage.discount = "0.13"
		} else if(ran < 0.5) {
			sessionStorage.discount = "0.01"
		} else {
			sessionStorage.discount = "0"
		}
	}
	
	function submitEmail() {
		sessionStorage.email = document.getElementById("email").value
		alert("Email submitted.")
	}
	
	function loadCard() {
		document.getElementById("card").value = randomCard()
	}
	
	loadCard()
</script>

<style>
	h2 {
		color: yellow
	}
</style>