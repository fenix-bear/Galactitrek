<?php ob_start(); ?>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
		<ul class="nav nav-tabs">
		  <li class="nav-item">
			<a class="nav-link" aria-current="page" href="mars.php">Mars</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="venus.php">Venus</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="proxima.php">Proxima Centuri System</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active" href="trappist.php">Trappist System</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="sagittarius.php">Sagittarius A</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="crabnebula.php">Crab Nebula</a>
		  </li>
		  
		  <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="width: 100%">
			<div class="my-3 py-3 row">
				<div class="col-sm">
					<h2 class="display-5 font-weight-light proximaColoring">Trappist System</h2>
					<p class="lead font-weight-medium gradient2">This star system is located 40 light-years away from our own solar system. It has an abundant amount of planets; from planets hotter than venus, or cold ice giants, this system surely has the right planet for you.</p>
					<hr>
					<h2 class="display-5 font-weight-light proximaColoring">Trappist-1-f</h2>
					<iframe src="../3D/tropical.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
					
					<h2 class="display-5 font-weight-light proximaColoring">Trappist-1-g</h2>
					<iframe src="../3D/gasGiant.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
				
				</div>
				<div class="col-sm">
					<h2 class="display-5 font-weight-light proximaColoring">Trappist-1-e</h2>
					<iframe src="../3D/superCold.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
					
					<h2 class="display-5 font-weight-light proximaColoring">Trappist-1-d</h2>
					<iframe src="../3D/desert.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
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
	
	.proximaColoring {
		background-image: linear-gradient(to right, yellow, red); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
	}
</style>