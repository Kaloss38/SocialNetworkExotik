@extends('layouts.default_co')
@section('title', 'Paramètres')
@section('content')
                  

                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication form-para"> <!-- Bloc publication -->

					<h4 class="titre-para">Paramètres généraux du compte</h4>
					
                    
				
                       
                         
                     
						<form method="post" action="/Modif_parametre/{{Auth::id()}}" id="parametreForm">
                          <input type="hidden" name="_method" value="put" />

                               {{ csrf_field() }}
                       
                       
                    <div class="container-fluide">

                        <h2 class="titre-para">Gérer mes informations</h2>
                        <div class="modif-photo-profil">

                        @foreach($zoros as $zoro)
                            <img src="{{$zoro->url_photo_profil}}"  class=" profilo img-thumbnail img-responsive"  alt="profil_image" width="40%">

                        </div>
                            

                               




                          
                            <div class="col-xs-0 col-sm-2 col-md-2 col-lg-2"></div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 first-ligne-form"><!-- Option gauche -->
                   
                                <div class="form-group"> 
                                    <label for="photos">photo de profil</label>
                               

                                    <input type="text" class="form-control" id="photos" name="url_photo" placeholder="Modifier ma photo de profil" value= "{{$zoro->url_photo_profil}}">
                                    
                                </div> 
                               

                                
    							<div class="form-group"> 
    								<label for="name">Nom</label>
    								<input type="text" class="form-control" id="nom" name="last_name" placeholder="Modifier mon nom" value= "{{$zoro['last_name']}}">
    							</div>
                                <div class="form-group"> 
                                    <label for="prenom">Prénom</label>
                                    <input type="text" class="form-control" name="first_name" id="prenom"  value= "{{$zoro['first_name']}}"  placeholder="Modifier mon prénom">
                                </div>														
                                <div class="form-group"> 
                                    <label for="age">Date de naissance</label>
                                    <input type="text" readonly="readonly" class="form-control" name="birth_date" id="datepicker" value="{{$zoro['birth_date']}}" placeholder="AAAA/MM/JJ" required>
                                </div>
    							<div class="form-groupe">
    								<label for="activity">Secteur d'activité</label>
    								<input type="text" class="form-control" name="activite" id="activity" value= "{{$zoro['activite']}}"  placeholder="Modifier mon secteur d'activité">
    							</div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 second-ligne-form"><!-- Option droite -->   
    							<div class="form-group">
    								<label for="email">Adresse mail</label>
    								<input type="email"  readonly="readonly" class="form-control" id="email" name="email" value= "{{$zoro['email']}}" placeholder="Modifier mon adresse mail" required>
    							</div>
    							<div class="form-group">
    								<label for="telephone">Téléphone</label>
    								<input type="tel" class="form-control" name="tel" id="telephone" value= "{{$zoro['tel']}}" placeholder="Modifier mon numéro de téléphone">
    							</div>
    							<div class="form-group">
    								<label for="password">Mot de passe</label>
    								<input type="password" class="form-control" name="password" id="password"  placeholder="Nouveau mot de passe">
    							</div> 
    							<div class="form-group">
    								<label for="confirm-password">Confirmer le mot de passe</label>
    								<input type="password" class="form-control" name="conf_password" id="confirm-password" placeholder="Confirmer nouveau mot de passe">				
    							</div> 
                              

                            </div>                        
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><!-- Description -->
                                <div class="description-para">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" rows="7" name="description" id="description" placeholder="Modifier voter description">{{$zoro['description']}}</textarea>
@endforeach
                                </div>
                                 
                              
    							<div class="btn-modifier">
    								<input type="submit" name="agree" class="btn btn-default" value="Modifier">
    							 	
    							</div>
                            </div>
                        </form>                       				
					</div>
				</div>
            </div>    					
		</div>
      <!-- Fin bloc publication -->
			
	     
			@endsection

    @section('link')

 
  
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  <!--   <script src="/js/script.js"></script> 
    -->


    
 
    @endsection 