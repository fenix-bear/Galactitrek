<?php ob_start(); ?>
    <!-- html data -->
	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
		<div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden">
		  <div class="my-3 py-3 row">
			<div class="col-sm" style="text-align: center">
				<h2 class="display-5 font-weight-light">404 page not found!</h2>
				
				<p>Go back to the main page <a class="gradient1" href="/index.php">Here</a>
			</div>
		</div>
	</div>
<?php $content = ob_get_clean();
include "parent.php"; ?>