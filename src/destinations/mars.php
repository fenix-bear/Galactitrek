
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

    <title>Destination: Mars</title>

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="/style.css" rel="stylesheet">
  </head>

  <body>

    <!-- <iframe src="../nav.html" seamless width="100%" frameborder="0" height="55px" ></iframe> -->
	<?php include ("../nav.html"); ?>

    <div class="position-relative overflow-hidden text-center bg-light" style=" padding-bottom: 0px; margin: 0px;">
	<div id="container" style="position:relative">
		
	  
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
		<ul class="nav nav-tabs">
		  <li class="nav-item">
			<a class="nav-link active" aria-current="page" href="mars.php">Mars</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="venus.php">Venus</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="proxima.php">Proxima Centuri System</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="trappist.php">Trappist System</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="sagittarius.php">Sagittarius A*</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="crabnebula.php">Crab Nebula</a>
		  </li>
		  
		  <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="background-color: black; width: 100%">
			<div class="my-3 py-3 row" style="width: 100%">
				<div class="col-sm">
					<h2 class="display-5 font-weight-light marsColoring">Mars</h2>
					<p class="lead font-weight-medium">Mars is the 4th planet in our solar system and also perhaps, one of the coolest. Here, you can go skiing on Olympus Mons, the tallest mountain in our solar system or you can go visit one of our great hiking trails there. No matter if you are looking for just a place to <i>chill</i> or just a cheap place for vacation, Mars is one of our best vacation locations.</p>
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
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">