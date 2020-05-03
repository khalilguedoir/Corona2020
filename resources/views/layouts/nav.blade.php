<!--(ahmedBranch) hné chna3mel variable chta5edh taswiret el user elli chyod5ol 5ater bech tetaficha fel navbar   -->
	<!-- Begin -->
	@auth
	<?php 
	//el image ta3 el user 
		$img = Auth::user()->profile()->get('img');
		if($img[0]->img == null)
		{
			$imgProfile = asset('images/user_no_image1.png');
		}else
		{
			$imgProfile = $img[0]->img;
		}

	//Nom w prenom ta3 el user
	$userNames = Auth::user()->profile()->get('fname');
	?>
	@endauth
	<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
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
	<div class="wrapper">
		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.html" title=""><img src="images/logo.jpg" alt="" style="margin-top: -4px;margin-left: -26px;width: 45px;"></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="index.html" title="">
									<span><img src="images/icon1.png" alt=""></span>
									Home
								</a>
							<li>
								<a href="profiles.html" title="">
									<span><img src="images/icon4.png" alt=""></span>
									Profiles
								</a>
								<ul>
									<li><a href="user-profile.html" title="">User Profile</a></li>
									<li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
								</ul>
							</li>
							<li>
								<a href="#" title="" class="not-box-openm">
									<span><img src="images/icon6.png" alt=""></span>
									Messages
								</a>
								<div class="notification-box msg" id="message">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a> </h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img3.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="messages.html" title="">View All Messsages</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>

						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<img src="<?= $imgProfile ?>"  style="width:32px;height:32px"alt="">
							<a href="#" title=""><?= $userNames[0]->fname ?></a>
						</div>
						<div class="user-account-settingss">
							<h3>Setting</h3>
							<ul class="us-links">
								<li><a href="profile-account-setting.html" title="">Account Setting</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Faqs</a></li>
								<li><a href="#" title="">Terms & Conditions</a></li>
							</ul>
							<h3 class="tc"><a href="sign-in.html" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->		









		<script type="text/javascript" src="http://127.0.0.1:8000/js/jquery.min.js" ></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/popper.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/flatpickr.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/slick/slick.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/script.js"></script>
	<!-- END -->