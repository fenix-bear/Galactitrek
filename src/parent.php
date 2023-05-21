<!doctype html>
<html lang="en">

<head>
  <title>Galactitrek</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">

  
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/monodeco" type="text/css"/>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="/style.css" rel="stylesheet">
</head>
<body style="font-family: 'Monodeco';position: relative;z-index: 1;">
    <?php include ("nav.html"); ?>
	
    <div class="position-relative overflow-hidden text-center bg-light" style=" padding-bottom: 0px; margin: 0px; z-index: 0;">
        <?php include ("starsAutoMove.html"); ?>
        <?php if (!empty($content)):
                echo $content;
            else:
                echo $defaultContent;
            endif; ?>
    </div>
	<?php include ("footer.html"); ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
</body>
</html>