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
				<a class="nav-link active" href="destinations.php">Destinations</a>
			  </li>
			  <li class="nav-item" id="4">
				<a class="nav-link" href="payment.php">Payment info</a>
			  </li>
			  <li class="nav-item" id="5">
				<a class="nav-link disabled" href="confirm.php">Confirm your booking</a>
			  </li>
			  
			  <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="width: 100%">
				<div class="my-3 py-3 row">
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Destinations</h2>
						<p class="lead">We offer a large catalogue of destinations on our space ships, you can see more detail on the <a class="gradient1" href="/destinations/mars.php">destinations tab</a> for a more in-depth view.</p>
						
						<h2 class="display-5 font-weight-light">Proxima Centauri System</h2>
						<iframe src="/3D/proxima.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="addDestinationToCart(2)">Set as destination</button>
						<br>

						<h2 class="display-5 font-weight-light">Trappist System</h2>
						<iframe src="/3D/trappist.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="addDestinationToCart(3)">Set as destination</button>

						<h2 class="display-5 font-weight-light">Sagittarius A</h2>
						<iframe src="/3D/blackHole.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="addDestinationToCart(4)">Set as destination</button>
					</div>
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Mars</h2>
						<iframe src="/3D/mars.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="addDestinationToCart(0)">Set as destination</button>
						<br>
						
						<h2 class="display-5 font-weight-light">Venus</h2>
						<iframe src="/3D/venus.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
						<button class="btn bg-transparent btn-outline-primary rgb" onclick="addDestinationToCart(1)">Set as destination</button>
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
<script src="/setAvailableTabs.js"></script>
<?php $content = ob_get_clean();
include "../parent.php"; ?>

<script>
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
			window.location.replace("./payment.php");
			
			});
	}
</script>

<style>
	h2 {
		color: yellow
	}
</style>