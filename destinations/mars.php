<?php ob_start(); ?>
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
		  
		  <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="width: 100%">
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
<?php $content = ob_get_clean();
include "../parent.php"; ?>

<style>
	.drippyBlueToPurple {
		background-image: linear-gradient(to right, blue, purple); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
	}
	
	.marsColoring {
		background-image: linear-gradient(to right, red, yellow); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
	}
</style>