<!-- for including html files -->
<script src="./libs/csi.min.js"></script>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">

  <title>Galactitrek</title>
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/monodeco" type="text/css"/>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="/style.css" rel="stylesheet">
</head>

<body style="font-family: 'Monodeco';">

  <?php include ("nav.html"); ?>

  <!-- <iframe  src="nav.html" seamless width="100%" frameborder="0" height="55px" ></iframe> -->

  <div class="position-relative overflow-hidden text-center bg-light" style=" padding-bottom: 0px; margin: 0px; z-index: 0;">
    <div id="container" style="position:relative;">
      <iframe src="/starsAutoMove.html" style="
          position: fixed;
          top: 0px;
          bottom: 0px;
          right: 0px;
          width: 100%;
          border: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          z-index: -1;
          height: 100%;
        ">
      </iframe>

    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="mainContent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden">
        <div class="my-3 py-3 row">
          <div class="col-sm">
            <h2 class="display-5 font-weight-light">Reviews</h2>
            <p class="lead font-weight-medium gradient2">As you already know, Galactitrek is a state-of-the-art space tourism agency but don't just take that from us, because we have thousands of reviews that share the same sentiment. Here are just a few samples,</p>

            <iframe src="/hr.html" width="100%" height="70px" frameborder="0" height="auto" id="planet"
              style="overflow: hidden;"></iframe>
			
			<div class="border rounded review review">
				<h2>Elon Musk</h2>
				<div class="stars">
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
				</div>
				<br>
				
				<i class="bi bi-quote"><img src="/quote.svg" class="invertedIcon"></img>I admit, Galactitrek is pretty solid. I went with their Executive suite on the largest ship at the time and found everything to be super high-quality. Even the boarding process is fun, maybe even better than my own company.<img src="/quote.svg" class="invertedIcon" style="transform: rotate(180deg);"></img></i>
				<p class="normal">Elon Reeve Musk - May 19, 2284, Paris Space Peace Conference</p>
			</div>
			<br>
			<div class="border rounded review review">
				<h2>Anonymous reviewer</h2>
				<div class="stars">
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-half.svg" class="invertedIcon"></img>
				</div>
				<br>
				
				<i class="bi bi-quote"><img src="/quote.svg" class="invertedIcon"></img>Overall, just great. The only issue is that it can sometimes be packed in certain areas so make sure you reserve a seat where needed.<img src="/quote.svg" class="invertedIcon" style="transform: rotate(180deg);"></img></i>
				<p class="normal">Anonymous - December 3, 2642</p>
			</div>
			
			
          </div>
          <div class="col-sm align-items-center justify-content-center">
            <iframe src="/3D/reviews.html" seamless width="100%" frameborder="0" height="500px" id="planet"
              style="
			  flow: hidden;"></iframe>
			  
			  <div class="border rounded review review">
				<h2>Anonymous reviewer</h2>
				<div class="stars">
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
					<img src="/star-fill.svg" class="invertedIcon"></img>
				</div>
				<br>
				
				<i class="bi bi-quote"><img src="/quote.svg" class="invertedIcon"></img>I used to hate Galactitrek because of their scandalous doings; however, going on their newest ship, I don't care about that anymore.<img src="/quote.svg" class="invertedIcon" style="transform: rotate(180deg);"></img></i>
				<p class="normal">Anonymous - Feburary 12, 2768</p>
			</div>
          </div>

        </div>
      </div>
    </div>

    <?php include ("footer.html"); ?>
    <!-- <iframe src="footer.html" seamless width="100%" frameborder="0" height="500px" ></iframe> -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
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
	.review {
		background:  linear-gradient(90deg, rgba(11,9,29,1) 0%, rgba(0,20,36,1) 100%);
		padding: 15px;
	}
	.invertedIcon {
		filter: invert(1);
		height: 2em;
	}
  .drippyBlueToPurple {
    background-image: linear-gradient(to right, blue, purple);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
</style>