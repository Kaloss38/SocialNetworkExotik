@extends('layouts.default_co')
@section('title', 'historique-perso')
@section('content')
			
		
		
				<div class="col-xs-0 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication bloc-histo-perso"> <!-- Bloc publication -->

					<div class="search-story">
						<input type="search" class="input-sm form-control" placeholder="Recherche">
                        <div class="btn-search-story">
              			   <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span>Chercher dans l'historique</button>
                        </div>  
              		</div>

					<h2>Mon historique</h2>

					<div class="container">
						<div class="row">
						    <nav class="col-xs-12 col-sm-2 col-md-2 col-lg-3" id="myScrollspy">
						      <ul class="nav nav-pills nav-stacked">
						        <li class="active"><a href="#section1">Octobre 2016</a></li>
						        <li><a href="#section2">Septembre 2016</a></li>
						        <li><a href="#section3">Août 2016</a></li>						      
						        <li><a href="#section4">Juillet 2016</a></li>
						        <li><a href="#section5">Juin 2016</a></li>	       						       
						      </ul>					
	    					</nav>
						    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
						      	<div id="section1">
						        	<h1>Octobre 2016</h1>
						        	<ul>
						        		<li>20/10/2016
						        			<ul>
						        				<li>Vous avez répondu à la publication de ....</li>
						        				<li>Vous avez aimé la publication de ....</li>
						        			</ul></li>
						        		<li>19/10/2016
						        			<ul>
						        				<li>Vous avez rejoint la conversation "Problème html5"</li>
						        			</ul> </li>
						        		</ul>
						      	</div>
						      	<div id="section2">
						        	<h1>Septembre 2016</h1>
						        	
						      	</div>
						      	<div id="section3">
						        	<h1>Août 2016</h1>
						        	
						      	</div>
						      	<div id="section4">
						        	<h1>Juillet 2016</h1>
						        	
						      	</div>
						      	<div id="section5">
						        	<h1>Juin 2016</h1>
						       		
						      	</div>
						    </div>
						</div>
					</div>
                    <div class="btn-delete-story">
                      <button type="button" class="btn btn-primary">Supprimer l'historique</button>
                    </div>
				</div>
        @endsection