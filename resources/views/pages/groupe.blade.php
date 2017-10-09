@extends('layouts.default_co')
@section('title','groupe')
@section('content')

<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication"> <!-- Colonne publication -->
  <div class="container-fluide">
    <div class="jumbotron jumbotron-groupe">

      <h1>{{ $groupe->name }}</h1> 
      <p>{{ $groupe->description }}</p>  

      <form method="get" action="/groupe/{{ $groupe->id }}/edit">
        <button type="submit" class="btn btn-primary">Modifier</button>
      </form> 
      

    </div>
  </div>

  <div class="container-fluide request-bloc">
    <h2>Rédiger une requête</h2>
    <form class="form-horizontal form-request" method="#" action="#">
      <div class="form-group">
        <textarea name="ameliorer" class="ameliorer"></textarea>
      </div>
    </form>
    <div class="span1 request-button">
      <button type="button" class="btn btn-primary">Importer photo/vidéo</button>
      <button type="button" class="btn btn-primary">Envoyer</button>
    </div>
  </div>

  <div class="container-fluide social-object1">
    <div class="media">

      <div class="media-left">
        <img src="images/avatar1.jpg" class="media-object" style="width:45px" alt="avatar-publication">
      </div>

      <div class="media-body">
        <h4 class="media-heading">Zoro Roronoa<small><i>Posté le 20 Octobre, 2016</i></small></h4>
        <p>Bonjour, j'étais sur mon bateau quand j'ai rencontré un problème d'ordre informatique, quelqu'un peut m'aider ? :)</p>
          <div class="media">

            <div class="media-left">
              <img src="images/avatar2.jpg" class="media-object" style="width:45px" alt="avatar-publication">
            </div>

            <div class="media-body">
              <h4 class="media-heading">Batman (the)<small><i>Posté le 20 Octobre, 2016</i></small></h4>
              <p>Huuum, passe à la batcave ce soir qu'on regarde tous ça sur mon bat-ordinateur, on prendra un bat-café</p>
              <div class="media">
                <div class="media-left">
                  <img src="images/avatar3.jpg" class="media-object" style="width:45px" alt="avatar-publication">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Groot <small><i>Posté le 20 Octobre, 2016</i></small></h4>
                  <p>Je s'appelle Groot</p>
                </div>
              </div>              
            </div>

            <div class="media">
                <div class="media-left">
                <img src="images/avatar4.jpg" class="media-object" style="width:45px" alt="avatar-publication">
              </div>
              <div class="media-body">
                <h4 class="media-heading">Arnold Schwarzenegger<small><i>Posté le 20 Octobre, 2016</i></small></h4>
                <p>Ya ya ya, il y a effectivement un problème de code, je reviendrai !</p>
              </div>
            </div>
          </div>
        </div>

      <div class="media">
        <div class="media-left">
          <img src="images/avatar5.jpg" class="media-object" style="width:45px" alt="avatar-publication">
        </div>
        <div class="media-body">
          <h4 class="media-heading">John Rambo<small><i>Posté le 20 Octobre, 2016</i></small></h4>
          <p>C'est pas mon problème colonel.</p>
        </div>
      </div>
      <div class="container-fluide request-bloc">
        <span class="social-button">
          <button type="button" class="btn btn-primary">Commenter</button>
          <button type="button" class="btn btn-primary">j'aime</button>
          <button type="button" class="btn btn-primary">Partager</button>
        </span>
        <h2>Ma réponse</h2>
        <form class="form-horizontal form-request" method="#" action="#">
          <div class="form-group">
            <textarea name="ameliorer" class="ameliorer"></textarea>
          </div>
        </form>
        <div class="request-button">
          <button type="button" class="btn btn-primary">Envoyer</button>
        </div>
      </div>
    </div>
  </div>  					
</div>

  <!-- Fin bloc publication -->



  @endsection