@extends('layouts.default_co')
@section('title',"Accueil")
@section('content')
          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
  					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication"> <!-- Colonne publication -->
  						<div class="container-fluide request-bloc">
  						<h2>Rédiger une requête</h2>
  							<form class="form-horizontal form-request" method="post" action="/home/{{$posts->id}}">
                  <input type="hidden" name="_method" value="put" />
  								{{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" name="titre" value="{{$posts->title}}">
  									<input type="text" name="requete" value="{{$posts->content}}" class="ameliorer">
  								</div>
  							  <div class="request-button">
                    <input type="submit" value="Envoyer" class="btn btn-primary">
                </div>
                </form>
                <form method="post" action="/home/destroy/{{$posts->id}}">
                {{ csrf_field() }}
                  <input type="hidden" name="_method" value="put" />
                <div class="request-button">
                  <input type="submit" name="delete" value="Supprimer" class="btn btn-primary">
                </div>
                </form>
  							</div>

  						
  					
  					</div> <!-- Fin bloc publication -->
          
@endsection
  	