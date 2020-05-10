@extends('layouts.friends.friends')

@section('MassagesRoute')
    @if(session('friendAccepted'))
        <h4 class="alert alert-primary text-center"> {{session('friendAccepted')}} </h4>
    @endif

    @if(session('friendDown'))
        <h4 class="alert alert-danger text-center"> {{session('friendDown')}} </h4>
    @endif
@endsection

@section('friendList')

 @if(isset($both))
 @section('nbrFriend',count($both) )
    @foreach($both as $friends)
        <div class="user-profy">
        <img src="{{ ($friends['img']==null) ? asset('images/user_no_image.png'): $friends['img'] }}" width="50px" height="50px" alt="">
            <h3>{{ $friends['fname'] }} {{$friends['lname']}}   </h3>
        <span>Graphic Designer</span>
    
        <a href="{{url('profile/'.$friends['id'].'') }}" title="">View Profile</a>
        <a href="#" class="text-danger delete" onclick="
        d = document.getElementById('removeFriend');
        d.action = '{{action('FriendController@destroy',  $friends['idFriendList'])}}';
        event.preventDefault();
    document.getElementById('removeFriend').submit();">Delete</a>
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
                
                <a href="#" title="">View Profile</a>
                <a href="#" class="text-danger delete" onclick="d=document.getElementById('removeFriend');
                d.action = '{{action('FriendController@destroy',$list->id )}}';
                event.preventDefault();
                document.getElementById('removeFriend').submit();
                ">Delete</a>
                </div>  
    @endforeach

@endif


@if(isset($listI))
    @section('nbrFriend',$listI->count())
    @foreach($listI as $list)
    <div class="user-profy">
                <img src="{{ ($list->profileFrom->img==null) ? asset('images/user_no_image.png'): $list->profileFrom->img }}" width="50px" height="50px" alt="">
                    <h3>{{ $list->profileFrom->fname }} {{$list->profileFrom->lname}}   </h3>
                <span>Graphic Designer</span>
            
                <a href="#" title="">View Profile</a>
                <a href="#" class="text-danger delete" onclick="
                d = document.getElementById('removeFriend');
                d.action = '{{route('friends.destroy', $list->id)}}';
                event.preventDefault();
                document.getElementById('removeFriend').submit();
                ">Delete</a>
                </div>
    @endforeach

@endif


@endsection



<!-- list des invitation -->
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
                <li><a href="#" title="" class="followw" onclick="
                d= document.getElementById('acceptForm');
                d.action = '{{action('FriendController@Accept',$req->id)}}';
                event.preventDefault();
                document.getElementById('acceptForm').submit();
                ">Accept</a></li>
              
                <li><a href="#" title="" class="hire" onclick="
                d=document.getElementById('removeFriend');
                d.action='{{route('friends.destroy', $req->id)}}' ;
                event.preventDefault();
                d.submit();
                ">ignore</a></li>
            </ul>
            <a href="#" title="">View Profile</a>
        </div><!--user-profy end-->
     @endforeach

@endif


@endsection

@section('formPlacement')


<form id="removeFriend" action="" method="POST" style="display:none">
            @csrf
            @method('DELETE')
        </form>
<form id="acceptForm" action="" method="POST"  style="position:absolute;visibility:hidden">
    @csrf 
    @method('PUT')
</form>

@endsection