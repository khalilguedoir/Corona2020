<!--(DaLiBranch) hné sala7et navbar we zedtou 7keyet el auth we messaget   -->
	<!-- Begin -->
	<?php
		use Illuminate\Support\Facades\DB;
		use App\Http\Controllers\MessageController ;
		use App\Http\Controllers\FriendController ;

	?>
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

		<header class="fixed-top" style="">
		 <div class="wrapper">
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.html" title=""><img src="images/logo.jpg" alt="" style="margin-top: -4px;margin-left: -26px;width: 45px;"></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form action="/Search" method="GET">
							<input type="text" name="name" placeholder="Search...">
							<button type="submit"><i class="fa fa-search"></i></button>
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
								<a href="#"  title="" class="not-box-openm">
									<span><img src="images/icon6.png" alt=""></span>
									Messages
								</a>
								<div class="notification-box msg" id="message">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="/Edit" title="">Clear all</a>
									</div>
									<div class="nott-list">
									<?php
									$msgs = MessageController::getFirsts_Msg();
									foreach($msgs as $msg){
										if($msg->profile1_id !=Auth::id() ){
											$f =FriendController::infoPerson($msg->profile1_id);
										}
										else{
											$f =FriendController::infoPerson($msg->profile2_id);
										}
									?>
									<!--    Messages       -->
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="i<?= $f[0]->img ?>" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="<?= "Profile/".$f[0]->id ?>" title=""><?= $f[0]->fname." ".$f[0]->lname ?></a></h3>
							  					<p style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;height: 41px;">
												  <?= $msg->msg ?>
												  </p>
							  					<span>2 min ago</span>
										    </div>
										</div>
									<!--notification-info -->
										<?php
										}
										?>
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
						<?php 
						if (Auth::id()){
							?>
							<img src="<?= $imgProfile ?>"  style="width:32px;height:32px"alt="">
							<a href="#" title=""><?= $userNames[0]->fname ?></a>
						<?php 
						}
						else {
							?>
							<img src=""  style="width:32px;height:32px"alt="">
							<a href="#" title=""></a>
						<?php
						}
						?>
						</div>
						<div class="user-account-settingss">
							<h3>Setting</h3>
							<ul class="us-links">
								<li><a href="/profile/Edit" title="">Account Setting</a></li>
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
	



	<!-- END -->