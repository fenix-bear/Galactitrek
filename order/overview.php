<?php ob_start(); ?>
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
	<ul class="nav nav-tabs">
		<li class="nav-item" id="0">
			<a class="nav-link active" aria-current="page" href="overview.php">Overview</a>
		</li>
		<li class="nav-item" id="1">
			<a class="nav-link" href="ships.php">Choose your Ship</a>
		</li>
		<li class="nav-item" id="2">
			<a class="nav-link" href="ships.php">Room</a>
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

		<div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden">
			<div class="my-3 py-3 row">
				<div class="col-sm">
					<h2 class="display-5 font-weight-light">Training</h2>
					<p class="lead font-weight-medium">Unlike other cruising companies, we require very minimal training for those people boarding our public ships. Those people will go to the theater on the ship the first day to be shown what to do in the case of an emergency. People flying their own private ship will need to have a pilots license or go through our free 30 day pilot training.</p>
					<h2 class="display-5 font-weight-light">Choosing your ship</h2>
					<p class="lead font-weight-medium gradient2">The first step in the booking process is to choose the ship that you want to travel in. Galactitrek offers a variety of ships, ranging from smaller vessels for shorter trips to larger, more luxurious ships for longer journeys. Each ship has its own unique features and amenities, so take the time to review the options and select the one that best fits your needs. If you haven't already, navigate to the <a class="gradient1" href="/ships.php">ships tab here</a> to get more details on the vessels we offer.</p>
					<h2 class="display-5 font-weight-light">Selecting your destination</h2>
					<p class="lead font-weight-medium gradient2">Once you've chosen your ship, you'll need to select your <a class="gradient1" href="/destinations/mars.php">destinations</a>. Galactitrek offers a variety of destinations, from nearby planets within our own solar system to distant stars in our galaxy. Consider factors like distance, travel time, and the availability of interesting sights and experiences when selecting your destination. Planets like Mars and Venus will always be our cheapest options and is most likely to be included in our flight plan.</p>
					<h2 class="display-5 font-weight-light">Pricing</h2>
					<p class="lead font-weight-medium">Pricing is going to vary from ship to ship and location to location. Generally, the farther away a celestial body is away from earth, the more expensive it would be and ships with less people per capita cost more. See our <a class="gradient1" href="/pricing.html">pricing</a> for more information</p>
					<h2 class="display-5 font-weight-light">Excursions</h2>
					<p class="lead font-weight-medium gradient2">Most excursions we have labeled on our planets are able to be booked from our website but in the case of an excursion not loading, you can contact <a class="gradient1" href="/support.php">our support</a></p>
				</div>
				<div class="col-sm">
					<!-- TODO: put something here -->
					<h2>Galactitrek live ship map</h2>
					<p>This is a visualization of all galactitrek ships in near-earth orbit</p>
					<iframe src="orbitGame.html" seamless width="100%" frameborder="0" height="100%" id="game"></iframe>
				</div>

			</div>
		</div>

	</ul>
</div>
<script src="/setAvailableTabs.js"></script>
<script src="/setAvailableTabs.js"></script>
<?php $content = ob_get_clean();
include "../parent.php"; ?>