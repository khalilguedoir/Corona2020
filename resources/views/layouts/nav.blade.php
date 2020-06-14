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
	<!-- END -->
	

		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="{{route('welcome')}}" title=""><img src="{{asset('template/images/logo.png')}}" alt="" style="margin-top: -4px;margin-left: -26px;width: 45px;"></a>
                    </div><!--logo end-->
                    @auth
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
                    </div><!--search-bar end-->
            
					<nav>
						<ul>
							<li>
								<a href="index.html" title="">
									<span><img src="{{asset('template/images/icon1.png')}}" alt=""></span>
									Home
								</a>
							</li>
							<li>
								<a href="companies.html" title="">
									<span><img src="{{asset('template/images/icon4.png')}}" alt=""></span>
									Profiles
                                </a>   
								<ul>
									<li><a href="{{route('Profile')}}" title="">User Profile</a></li>
									<li><a href="{{url('friends')}}" title="">My Friend List</a></li>
								</ul>
							</li>
					
							<li>
								<a href="#" title="" class="not-box-openm">
									<span><img src="{{asset('template/images/icon6.png')}}" alt=""></span>
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
							  					<img src="{{asset('template/images/resources/ny-img1.png')}}" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a> </h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="{{asset('template/images/resources/ny-img2.png')}}" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="{{asset('template/images/resources/ny-img3.png')}}" alt="">
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
							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="{{asset('template/images/icon7.png')}}" alt=""></span>
									Notification
								</a>
								<div class="notification-box noti" id="notification">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="{{asset('template/images/resources/ny-img1.png')}}" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="{{asset('template/images/resources/ny-img2.png')}}" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="{{asset('template/images/resources/ny-img3.png')}}" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="{{asset('template/images/resources/ny-img2.png')}}" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="#" title="">View All Notification</a>
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
							<img src="{{$imgProfile}}" width="30px" height="30px" alt="">
							<a href="#" title="">{{$userNames[0]->fname}}</a>
							<i class="fa fa-sort-down"></i>
						</div>
						<div class="user-account-settingss" id="users">
							<h3>Online Status</h3>
							<ul class="on-off-status">
								<li>
									<div class="fgt-sec">
										<input type="radio" name="cc" id="c5">
										<label for="c5">
											<span></span>
										</label>
										<small>Online</small>
									</div>
								</li>
								<li>
									<div class="fgt-sec">
										<input type="radio" name="cc" id="c6">
										<label for="c6">
											<span></span>
										</label>
										<small>Offline</small>
									</div>
								</li>
							</ul>
							<h3>Custom Status</h3>
							<div class="search_form">
								<form>
									<input type="text" name="search">
									<button type="submit">Ok</button>
								</form>
							</div><!--search_form end-->
							<h3>Setting</h3>
							<ul class="us-links">
								<li><a href="profile-account-setting.html" title="">Account Setting</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Faqs</a></li>
								<li><a href="#" title="">Terms & Conditions</a></li>
							</ul>
							<h3 class="tc"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>

					<!-- hedhia el form elli chi submiti 3liha el logout te3ou -->
					<form action="{{ route('logout') }}" id="logout-form" method="POST" style="display:none">
						@csrf
					</form>
			
    @endauth
    
    <!-- if the user is guest  -->

    @guest 
        
					<nav style="float:right !important">
						<ul>
                            <li>
                                <a href="{{route('login')}}">
                                    <span><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> </span>
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">
                                    <span> <i class="fa fa-user-plus fa-lg" aria-hidden="true"></i></span>
                                    Register
                                </a>
                            </li>
						</ul>
                    </nav><!--nav end-->
                    <div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div>
    @endguest
    </div><!--header-data end-->
			</div>
        </header><!--header end-->
