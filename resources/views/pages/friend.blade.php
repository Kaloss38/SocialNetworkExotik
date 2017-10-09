@extends('layouts.default_co')

@section('title', 'messagerie')

@section('content')

<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication bloc-msg">    

  	<h3>Mes amis</h3>

	<h3>La liste de tous mes amis</h3>
	<br> 	

  	@foreach($friends1 as $friend1)  		

  		<h3>{{ $friend1->user2->first_name }} {{ $friend1->user2->last_name }}</h3>

  	@endforeach

  	@foreach($friends2 as $friend2)

  		<h3>{{ $friend2->user1->first_name }} {{ $friend2->user1->last_name }}</h3>  	

  	@endforeach
	
</div>
	
@endsection