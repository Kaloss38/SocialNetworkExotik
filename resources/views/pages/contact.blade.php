@extends('layouts.app')	
@section('title','Contact')
@section('content')
<div class="container-fluid">		
	<div class="col-md-12">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu-row-central"> 
			<div class="span1">
				<a href="apropos"><img src="images/f.png" class="img-circle" style="width:60px" alt="icone apropos">A Propos</a>
				<a href="conditions"><img src="images/c.png" class="img-circle" style="width:60px" alt="icone conditions">Conditions</a>
				<a href="contact"><img src="images/notepad.png" class="img-circle" style="width:60px" alt="icone contact">Contact</a>
				<a href="faq"><img src="images/faq.png" class="img-circle" style="width:60px" alt="icone faq">FAQ</a>
			</div>
		</div>
	</div>
</div>
<div class="container">		
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu-central"> 
		<div class="span2">
			<h1>Contact</h1>
		</div>
		<div class="span3">
			<h4>Formulaire de contact</h4>
			<form>
				<div class="form-group">
					<label for="nom">votre nom:</label>
					<input type="text" class="form-control" id="nom" placeholder="name">
				</div>
				<div class="form-group">
					<label for="prénom">Votre prénom:</label>
					<input type="text" class="form-control" id="prénom" placeholder="first name">
				</div>
				<div class="form-group">
					<label for="demande">Type de demande:</label>
					<select name="motif-contact" class="form-control" id="demande">
						<option>sélectionez votre motif</option>
						<option value="1">publicité</option>
						<option value="2">forum/modération</option>
						<option value="4">Pseudo/compte</option>
						<option value="5">Partenariats/Concours</option>
						<option value="6">Communiqués de presse</option>
						<option value="7">Contacter la rédaction</option>
						<option value="8">Signaler un bug sur le site</option>
						<option value="9">Autres</option>
					</select>
				</div>
				<div class="form-group">
					<label for="phone">Téléphone</label>
					<input type="tel" class="form-control" id="phone" placeholder="tel">
				</div>
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" class="form-control" id="email-base" placeholder="email">
				</div>
				<div class="form-group">
					<label for="text">votre message:</label>
					<textarea type="text" class="form-control" id="text" placeholder="votre message"></textarea>
				</div>
				<div class="btn-envoyer">
					<button type="button" class="btn btn-primary">Envoyer
						<span class="glyphicon glyphicon-ok"></span>
					</button>
				</div>
			</form>
		</div>	
	</div>
</div>
@endsection	