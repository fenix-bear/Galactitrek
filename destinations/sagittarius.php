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
			<a class="nav-link" href="trappist.php">Trappist System</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active" href="sagittarius.php">Sagittarius A</a>
		  </li>

		  <li class=""nav-item">
			<a class="nav-link" href="crabnebula.php">Crab Nebula</a>
		  </li>
		  
		  <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden" style="width: 100%">
			<div class="my-3 py-3 row">
				<div class="col-sm">
					<h2 class="display-5 font-weight-light blackHoleColoring ">Sagittarius</h2>
					<p class="lead font-weight-medium gradient2">Sagottarois A is a black hole, hundreds of thousands of light years away, that is at the center of our galaxy.</p>
					<hr>
				
				</div>
				<div class="col-sm">
					<h2 class="display-5 font-weight-light blackHoleColoring" style="color: yellow">Sagittarius A</h2>
					<iframe src="../3D/blackHole.html" seamless width="100%" frameborder="0" height="500px" id="planet"></iframe>
					
				</div>
				
			</div>
		  </div>
		  
		</ul>
    </div>
<?php $content = ob_get_clean();
include "../parent.php"; ?>

<style>
	.blackHoleColoring {
		background-image: linear-gradient(to right, blue, purple); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
	}
</style>