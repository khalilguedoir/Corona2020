@extends('layouts.conv')

@section('conv')

@if (session('sent'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('sent') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif



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
               <a href="{{ route('conversation.show', $user->id) }}">
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
			   <img style="margin-top: -5px;" src="{{ $user_one->profile->img }}" class="img-responsive img-circle" alt="">
              </div>

			  <div class="user-message-info">
			   <h4 style="margin-top: 10px;">{{ $user_one->profile->fname ?? "Select Conversation" }}</h4>
			   <p>Online</p>
			  </div><!--/ user-message-info -->
			 </div><!--/ user-message-details -->
			 <a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
			</div><!--/ conversation-header -->

			<div class="conversation-container">
            @foreach ($messages_sent as $message_sent)
			 <div class="convo-box pull-right">
			  <div class="convo-area">
			   <div class="convo-message">
				<p class>{{ $message_sent->msg }}</p>
			   </div><!--/ convo-message-->
			   <span>{{ $message_sent->created_at}}</span>
			  </div><!--/ convo-area -->
			  <div class="convo-img">
			   <img src="{{ $user_one->profile->img }}" alt="" class="img-responsive img-circle">
			  </div><!--/ convo-img -->
             </div><!--/ convo-box -->
             @endforeach






             @foreach ($messages_rec as $message_rec)
			 <div class="convo-box convo-left">
			  <div class="convo-area convo-left">
			   <div class="convo-message">
				<p>{{$message_rec->msg }}</p>
			   </div><!--/ convo-message-->
			   <span>{{ $message_rec->created_at}}</span>
			  </div><!--/ convo-area -->
			  <div class="convo-img">
			   <img src="http://themashabrand.com/templates/Fluffs/assets/img/users/6.jpg" alt="" class="img-responsive img-circle">
			  </div><!--/ convo-img -->
             </div><!--/ convo-box -->
             @endforeach





            </div><!--/ conversation-container -->
            <form action="{{ route('conversation.store') }}" method="post">
                @csrf
            <div class="type_messages">

             <div class="input-field">
                 <input type="text" name="to" value="{{ $user_one->id }}" hidden>

             <textarea name="content" placeholder="Type something &amp; press enter"></textarea>
                  <button type="submit" class="btn btn-outline-primary row-lg">send</button>


			  <!--
                   <textarea placeholder="Type something &amp; press enter"></textarea>
              <a class="btn btn-outline-warning mt-0" href="">Send</a>
            <ul class="imoji">
			   <li><a href="#"><i class="fa fa-smile"></i></a></li>
			   <li><a href="#"><i class="fa fa-image"></i></a></li>
               <li><a href="#"><i class="fa fa-paperclip"></i></a></li>
              </ul>--><!--/ imoji -->


             </div><!--/ input-field -->
            </div><!--/ type_messages -->
            </form>

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
