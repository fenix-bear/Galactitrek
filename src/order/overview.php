
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

    <title>Galactitrek Booking Overview</title>

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="/style.css" rel="stylesheet">
  </head>

  <body>
	<?php include ("../nav.html"); ?>

    <div class="position-relative overflow-hidden text-center bg-light" style=" padding-bottom: 0px; margin: 0px;">
	<div id="container" style="position:relative">
		
	  
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
		<ul class="nav nav-tabs">
		  <li class="nav-item">
			<a class="nav-link active" aria-current="page" href="overview.php">Overview</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="ships.php">Choose your Ship</a>
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
		  
		  <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="background-color: black">
			<div class="my-3 py-3 row">
				<div class="col-sm">
					<h2 class="display-5 font-weight-light">Training</h2>
					<p class="lead font-weight-medium">Unlike other cruising companies, we require very minimal training for those people boarding our public ships. Those people will go to the theater on the ship the first day to be shown what to do in the case of an emergancy. People flying their own private ship will need to have a pilots liscence or go through our free 30 day pilot training.</p>
					<h2 class="display-5 font-weight-light">Choosing your ship</h2>
					<p class="lead font-weight-medium gradient2">The first step in the booking process is to choose the ship that you want to travel in. Galactitrek offers a variety of ships, ranging from smaller vessels for shorter trips to larger, more luxurious ships for longer journeys. Each ship has its own unique features and amenities, so take the time to review the options and select the one that best fits your needs. If you haven't already, navigate to the <a class="gradient1" href="/ships.php">ships tab here</a> to get more details on the vessels we offer.</p>
					<h2 class="display-5 font-weight-light">Selecting your destination</h2>
					<p class="lead font-weight-medium gradient2">Once you've chosen your ship, you'll need to select your <a class="gradient1" href="/destinations/mars.php">destinations</a>. Galactitrek offers a variety of destinations, from nearby planets within our own solar system to distant stars in our galaxy. Consider factors like distance, travel time, and the availability of interesting sights and experiences when selecting your destination. Planets like Mars and Venus will always be our cheapest options and is most likely to be included in our flight plan.</p>
					<h2 class="display-5 font-weight-light">Pricing</h2>
					<p class="lead font-weight-medium">Pricing is going to vary from ship to ship and location to location. Generally, the farther away a celestial body is away from earth, the more expensive it would be and ships with less people per capita cost more. See our <a class="gradient1" href="/pricing.html">pricing</a> for more information</p>
					<h2 class="display-5 font-weight-light">Excursions</h2>
					<p class="lead font-weight-medium gradient2">Most excursions we have labeled on our planets are able to be booked from our website but in the case of an excursion not loading, you can contact <a class="gradient1" href="/support.html">our support</a></p>
				</div>
				<div class="col-sm" style="text-align: center;">
					<iframe src="../3D/mars.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
					<label for="planet" class="kindaHidden">Click and drag to pan camera. You can see various locations on the globe.</label>
				</div>
				
			</div>
		  </div>
		  
		</ul>
    </div>

    <div data-include="../footer.html"></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

<style>
	.drippyBlueToPurple {
		background-image: linear-gradient(to right, blue, purple); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
	}
	
	.marsColoring {
		background-image: linear-gradient(to right, red, yellow); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
	}
	
	h2 {
		color: yellow
	}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">