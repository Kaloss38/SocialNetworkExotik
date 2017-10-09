 <!-- Fin header -->
		<!-- CONTENU -->
		@extends('layouts.default_co')
    @section('title', 'messagerie')
    @section('content')

			<!--fin menu gauche -->			
								
		
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication bloc-msg background-messagerie"> <!-- Bloc publication -->         
											<!-- Media top -->
						<h3>Ma messagerie</h3>
            <div class="btn-group">
            <button type="button" class="btn btn-msg-create">Ajouter un ami 
              <span class="glyphicon glyphicon-user"></span>
            </button>
            <button type="button" class="btn btn-msg-create">Nouvelle conversation</button>
            <div class="btn-group">
                <button type="button" class="btn btn-msg-create dropdown-toggle" data-toggle="dropdown">
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
              <button type="submit" class="btn btn-msg-create btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
            </div>
          </div>
          
          @foreach( $names as $name )
            
                  <h3>{{ $name->Name }}</h3>

          @endforeach
        
        @foreach($messages as $message)
        
        
         
        <div class="media">
            <div class="media-left media-top">
              <a href="profil.html"><img src="{{ $message->user->url_photo_profil }}" alt="#" class="media-object" style="width:60px"></a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">{{ $message->user->name }} </h4>
              <p>{{ $message->Content }}</p>
            </div>
        </div>      
                  
        <form method="post" action="/messagerie/{{ $message->chatroom_ID }}">
        @endforeach        
          {{ csrf_field() }}
    				<div class="form-group">
              <div class="zone msg">
      					<label for="comment">Votre message:</label>
      					<textarea name="Content" class="form-control" rows="5" id="comment" placeholder="Ecrivez votre message..."></textarea>
              </div>  
      					<div>     					
      						<!-- <button type="button" class="btn btn-warning">Joindre un fichier
                    <span class="glyphicon glyphicon-paperclip"></span>
                  </button> -->
      						<button type="submit" class="btn btn-msg-create">Envoyer</button>
      					</div>
   				 	</div>
 		 		</form>
        

		</div> <!-- Fin bloc publication -->
	
@endsection