@extends('layouts.default_co')

@section('title', 'messagerie')

@section('content')

<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication bloc-msg background-messagerie"> <!-- Bloc publication -->         
  	<h3>Ma messagerie</h3>
  	<h3>Nouvelle conversation</h3>
	
	<form action="/store/chatroom/{{ Auth::user()->id }}" method="post">
  {{ csrf_field() }}

    <label for="title">Nom de la conversation</label>
	  <input type="text" name="title" class="form-control" id="title">
    
    <label for="sel1">Selectionner un nom dans la liste:</label>
    <select class="form-control" id="sel1" name="user_id">
        

  	@foreach($friends1 as $friend1) 

      <option value="{{ $friend1->user2->id }}">{{ $friend1->user2->name }}</option>
    
  	@endforeach
  	@foreach($friends2 as $friend2)

      <option value="{{ $friend2->user1->id }}">{{ $friend2->user1->name }}</option>      
	  
  	@endforeach

    </select>      
    
    <button type="submit" class="btn btn-msg-create">Discuter</button>
    
    </form>
          
				
				

</div>
	
@endsection