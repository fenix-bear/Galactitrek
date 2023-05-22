<?php ob_start(); ?>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
		<ul class="nav nav-tabs">
		  <li class="nav-item">
			<a class="nav-link" aria-current="page" href="mars.php">Mars</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active" href="venus.php">Venus</a>
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
			<div class="my-3 py-3 row">
				<div class="col-sm">
					<h2 class="display-5 font-weight-light venusColoring">Venus</h2>
					<p class="lead font-weight-medium gradient2">Venus is the second planet and warmest planet in our solar system but don't let that turn you away from this planet! Beneath this planet's thick atmosphere are beautiful cloud cities with artificial beaches. Or if you feel daring, you can venture out of the cloud city and you can skydive to the ground.</p>
				</div>
				<div class="col-sm" style="text-align: center;">
					<iframe src="../3D/venus.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
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
	
	.venusColoring {
		background-image: linear-gradient(to right, yellow, green); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
	}
</style>