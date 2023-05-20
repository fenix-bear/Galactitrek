
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

    <title>Galactitrek Ships</title>

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
				<a class="nav-link active" href="ships.php">Choose your Ship</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="room.php">Room</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="destinations.php">Destinations</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="payment.php">Payment info</a>
			  </li>
			  <li class="nav-item">
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
			.then(data => {sessionStorage.setItem('ship', JSON.stringify(data.ships[shipIndex])); window.location.replace("./room.php");});
	}
</script>

<style>
	
	
	h2 {
		color: yellow
	}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">