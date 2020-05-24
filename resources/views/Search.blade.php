
<head>
	<meta charset="UTF-8">
	<title><?= "Search For ".$_GET["name"]?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/animate.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/flatpickr.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/line-awesome.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/font-awesome.min.css'); ?>">
	<link href="<?php echo URL::asset('css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('lib/slick/slick.css'); ?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('lib/slick/slick-theme.css'); ?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/responsive.css'); ?>">
</head>

<body>
	
@extends('layouts.app')
<br><br><br>
	<div class="wrapper">
		
		<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>All Companies</h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">
					
					<?php
			   			foreach($result as $re){
							   
					?>
					
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="company_profile_info">
								<div class="company-up-info">
									<img src="<?= $re->img ?> " style="width:100px;height:100px" >
									<h3><?= $re->fname.' '.$re->lname ?> </h3>
									<h4><?= $re->country.'-'.$re->city ?></h4>
									<ul>
										<li><a href="#" title="" class="follow">Follow</a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
										<li><a href="#" title="" class="hire-us">Hire</a></li>
									</ul>
								</div>
								<a href="<?= "Profile/".$re->id ?>" title="" class="view-more-pro">View Profile</a>
							</div>
						</div>
						<?php
						   }
						   ?>
						
						

					</div>
				</div><!--companies-list end-->
			</div>
		</section><!--companies-info end-->
		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="help-center.html" title="">Help Center</a></li>
						<li><a href="about.html" title="">About</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p><img src="images/copy-icon2.png" alt="">Copyright 2019</p>
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->



<script type="text/javascript" src="http://127.0.0.1:8000/js/jquery.min.js" ></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/popper.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/flatpickr.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/slick/slick.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/script.js"></script>
</body>
</html>