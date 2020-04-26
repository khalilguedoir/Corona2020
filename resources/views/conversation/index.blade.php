@extends('layouts.conv')

@section('conv')


	 <!-- ==============================================
	 Modal Section
	 =============================================== -->
     <section class="chat">
	  <div class="container">
	   <div class="row">

        <div class="messages-box">
		 <div class="row">
		  <div class="col-lg-4 col-md-12 no-pdd">
		   <div class="messages-container">

			<div class="message-header">
			 <div class="message-title">
			  <h4>Messages</h4>
			 </div><!--/ message-title-->
             <div class="search-area">
              <div class="input-field">
               <input placeholder="Search" type="text">
               <i class="fa fa-search"></i>
              </div>
             </div><!--/ search-area-->
			</div><!--/ message-header-->

			<!--conversation list-->

			<div class="messages-list">
			  <ul>

			   @foreach($users as $user)
               <a href="#">
			   <li class="list-group-item list-group-item-action">
				<div class="user-message-details">
				 <div class="user-message-img">
				  <img src="{{ $user->profile->img }}" class="img-responsive img-circle" alt="">
				 </div>
				 <div class="user-message-info">
				  <h4>{{ $user->profile->fname }}</h4>
				  <p>Lorem ipsum dolor ...</p>
				  <span class="time-posted">1:55 PM</span>
			     </div><!--/ user-message-info -->
			    </div><!--/ user-message-details -->
               </li>
               </a>
               @endforeach
			  </ul>
			</div><!--/ messages-list -->

		   </div><!--/ messages-container-->
		  </div><!--/ col-lg-4 -->

		  <div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
		   <div class="conversation-box">

			<div class="conversation-header">
			 <div class="user-message-details">
			  <div class="user-message-img">
			   <img src="http://themashabrand.com/templates/Fluffs/assets/img/users/6.jpg" class="img-responsive img-circle" alt="">
			  </div>
			  <div class="user-message-info">
			   <h4>John Doe</h4>
			   <p>Online</p>
			  </div><!--/ user-message-info -->
			 </div><!--/ user-message-details -->
			 <a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
			</div><!--/ conversation-header -->

			<div class="conversation-container">

			 <div class="convo-box pull-right">
			  <div class="convo-area">
			   <div class="convo-message">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
			   </div><!--/ convo-message-->
			   <span>Sat, Aug 23, 1:08 PM</span>
			  </div><!--/ convo-area -->
			  <div class="convo-img">
			   <img src="http://themashabrand.com/templates/Fluffs/assets/img/users/2.jpg" alt="" class="img-responsive img-circle">
			  </div><!--/ convo-img -->
			 </div><!--/ convo-box -->

			 <div class="convo-box convo-left">
			  <div class="convo-area convo-left">
			   <div class="convo-message">
				<p>Cras ultricies ligula.</p>
			   </div><!--/ convo-message-->
			   <span>5 minutes ago</span>
			  </div><!--/ convo-area -->
			  <div class="convo-img">
			   <img src="http://themashabrand.com/templates/Fluffs/assets/img/users/6.jpg" alt="" class="img-responsive img-circle">
			  </div><!--/ convo-img -->
			 </div><!--/ convo-box -->

			 <div class="convo-box pull-right">
			  <div class="convo-area">
			   <div class="convo-message">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
			   </div><!--/ convo-message-->
			   <span>Sat, Aug 23, 1:08 PM</span>
			  </div><!--/ convo-area -->
			  <div class="convo-img">
			   <img src="http://themashabrand.com/templates/Fluffs/assets/img/users/2.jpg" alt="" class="img-responsive img-circle">
			  </div><!--/ convo-img -->
			 </div><!--/ convo-box -->

			 <div class="convo-box convo-left">
			  <div class="convo-area convo-left">
			   <div class="convo-message">
				<p>Lorem ipsum dolor sit amet</p>
			   </div><!--/ convo-message-->
			   <span>2 minutes ago</span>
			  </div><!--/ convo-area -->
			  <div class="convo-img">
			   <img src="http://themashabrand.com/templates/Fluffs/assets/img/users/6.jpg" alt="" class="img-responsive img-circle">
			  </div><!--/ convo-img -->
			 </div><!--/ convo-box -->

			 <div class="convo-box pull-right">
			  <div class="convo-area">
			   <div class="convo-message">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
			   </div><!--/ convo-message-->
			   <span>Sat, Aug 23, 1:08 PM</span>
			  </div><!--/ convo-area -->
			  <div class="convo-img">
			   <img src="http://themashabrand.com/templates/Fluffs/assets/img/users/2.jpg" alt="" class="img-responsive img-circle">
			  </div><!--/ convo-img -->
			 </div><!--/ convo-box -->

			 <div class="convo-box convo-left">
			  <div class="convo-area convo-left">
			   <div class="convo-message">
				<p>Typing...</p>
			   </div><!--/ convo-message-->
			   <span>2 minutes ago</span>
			  </div><!--/ convo-area -->
			  <div class="convo-img">
			   <img src="http://themashabrand.com/templates/Fluffs/assets/img/users/6.jpg" alt="" class="img-responsive img-circle">
			  </div><!--/ convo-img -->
			 </div><!--/ convo-box -->

			</div><!--/ conversation-container -->
            <div class="type_messages">
             <div class="input-field">
              <textarea placeholder="Type something &amp; press enter"></textarea>
			  <ul class="imoji">
			   <li><a href="#"><i class="fa fa-smile"></i></a></li>
			   <li><a href="#"><i class="fa fa-image"></i></a></li>
			   <li><a href="#"><i class="fa fa-paperclip"></i></a></li>
			  </ul><!--/ imoji -->
             </div><!--/ input-field -->
            </div><!--/ type_messages -->

           </div><!--main-conversation-box end-->
		  </div><!--/ col-lg-8 -->

		 </div><!--/ row -->
		</div><!--/ messages-box -->

      </div><!--/ row -->
      </div><!--/ container -->
     </section><!--/ chat -->

     <!-- ==============================================
	 Scripts
	 =============================================== -->
	<script src="http://themashabrand.com/templates/Fluffs/assets/js/jquery.min.js"></script>
	<script src="http://themashabrand.com/templates/Fluffs/assets/js/bootstrap.min.js"></script>
	<script src="http://themashabrand.com/templates/Fluffs/assets/js/base.js"></script>
	<script src="http://themashabrand.com/templates/Fluffs/assets/plugins/slimscroll/jquery.slimscroll.js"></script>
	<script>
	$('#Slim,#Slim2').slimScroll({
	        height:"auto",
			position: 'right',
			railVisible: true,
			alwaysVisible: true,
			size:"8px",
		});
	</script>
@endsection
