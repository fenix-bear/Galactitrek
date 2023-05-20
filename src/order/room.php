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

    <title>Galactitrek Booking Rooms</title>

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
				<a class="nav-link active" href="room.php">Room</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="destinations.php">Destinations</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="payment.php">Payment info</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="confirm.php">Confirm your booking</a>
			  </li>
			  
			  <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="background-color: black; width: 100%">
				<div class="my-3 py-3 row">
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Rooms</h2>
						<p class="lead gradient2">Here at Galactitrek, we offer you top-notch rooms in our spaceships. We have a wide array of options for you, from luxurious suites to basic cabins, we've got you covered. Unlike many other cruising companies, we ensure our staff keep your cabin as tidy as possible. Our staff also provide 24/7 service, so you can rest assured that you will be well taken care of.</p>
						<hr>
						<h2 class="display-5 font-weight-light">Cozy Suite</h2>
						<p class="lead">Our Cozy suite is a minimalistic room primarily for solo travelers. It is our cheapest option, $45 a night, and it has a small bed and a shared bathroom amung the hallway.</p>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="addShipToCart(2)">Book this ship</button>
						<br>
					</div>
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Executive Suite</h2>
						<p class="lead">Our executive suite is our most premium accommodation option that we have. For the low price of $1,500 a night, you gain access to your own private crew of staff. This also comes with three bedrooms, two bathrooms, and a 3D pool table. Also, you get a large balcony overlooking the ship.</p>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="addShipToCart(0)">Book this ship</button>
						<hr><br>
						
						<h2 class="display-5 font-weight-light">Governors Suite</h2>
						<p class="lead gradient2">Our Governors suite is a top-notch suite for large families traveling. For $500 a night you can get a balcony, 1 large bathroom, and two bedrooms, aswell as other ammenities such as a TV and a couch.</p>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="addShipToCart(1)">Book this ship</button>
						<br>
					</div>
					
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
	function addShipToCart(shipIndex) {
		var pricing;
		fetch("/pricing.json")
			.then(response => {
				return response.json();
			})
			// for some goofy reason you can only store strings in here
			// So you have to stringify the json
			.then(data => {sessionStorage.setItem('room', JSON.stringify(data.rooms[shipIndex])); window.location.replace("./destinations.php");});
	}
</script>

<style>
	
	
	h2 {
		color: yellow
	}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">