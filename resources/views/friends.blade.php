@extends('layouts.friends.friends')

@section('friendList')

 @if(isset($both))
 @section('nbrFriend',count($both) )
    @foreach($both as $friends)
        <div class="user-profy">
        <img src="{{ ($friends['img']==null) ? asset('images/user_no_image.png'): $friends['img'] }}" width="50px" height="50px" alt="">
            <h3>{{ $friends['fname'] }} {{$friends['lname']}}   </h3>
        <span>Graphic Designer</span>
        <ul>
        <li><a href="#" title="" class="followw">Follow</a></li>
        <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
        <li><a href="#" title="" class="hire">hire</a></li>
        </ul>
        <a href="#" title="">View Profile</a>
        </div>
        @endforeach
@endif

@if(isset($noFriend))
    @section('nbrFriend',0)
 <h1>Friend List is empty</h1>
@endif

@if(isset($listA))
    @section('nbrFriend',$listA->count())
    @foreach($listA as $list)
        <div class="user-profy">
                <img src="{{ ($list->profileTo->img==null) ? asset('images/user_no_image.png'): $list->profileTo->img }}" width="50px" height="50px" alt="">
                    <h3>{{ $list->profileTo->fname }} {{$list->profileTo->lname}}   </h3>
                <span>Graphic Designer</span>
                <ul>
                <li><a href="#" title="" class="followw">Follow</a></li>
                <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                <li><a href="#" title="" class="hire">hire</a></li>
                </ul>
                <a href="#" title="">View Profile</a>
                </div>  
    @endforeach

@endif


@if(isset($listI))
    $section('nbrFriend',$listI->count())
    @foreach($listI as $list)
    <div class="user-profy">
                <img src="{{ ($list->profileFrom->img==null) ? asset('images/user_no_image.png'): $list->profileFrom->img }}" width="50px" height="50px" alt="">
                    <h3>{{ $list->profileFrom->fname }} {{$list->profileFrom->lname}}   </h3>
                <span>Graphic Designer</span>
                <ul>
                <li><a href="#" title="" class="followw">Follow</a></li>
                <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                <li><a href="#" title="" class="hire">hire</a></li>
                </ul>
                <a href="#" title="">View Profile</a>
                </div>
    @endforeach

@endif





@endsection

@section('FriendRequest')
    @if(!$request)
    <h1>No Friend Request on your list</h1>
        @section('requestNbr',0)
    @else
    @section('requestNbr',$request->count())
     @foreach($request as $req)
      
        <div class="user-profy">
            <img src=" {{$req->profileFrom->img == null ? asset('images/user_no_image.png') : $req->profileFrom->img}} " width="50px" height="50px" alt="">
            <h3>{{$req->profileFrom->fname}} {{$req->profileFrom->lname}}</h3>
            <span>Graphic Designer</span>
            <ul>
                <li><a href="#" title="" class="followw">Follow</a></li>
                <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                <li><a href="#" title="" class="hire">hire</a></li>
            </ul>
            <a href="#" title="">View Profile</a>
        </div><!--user-profy end-->
     @endforeach

@endif
@endsection