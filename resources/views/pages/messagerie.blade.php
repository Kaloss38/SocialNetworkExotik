 <!-- Fin header -->
 <!-- CONTENU -->
 @extends('layouts.default_co')
 @section('title', 'messagerie')
 @section('content')

 <!--fin menu gauche -->			


 <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication bloc-msg background-messagerie"> <!-- Bloc publication -->         
   <!-- Media top -->
<form action="/create/messagerie" method="get">
  <div class="btn-group">    
      <button type="submit" class="btn btn-msg-create">Nouvelle conversation</button>
    </form>
    <div class="btn-group">
      <button type="button" class="btn btn-msg-create dropdown-toggle" data-toggle="dropdown">Paramètres <span class="glyphicon glyphicon-cog"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Supprimer la conversation</a></li>
        <li><a href="#">Archiver</a></li>                 
      </ul>
    </div>
  </div>

  <h3>Ma messagerie</h3>
  <div class="media">

    <div class="media-body">
      <div class="list-group">
      @foreach($chats as $chat)
      @foreach($chat->chatrooms as $chatroom)
        
          <a href="/messagerie/{{ $chatroom->id }}" class="list-group-item liste-chat">{{ $chatroom->Name }}</a>
        
      @endforeach
      @endforeach 
      </div> 

    </div>
  </div>



</div> <!-- Fin bloc publication -->

@endsection