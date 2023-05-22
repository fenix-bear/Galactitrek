<?php ob_start(); ?>
	<div class="d-flex">
		<div class="d-md-flex flex-md-equal my-md-3 pl-md-3" style="width: 100%">
			<ul class="nav nav-tabs">
			  <li class="nav-item" id="0">
				<a class="nav-link" aria-current="page" href="overview.php">Overview</a>
			  </li>
			  <li class="nav-item" id="1">
				<a class="nav-link active" href="ships.php">Choose your Ship</a>
			  </li>
			  <li class="nav-item" id="2">
				<a class="nav-link" href="room.php">Room</a>
			  </li>
			  <li class="nav-item" id="3">
				<a class="nav-link disabled" href="destinations.php">Destinations</a>
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
						<h2 class="display-5 font-weight-light">Ships</h2>
						<p class="lead">Before booking one of our ships, you may want to see the <a href="/ships.php" class="gradient1">ships tab</a> for a more in-depth view.</p>
						
						<h2 class="display-5 font-weight-light" style="color: yellow">Personal Ship</h2>
						<iframe src="/3D/smallShip.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="addShipToCart(2)">Book this ship</button>
					</div>
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Odyssey of the Stars</h2>
						<iframe src="/3D/biggestShip.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="addShipToCart(0)">Book this ship</button>
						<br>
						
						<h2 class="display-5 font-weight-light" style="color: yellow">Voyage of the Stars</h2>
						<iframe src="/3D/mediumShip.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
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
			.then(data => {sessionStorage.setItem('ship', JSON.stringify(data.ships[shipIndex])); window.location.replace("./room.php");});
	}
</script>
<script src="/setAvailableTabs.js"></script>

<style>
	
	
	h2 {
		color: yellow
	}
</style>