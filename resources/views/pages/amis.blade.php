@extends('layouts.default_co')
@section('title', "Mes amis")
@section('content')
		<!-- CONTENU -->
		
			<div class="container-fluide">
				
				<!-- Fin menu latéral gauche -->		
								
		
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication bloc-friend"> <!-- Bloc publication -->

                    <!--formulaire mes amis-->
						<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifForm(this)">
						<h3>MES AMIS</h3>

						<div class="form-group">
              				<input type="search" class="input-sm form-control search-friend" placeholder="Rechercher un ami" name="name">
                            <div class="btn-envoyer">
                                   <input type="submit" name="submit" class="btn btn-primary" value="chercher un amis">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                 </div>
            			</div>
                        </form>
                <!--fin de formulaire mes amis-->

						<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar3_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Rick Grimes</a>
						<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar1_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Bart Simpson</a>
				    	<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar4_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Jacqueline 2.0</a>
						<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar5_messagerie.png" alt="#" class="img-circle" width="50" height="50"> The Bulldog</a>
						<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar3_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Rick Grimes</a>
						<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar1_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Bart Simpson</a>
				    	<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar4_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Jacqueline 2.0</a>
						<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar5_messagerie.png" alt="#" class="img-circle" width="50" height="50"> The Bulldog</a>
						<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar3_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Rick Grimes</a>
						<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar1_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Bart Simpson</a>
				    	<a href="profil_amis.html" class="list-group-item"><img src="/images/avatar4_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Jacqueline 2.0</a>
						<a href="#" class="list-group-item"><img src="/images/avatar5_messagerie.png" alt="#" class="img-circle" width="50" height="50"> The Bulldog</a>
						<a href="#" class="list-group-item"><img src="/images/avatar3_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Rick Grimes</a>
						<a href="#" class="list-group-item"><img src="/images/avatar1_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Bart Simpson</a>
				    	<a href="#" class="list-group-item"><img src="/images/avatar4_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Jacqueline 2.0</a>
						<a href="#" class="list-group-item"><img src="/images/avatar5_messagerie.png" alt="#" class="img-circle" width="50" height="50"> The Bulldog</a>
						<a href="#" class="list-group-item"><img src="/images/avatar3_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Rick Grimes</a>
						<a href="#" class="list-group-item"><img src="/images/avatar1_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Bart Simpson</a>
				    	<a href="#" class="list-group-item"><img src="/images/avatar4_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Jacqueline 2.0</a>
						<a href="#" class="list-group-item"><img src="/images/avatar5_messagerie.png" alt="#" class="img-circle" width="50" height="50"> The Bulldog</a>
						<a href="#" class="list-group-item"><img src="/images/avatar3_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Rick Grimes</a>
						<a href="#" class="list-group-item"><img src="/images/avatar1_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Bart Simpson</a>
				    	<a href="#" class="list-group-item"><img src="/images/avatar4_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Jacqueline 2.0</a>
						<a href="#" class="list-group-item"><img src="/images/avatar5_messagerie.png" alt="#" class="img-circle" width="50" height="50"> The Bulldog</a>
						<a href="#" class="list-group-item"><img src="/images/avatar3_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Rick Grimes</a>
						<a href="#" class="list-group-item"><img src="/images/avatar1_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Bart Simpson</a>
				    	<a href="#" class="list-group-item"><img src="/images/avatar4_messagerie.png" alt="#" class="img-circle" width="50" height="50"> Jacqueline 2.0</a>
						<a href="#" class="list-group-item"><img src="/images/avatar5_messagerie.png" alt="#" class="img-circle" width="50" height="50"> The Bulldog</a>
					</div> <!-- Fin bloc publication -->
@endsection
			