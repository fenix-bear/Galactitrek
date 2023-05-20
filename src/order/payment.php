
<!doctype html>


<!-- for including html files -->
<script src="../libs/csi.min.js"></script>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Galactitrek Booking Payment</title>

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="/style.css" rel="stylesheet">
  </head>

  <body>

    <!-- <iframe src="../nav.html" seamless width="100%" frameborder="0" height="55px" ></iframe> -->
	<?php include ("../nav.html"); ?>

    <div class="position-relative overflow-hidden text-center bg-light" style=" padding-bottom: 0px; margin: 0px;">
	<div id="container" style="position:relative">
		
	  
    </div>
	
	<div class="d-flex">
		<div class="d-md-flex flex-md-equal my-md-3 pl-md-3" style="width: 100%">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
				<a class="nav-link" aria-current="page" href="overview.php">Overview</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="ships.php">Choose your Ship</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="room.php">Room</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="destinations.php">Destinations</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" href="payment.php">Payment info</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="confirm.php">Confirm your booking</a>
			  </li>
			  
			  <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="background-color: black; width: 100%">
				<div class="my-3 py-3 row">
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Payment</h2>
						<p class="lead">We use standardized Earth Credits™ for payment, or if you have a credit card that supports Galactibucks™, you are able to obtain a discount or even get a free cruise. Note that the discounts do not stack.</p>
						
						<h2 class="display-5 font-weight-light">Discount code</h2>
						<input class="btn bg-transparent btn-outline-primary rgb" id="discountInput" ></input>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="discount(document.getElementById('discountInput').value)">Apply discount</button>
						<hr>

						<h2 class="display-5 font-weight-light">Earth Credits</h2>
						<input class="btn bg-transparent btn-outline-primary rgb" onload="loadCard()" id="card" disabled></input>
						<br>
						<label class="kindaHidden">Note that your card number is automatically put in</label>
					</div>
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Email</h2>
						<p class="lead">Recieve data from our newsletter about your next cruise</p>
						
						<input class="btn bg-transparent btn-outline-primary rgb"></input>
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
			<iframe src="/currentPriceWidget.html" seamless width="100%" frameborder="0" height="100%px" id="planet"></iframe>
		</div>
		
	</div>

    <div data-include="../footer.html"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>

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
			num += str.charCodeAt(i) * i
		}
		return num
	}
	
	function seededRandom(seed) {
		return Math.sin(Math.tan(asciiStringRandom(seed) * 10000));
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">