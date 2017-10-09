@extends('layouts.default_co')
@section('title',"Accueil")
@section('content')
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication"> <!-- Colonne publication -->
  <div class="container-fluid request-write">
    <h2 class="title-request">Ma publication</h2>
    <form class="form-horizontal form-request" method="post" action="/home">
      {{ csrf_field() }}
      <div class="form-group">
        <input type="text" class="input-titre" name="titre" required="10" placeholder="Entrez votre titre">
        <textarea name="requete" class="ameliorer" placeholder="Entrez votre message"></textarea>
      </div>
      <div class="request-button">
        <input type="submit" class="btn btn-primary" value="Envoyer">
      </div>
    </form>
  </div>
<!-- DIV social object -->
@foreach($posts as $post)
<div class="container-fluide social-object1">
  
  
  <div class="media post">
    <span class="social-button">
    
    {{-- <p>{{$likes->content}} aime ce post</p> --}}

  <form method="get" action="/modif_post/{{$post->id}}">
    <input type="submit" value="Modifier" class="btn btn-primary">
  </form>  
  </span>
    <div class="media-left">
     <img src="images/avatar1.jpg" class="media-object" style="width:45px" alt="avatar publication">
   </div>
   <div class="media-body">
     <h4 class="media-heading">{{ Auth::user()->name }}<small><i>Posté le {{$post->date}}</i></small></h4>
     <h1 class="titre-post">{{$post->title}}</h1>
     <p class="post-contenu">{{$post->content}}</p>
     <!-- media object -->
     <div class="media">
      <div class="media-body">
        @foreach( $post->comments as $comment)
          <hr class="trait">
          <h4 class="media-heading">{{ Auth::user()->name }}<small><i> Posté le {{$comment->date}}</i></small></h4>
          <p class="post-contenu">{{$comment->content}}</p>
          <form method="get" action="/commentaire/{{$comment->id}}">
            <input value="Modifier" type="submit" class="btn btn-commentaire">
          </form>  
            <form method="post" action="/home/2/{{$comment->id}}">  
              {{ csrf_field() }}
              <input value="Supprimer" type="submit" class="btn btn-commentaire">
              <input type="hidden" name="_method" value="delete" >
            </form> 
          @endforeach
        </div>
      </div>
  </div>

          <form method="post" action="/home/3/{{$post->id}}">
            {{ csrf_field() }}
            <input type="hidden" name="postID" value="{{$post->id}}">
          <div class="request-button">
            <input type="submit" name="like" value="J'aime !" class="btn btn-primary">
          </div>
          </form>
</div>
<div class="container-fluid request-bloc ">
  <h2 class="title-request title-reponse">Ma réponse</h2>
  <span>
    <form class="form-horizontal form-request" method="post" action="/home/1/{{$post->id}}">
      {{ csrf_field() }}
      <input type="hidden" name="postID" value="{{$post->id}}">
      <div class="form-group">
        <textarea name="commenter" class="ameliorer"></textarea>
      </div>
      <div class="request-button">
        <input type="submit" value="Envoyer" class="btn btn-primary">
      </div>
    </form>
    
  </span>
</div>
</div>
@endforeach <!-- Fin foreach POST-->
</div> <!-- Fin bloc publication -->


@endsection
