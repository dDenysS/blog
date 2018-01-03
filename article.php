<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zVintauge - Free Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="https://www.zerotheme.com">

    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>

<body class="single-page">
	<div class="wrap-body">
		<?php require "include/db.php";
					require "header.php";
		 ?>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">
							<article class="single-post zerogrid">
								<div class="row wrap-post"><!--Start Box-->
									<div class="entry-header">
										<?php
											$article = R::find('articles','id=' . $_GET['id']);
											//var_dump($article);
										 ?>
										<span class="time"><?php echo $article[$_GET['id'] . '']['date'];  ?></span>
										<h2 class="entry-title"><?php echo $article[$_GET['id'] . '']['title'];  ?></h2>
										<!--<span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>-->
									</div>
									<div class="post-thumbnail-wrap">
										<img src="images/slide2.jpg">
									</div>
									<div class="entry-content">
										 <?php echo $article[$_GET['id'] . '']['text'];  ?>
									</div>
								</div>
							</article>
							<div class="zerogrid">
								<div class="comments-are">
									<div id="comment">
										<h3>Leave a Reply</h3>
										<span>Your email address will not be published. Required fields are marked </span>
										<form name="comment_form" id="comment_form" method="post" action="">
											<label>
											<span>Comment:</span>
											<textarea name="message" id="message"></textarea>
											</label>
											<label>
											<span>Name:</span>
											<input type="text"  name="name" id="name" required>
											</label>
											<label>
											<span>Email:</span>
											<input type="email"  name="email" id="email" required>
											</label>
											<center><input class="sendButton" type="submit" name="submitcomment" value="Submit"></center>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="col-1-4 col-footer-1">
						<div class="wrap-col">
							<h3 class="widget-title">About Us</h3>
							<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
						</div>
					</div>
					<div class="col-1-4 col-footer-2">
						<div class="wrap-col">
							<h3 class="widget-title">Recent Post</h3>
							<ul>
								<li><a href="#">MOST VISITED COUNTRIES</a></li>
								<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
								<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
								<li><a href="#">STARTUP COMPANY’S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
							</ul>
						</div>
					</div>
					<div class="col-1-4 col-footer-3">
						<div class="wrap-col">
							<h3 class="widget-title">Tag Cloud</h3>
							<a href="#">animals</a>
							<a href="#">cooking</a>
							<a href="#">countries</a>
							<a href="#">city</a>
							<a href="#">children</a>
							<a href="#">home</a>
							<a href="#">likes</a>
							<a href="#">photo</a>
							<a href="#">link</a>
							<a href="#">law</a>
							<a href="#">shopping</a>
							<a href="#">skate</a>
							<a href="#">scholl</a>
							<a href="#">video</a>
							<a href="#">travel</a>
							<a href="#">images</a>
							<a href="#">love</a>
							<a href="#">lists</a>
							<a href="#">makeup</a>
							<a href="#">media</a>
							<a href="#">password</a>
							<a href="#">pagination</a>
							<a href="#">wildlife</a>
						</div>
					</div>
					<div class="col-1-4 col-footer-4">
						<div class="wrap-col">
							<h3 class="widget-title">Gallery</h3>
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="images/11.jpg"></a>
										<a href="#"><img src="images/1.jpg"></a>
										<a href="#"><img src="images/13.jpg"></a>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="images/10.jpg"></a>
										<a href="#"><img src="images/9.jpg"></a>
										<a href="#"><img src="images/4.jpg"></a>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="images/2.jpg"></a>
										<a href="#"><img src="images/6.jpg"></a>
										<a href="#"><img src="images/5.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="zerogrid bottom-footer">
				<div class="row">
					<div class="bottom-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-vimeo"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="copyright">
					Copyright @ - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>
