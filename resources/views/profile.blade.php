<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/animate.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/flatpickr.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/line-awesome.css'); ?>">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">	<link href="<?php echo URL::asset('css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('lib/slick/slick.css'); ?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('lib/slick/slick-theme.css'); ?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/responsive.css'); ?>">
</head>

<?php
	use Illuminate\Support\Facades\DB;
	use App\Http\Controllers\CommentaireController ;
	use App\Http\Controllers\FriendController ;
	?>
	@extends('layouts.app')

					<?php 
						$info = $myinfo[0];
						?>
	
<br><br><br>

		<section class="cover-sec">
			<img src="https://kocar.net/wp-content/themes/adventurous/images/demo/header-1-1600x400.jpg" alt="">
			<div class="add-pic-box">
				<div class="container">
					<div class="row no-gutters">
					<?php 
					if($info->id == Auth::id() ){
						?>
						<div class="col-lg-12 col-sm-12">		
							<form action="/ChangePhotoCov"  method="post" enctype="multipart/form-data">			
								<input type="file" id="img" name="img" onchange="this.form.submit();">
								<label for="img">Change Image</label>	
								@csrf
							</form>			
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</section>
		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile" style="height: 500px">
										<div class="user-pro-img">
											<img src="<?= $info->img?>" style="width:240px;height:220px;" alt="">
											<?php 
												if($info->id == Auth::id() ){
											?>
											<div class="add-dp" id="OpenImgUpload">
												<form action="/ChangePhotoProfile" method="post" enctype="multipart/form-data">
    												<input type="file" id="img" name="img" onchange="this.form.submit();" />
													<label for="img"><i class="fa fa-camera"></i></label>	
														@csrf

												</form>
												</div>
												<?php 
													}
												?>
										</div><!--user-pro-img end-->
										<div class="user_pro_status">
											<ul class="flw-status">
												<li>
													<span>Following</span>
													<b>34</b>
												</li>
	
											</ul>
										</div><!--user_pro_status end-->
										<ul class="social_links text-center">
                                        <h3><br>
                                        <br>Phone: <?= $info->phone ?> <br>
                                        <br>Adress: <?= $info->adress ?> <br>
                                        <br>Relation: <?= $info->statusRelationel ?> <br>
                                        <br>Country: <?= $info->city ?> <br>
                                        <br>Education: <?= $info->education ?> <br>
                                        </h3>    
									</div><!--user_profile end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Friends</h3>
											<i class="la la-ellipsis-v"></i>
										</div><!--sd-title end-->
										<div class="suggestions-list">
										<?php 
										 $friends = FriendController::GetFriends($info->id);
											foreach($friends as $friend){
												if($friend->profile_id_to != $info->id){
													$f =FriendController::infoPerson($friend->profile_id_to);	
					
										?>
											<div class="suggestion-usd">
												<img src="<?php if($f[0]->img != null ){ echo $f[0]->img; }else{ echo "http://getdrawings.com/img/cool-facebook-profile-picture-silhouette-2.jpg"; } ?>" style="width:35px;height:35px" alt="">
													<h4 style="padding-top:7px;margin-left: 45px;"><?=  $f[0]->fname." ". $f[0]->lname ?> </h4>
												<div class="sgt-text">
													<span><?=  $f[0]->bio ?></span>
												</div>
											</div>
										<?php
												}
												else{
													$f =FriendController::infoPerson($friend->profile_id_from);	
										?>
										<div class="suggestion-usd">
												<img src="<?php if($f[0]->img != null ){ echo $f[0]->img; }else{ echo "http://getdrawings.com/img/cool-facebook-profile-picture-silhouette-2.jpg"; } ?>" style="width:35px;height:35px" alt="">
												<div class="sgt-text">
													<h4><?=  $f[0]->fname." ". $f[0]->lname ?> </h4>
													<span><?=  $f[0]->bio ?></span>
												</div>
											</div>
										<?php
												}
											}

										   ?>

											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec" style="margin-bottom: 19px;">
									<div class="user-tab-sec rewivew">
										<h3><?php  echo  $info->fname." ".$info->lname  ?></h3>
										<div class="star-descp">
											<span><?= $info->bio ?></span>
										</div><!--star-descp end-->
                                       <!--  --------*****************----------     -->
									    <div class="post-topbar">
										<div class="user-picy">
											<img src="<?= $info->img ?>" style="border-radius: 50%; width: 48px; height: 48px;" alt="">
										</div>
										<div class="post-st">
											<ul>
												<li><textarea id="text" rows="7" cols="45"> </textarea></li>
												<li><input type="submit" class="btn btn-alert" value="Share" style="color: #ffff;margin-top: -150px;background-color: #466f82;"  ></li>
											</ul>
										</div><!--post-st end-->
									</div><!--post-topbar end-->
										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->
                            <!--  PUBB  -->
                            <?php foreach ($publications as $publication){ ?>
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
                                                    
														<img src="<?= $info->img?>" alt="" style="width:60px">
														<div class="usy-name">
															<h3><?php  echo  $info->fname." ".$info->lname  ?></h3>
															<span><img src="images/clock.png" alt=""><?= $publication->created_at ?> min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													</ul>
												</div>
												<div class="job_descp">
                                                    <h3> <?= $publication->text ?> </h3>
                                                    <?php 
                                                        if($publication->img != null){ ?>
                                                        <img src="<?= $publication->img ?>" style="margin-bottom: 16px;width:480px" />
                                                        <br>
                                                        <?php
                                                            }
                                                        ?>
                                                    <?php 
                                                        if($publication->video != null){ ?>
                                                            <video  height="240" controls style="margin-bottom: 16px;width:480px">
                                                                <source src="<?= $publication->video ?>" type="video/mp4">
                                                            </video>

                                                        <?php
															}
															$comts =CommentaireController::getCommataire($publication->id);
                                                        ?>

													<ul class="like-com">
														<li>
															<a href="#"><i class="fas fa-heart" aria-hidden="true"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span style="margin-left: 9px;"><?php
															$count =CommentaireController::getJaime($publication->id);
															printf($count);
															?>
															</span>
														</li> 
														<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
														</ul>
													<?php

															foreach ( $comts as $comt){
																$user = FriendController::infoPerson($comt->profile_id);
																
													?>
												<!--  Commantaire     -->
													<div class="suggestion-usd">
													<img src="<?php if($user[0]->img != null ){ echo $user[0]->img; }else{ echo "http://getdrawings.com/img/cool-facebook-profile-picture-silhouette-2.jpg"; } ?>" style="width:35px;height:35px" alt="">														<div class="sgt-text">
															<h4 style="margin-top: 11px;">
															<?= $user[0]->fname ." ".$user[0]->lname	?>
															
															</h4>
														</div>
															<span style="margin-left: 25px"><?= $comt->commentaire ?></span>
													</div>
												<!-- Commantaire -->
															<?php } ?>
												</div>
												<br>
												<form action="/comment" method="post">
												<div class="mf-field" style="margin-top:15px">
											<input type="hidden" name="id_comment" value="<?= $publication->id ?>" />
						
											<input type="text" name="message" style="margin-left: 40px;width: 70%;" placeholder="Type Comment">
											<button type="submit" style="margin-left: 0;">Pub</button>
												</form>
										</div>
                                           </div>
                                    <!-- PUBBB -->
							<?php } 
							?>
                                        </main>

		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="help-center.html" title="">Help Center</a></li>
					</ul>
					<p><img src="images/copy-icon2.png" alt="">Copyright 2019</p>
				</div>
			</div>
		</footer><!--footer end-->


<script type="text/javascript" src="http://127.0.0.1:8000/js/jquery.min.js" ></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/popper.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/flatpickr.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/slick/slick.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/js/script.js"></script>
</body>
</html>