@extends('layouts.app')
@section('title','HOME')
@section('content')
@auth
	<?php
	//Nom w prenom ta3 el user
    $userl = Auth::user()->profile()->get('lname');
    $userf = Auth::user()->profile()->get('fname');
	?>
	@endauth
@include('includes.message-block')
    <section class="row new-pub">
        <div class="col-md-6 col-md-offset-3">
            <form class="md-form" action="{{ route('publication.create') }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="pub">
                    <img class="avatar" src="https://s3.amazonaws.com/codecademy-content/courses/jquery+jfiddle+test/feedster/profile-purple.svg">
                    <h3 class='name'>{{$userl[0]->lname}} {{$userf[0]->fname}}</h3>
                    <textarea class="postText" name="text" id="new-pub" rows="5" placeholder="Que voulez-vous dire?                    "></textarea>
<br>
                    <input type="file" id="img" class="btn  btn-primary" name="img" style=""/>
                </div></div>
                <div class="button-holder">
                    <button type="submit" class="btn-pub">Publier</button>
                  </div>
             <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
            <section class="row pubs">
                <div class="col-md-6 col-md-offset-3">
                    <header class="titre"><h3>Other Publication</h3></header>
                    @foreach($publications as $publication)
                    <article class="pub" data-postid="{{ $publication->id }}">
                        <div class="info">
                            <img class="avatar" src="https://s3.amazonaws.com/codecademy-content/courses/jquery+jfiddle+test/feedster/profile-purple.svg">
                    <h3 class='name'>{{$userl[0]->lname}} {{$userf[0]->fname}}
                        <h5 style="text-align:right"> on {{ $publication->created_at }}</h5>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                    ....
                                                   </button>
                                                   <ul class="dropdown-menu">
          <li> <a href="" class="edit" data-toggle="modal" data-target="#edit-modal" >Edit</a> | </li>
                                        <li><a href="{{ route('publication.Delete', ['pub_id' => $publication->id]) }}">Delete</a>

                                                   </ul>
                                                 </div>
                    </h3>


                          </div>


                        <div class="menu-btn">
                            <a href="#" title=""><i class="fa fa-bars"></i></a>
                        </div>
                        <p>{{ $publication->text }}
                            <br><img src="uplaod/{{$publication->img}} " class="aa">

                        </p>
                        <div class="interaction" style="text-align: right">
                            <div data-action="like" class="glyphicon btn-glyphicon glyphicon-thumbs-up img-circle text-primary zz"> <a href="">Like</a></div>
                           </div>
                           <h5>Commentaires</h5>
                         @foreach($commentaires as $commentaire)

                              <div class="card mb-2">
                                          <div class="card-body">
                                               {{$commentaire->commentaire}}
                                                      </div>
                                                            </div>
                         @endforeach
                            <form action="{{ route('commentaire.store',$publication) }}" method="POST">

                                <div class="form-group">

                     <textarea class="form-control @error('commentaire') is-invalid @enderror" name="text" id="new-com" placeholder="Votre commentaire ..." ></textarea>

                    </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Publier commentaire  </button>
                                  </div>
                                  <input type="hidden" value="{{ Session::token() }}" name="_token">
                            </form>


                        </article>
                    @endforeach
                </div>

            </section>
            <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Edit Publication</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('edit') }}" method="POST">
                                <div class="form-group">
                                    <label for="post-body">Edit the Publication</label>
                                    <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var token = '{{ Session::token() }}';
                var urlEdit = '{{ route('edit') }}';

            </script>
@endsection

