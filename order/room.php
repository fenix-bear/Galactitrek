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
				<a class="nav-link active" href="room.php">Room</a>
			  </li>
			  <li class="nav-item" id="3">
				<a class="nav-link" href="destinations.php">Destinations</a>
			  </li>
			  <li class="nav-item" id="4">
				<a class="nav-link disabled" href="payment.php">Payment info</a>
			  </li>
			  <li class="nav-item" id="5">
				<a class="nav-link disabled" href="confirm.php">Confirm your booking</a>
			  </li>
			  
			  <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="width: 100%">
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
			<?php include ("../currentPriceWidget.html");?>
		</div>
	</div>
<?php $content = ob_get_clean();
include "../parent.php"; ?>

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
<script src="/setAvailableTabs.js"></script>

<style>
	h2 {
		color: yellow
	}
</style>