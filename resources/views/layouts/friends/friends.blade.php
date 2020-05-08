@extends('layouts.app')
@section('title','friends')

    @section('linkSheet')
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
        <style>
            .bg-lights
            {
                background-color:#466f82;
            }
            nav .m-auto a {
                color:#fff;
            }
            .radius 
            {
                border-radius: 20px;
                color:#636b6f;
                font-family: PT;
                font-size: 15px
            }
          
        </style>
    @endsection

@section('content')

<!-- <div class="container">
  <nav class="navbar navbar-expand-lg bg-lights w-100 p-4 shadow radius">
    <div class="m-auto" >
    <a class="mr-2" href="#">LISTE DES AMIS</a>
    <span style="border-right:groove;"></span>
    <a href="#" class="ml-3">LISTE DES INVITATIONS</a>
    </div>
  </nav>
</div> -->




<div class="container">
    <div class="main-section-data">
    <div class="row">
        <div class="col-6">
        <div class="top-profiles">
											<div class="pf-hd">
												<h3>Friend List </h3>
												<span class="badge badge-primary badge-pill float-right">@yield('nbrFriend')</span>
												<i class="fa fa-ellipsis-v"></i>
											</div>
											<div class="profiles-slider">
												@yield('friendList')

                                        </div>
										</div>
									</div>
                                        
        <div class="col-6">
		<div class="top-profiles">
											<div class="pf-hd">
												<h3>Freind request</h3>
												<span class="badge badge-primary badge-pill float-right">@yield('requestNbr') </span>
												<i class="fa fa-ellipsis-v"></i>
											</div>
											<div class="profiles-slider">
                                                @yield('FriendRequest')
                                             </div>
											</div><!--profiles-slider end-->
										</div>
</div>
</div>
</div>

@endsection


