 <!-- Fin header -->
		<!-- CONTENU -->
		@extends('layouts.default_co')
    @section('title', 'messagerie')
    @section('content')

			<!--fin menu gauche -->			
								
		
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication bloc-msg"> <!-- Bloc publication -->         
											<!-- Media top -->
						<h3>Ma conversation avec 2 amis</h3>
            <div class="btn-group">
            <button type="button" class="btn btn-primary">Ajouter un ami 
              <span class="glyphicon glyphicon-user"></span>
            </button>
            <button type="button" class="btn btn-primary">Nouvelle conversation</button>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Paramètres <span class="glyphicon glyphicon-cog"></span></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Supprimer la conversation</a></li>
                  <li><a href="#">Archiver</a></li>                 
              </ul>
            </div>
          </div>
            <div class="search-msg">
            <input type="search" class="input-sm form-control" placeholder="Rechercher dans la conversation">
            <div class="btn-search-msg">
              <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
            </div>
          </div>

          
          <div class="media">
            <div class="media-left media-middle">
              <a href="#"><img src="{{ Auth::user()->photoID }}" alt="#" class="media-object" style="width:60px"></a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">{{ Auth::user()->name }}</h4>
              <p>{{ $message->Content }}</p>
            </div>
          </div>
            
				
				<form method="post" action="/messagerie">
          {{ csrf_field() }}
    				<div class="form-group">
              <div class="zone msg">
      					<label for="comment">Votre message:</label>
      					<textarea name="Content" class="form-control" rows="5" id="comment" placeholder="Ecrivez votre message..."></textarea>
              </div>  
      					<div class="btn-msg">     					
      						<button type="button" class="btn btn-warning">Joindre un fichier
      							<span class="glyphicon glyphicon-paperclip"></span>
      						</button>
      						<button type="submit" class="btn btn-primary">Envoyer</button>
      					</div>
   				 	</div>
 		 		</form>


		</div> <!-- Fin bloc publication -->
	
@endsection