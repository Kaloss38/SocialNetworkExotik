	@extends('layouts.app')
	@section('title', 'F.A.Q')
	@section('content')
	<div class="container-fluid">	<!-- Menu central row -->	
		<div class="col-md-12">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu-row-central"> 
				<div class="span1">
					<a href="apropos"><img src="images/f.png" class="img-circle" style="width:60px" alt="icone apropos">A Propos</a>
					<a href="conditions"><img src="images/c.png" class="img-circle" style="width:60px" alt="icone conditions">Conditions</a>
					<a href="contact"><img src="images/notepad.png" class="img-circle" style="width:60px" alt="contact">Contact</a>
					<a href="faq"><img src="images/faq.png" class="img-circle" style="width:60px" alt="faq">FAQ</a>
				</div><!-- fin central row -->	
			</div>
		</div>
	</div>
	<div class="container" id="faq">		<!-- menu central  -->	
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu-central"> 
			<div class="span2">
				<h1>FAQ</h1>
			</div>

			<form action="/faq" method="post">    
				{{ csrf_field() }}
				<!--formulaire questions-->
				<label class="nono">Indiquez votre questions</label>
				<input type="text" class="form-control" id="questions" placeholder="exprimez-vous!" name="content" onkeydown="verifierCaracteres(event); return false;" onblur="verifQuestions(this)" required="">
				<div class="btn-envoyer">
					<input type="submit" name="submit" class="btn btn-primary" value="envoyer">
					<span class="glyphicon glyphicon-ok"></span>
				</div>
				<div class="questions">
					<label class="questions">Questions frèquentes</label>


					@foreach($faqs as $faq)
					<ul>
						<li><a href="/faq/faq_detail/{{$faq->id}}"/>{{$faq->content}}</a></li>
					</ul>

					@endforeach


					
				</div>
			</form>
		</div>
	</div>
	@endsection    				