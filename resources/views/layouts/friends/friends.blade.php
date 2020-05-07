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
												<i class="fa fa-ellipsis-v"></i>
											</div>
											<div class="profiles-slider">
												<div class="user-profy">
													<img src="images/resources/user1.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
                                                </div><!--user-profy end-->
                                                
                                                <div class="user-profy">
													<img src="images/resources/user1.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
                                                </div><!--user-profy end-->
                                                
                                                <div class="user-profy">
													<img src="images/resources/user1.png" alt="">
													<h3>John Doe</h3>
													<span>Graphic Designer</span>
													<ul>
														<li><a href="#" title="" class="followw">Follow</a></li>
														<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
														<li><a href="#" title="" class="hire">hire</a></li>
													</ul>
													<a href="#" title="">View Profile</a>
												</div><!--user-profy end-->
											</div><!--profiles-slider end-->
										</div>
</div>
</div>


@endsection


@yield('try')