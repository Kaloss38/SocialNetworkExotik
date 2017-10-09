<!DOCTYPE html> <!-- entrée html -->
<html lang="fr">
	

	<head> <!-- en-tête du site -->
		<meta charset="utf-8"> <!-- encodage des caractères -->
		<title>WATIZIT - @yield('title')</title> 
		
		<!-- Appel de CSS et autres Frameworks -->
		<link rel="stylesheet" href="css/normalize.css"> <!-- Appel Normalize -->
		<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Appel Bootstrap -->
		<link rel="stylesheet" href="css/style.css"> <!-- Appel du CSS personnel -->
		<!-- FONT -->
		<link href="#" rel="stylesheet">
		<!-- meta -->
		<meta name="decription" content="">
		<meta name="author" content="">
		<!-- icône -->
		 <link rel="icon" type="image/png" href="images/favicon1.ico" />
		
	</head>
	<body id="body-home">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">WATIZIT</a>
			</div>
			<form id="connexionForm" method="#" class="form-inline" action="/accueil">
				<div class="form-group">
					<label for="email-co">E-mail:</label>
					<input type="email" name="email_co" class="form-control" id="email-co" placeholder="Votre mail">
				</div>
				<div class="form-group">
					<label for="pwd-connexion">Mot de passe:</label>
					<input type="password" name="pwd_connexion" class="form-control" id="pwd-connexion" placeholder="Votre mot de passe" style="width: 60%">
				</div>
				<div class="checkbox">
					<label><input type="checkbox">Se souvenir de moi</label>
				</div>
				<input type="submit" class="btn btn-default" value="Connexion">			
			</form>
		</div>
	</nav>
@yield('content') <!--Espace pour le contenu -->
	<footer>
		<div class="container-fluide footer-fluid">
			<div class="container footer-content">
				<ul>
					<li><a href="/apropos">A propos</a></li>
					<li><a href="/faq">F.A.Q</a></li>
					<li><a href="/contact">Contact</a></li>
					<li><a href="/conditions">Conditions d'utilisations</a></li>
				</ul>
			</div>
		</div>
	</footer>
		<!-- Appel script JS/JQUERY -->
	@yield('link')
	</body>
</html>