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
				<a class="nav-link " href="payment.php">Payment info</a>
			</li>
			<li class="nav-item" id="5">
				<a class="nav-link active" href="confirm.php">Confirm your booking</a>
			</li>

			<div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="width: 100%">
				<div class="my-3 py-3 row">
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Confirmed!</h2>
						<p class="lead" id="flightInfo"></p>
					</div>
					<div class="col-sm">
						<h2 class="display-5 font-weight-light">Also..</h2>
						<p class="lead" id="extraInfo"></p>
					</div>
				</div>
			</div>

		</ul>
	</div>
	<div>
		<?php include("../currentPriceWidget.html"); ?>
	</div>
</div>
<script src="/setAvailableTabs.js"></script>
<?php $content = ob_get_clean();
include "../parent.php"; ?>
<?php include("confeti.html"); ?>

<script src="https://smtpjs.com/v3/smtp.js">
</script>

<script type="text/javascript">
	// Credit: https://www.geeksforgeeks.org/how-to-send-an-email-from-javascript/#
	const token = "F8E30058BD0237FE3708F610140F285E97C4"

	function sendEmail(details) {
		console.log(details);
		Email.send({
				Host: "smtp.elasticemail.com",
				Username: "galactitrek@gmail.com",
				Password: token,
				To: sessionStorage.email,
				From: "galactitrek@gmail.com",
				Subject: "Galactitrek Booking",
				Body: '<body><h1>Flight booked!</h1><p>Incase you forgot, here are the details of your flight:</p>' + details + '</body><hr><footer>From the Galactitrek team</footer>',
			})
			.then(function(message) {
				if (message == "OK") {
					alert("We sent an email to " + sessionStorage.email + " regarding your booking with us. Thank you for choosing Galactitrek")
				} else {
					alert("Did you put in the correct email? " + sessionStorage.email)
					console.log(message)
				}
			});
	}
</script>

<script>
	function loadFlightInfo() {
		var randomTimes = ["12AM", "8:30 AM", "11:30 AM", "2:00 PM", "4:20PM", "4:30 PM", "5:45PM", "6:20PM", "7:30PM", "8:10PM", "9:50PM", "10:30PM", "11:45PM"]
		var randomDate = [" July 14", "July 17", "July 19", "July 21", "August 1", "August 3", "August 5", "August 9", "August 15", "August 16", "August 17", "August 18", "August 21", "August 30", "August 31", "September 4", "September 19", "October 4", "October 31", "November 17", "November 19", "December 12", "December 25", "December 27", "December 31"]
		var text = "Congratulations! Your flight is now booked. You will depart from the Miami Spaceport at "
		text += (randomTimes[Math.floor(Math.random() * randomTimes.length)])
		text += " on " + (randomDate[Math.floor(Math.random() * randomDate.length)])

		document.getElementById("flightInfo").innerHTML = text;
	}

	function loadExtraPaths() {
		var closeLocations = ["Mercury Charging station", "Titan Base", "Ceres dumping station", "Uranus waste disposal", "Jupiter", "Europa", "Kepler-22b"]
		var farLocations = ["Sirius A", "Titania base", "Wolf 359-B station", "Barnard's Star", "Gaia BH1"]
		var text = "Along with your listed location, we will also be going to the following for maintenance purposes:"
		text += "<ul id='stopsList'>"
		for (var i = 0; i < Math.floor(Math.random() * 2 + parseInt(sessionStorage.days / 2) + 1); i++) {
			if (i > 3) {
				var ran = Math.floor(Math.random() * farLocations.length)
				tmp = farLocations.splice(ran, ran + 1)[0]
				if (tmp != undefined) {
					text += "<li>"
					text += tmp
					text += "</li>"
				}
			} else {
				var ran = Math.floor(Math.random() * closeLocations.length)
				var tmp = closeLocations.splice(ran, ran + 1)[0]
				if (tmp != undefined) {
					text += "<li>"
					text += tmp
					text += "</li>"
				}
			}

		}
		text += "</ul>"

		document.getElementById("extraInfo").innerHTML = text;
	}

	function fakeDeductMoney() {
		// TODO:
	}

	loadFlightInfo()
	loadExtraPaths()
	fakeDeductMoney()
	if (sessionStorage.email != undefined && sessionStorage.email != "") {
		sendEmail("<p>" + document.getElementById("flightInfo").innerHTML + "</p><p>List of stops:</p><ul>" + document.getElementById("stopsList").innerHTML + "</ul>")
	}
</script>

<style>
	h2 {
		color: yellow
	}
</style>