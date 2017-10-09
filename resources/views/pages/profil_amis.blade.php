 <!-- Fin header -->
		<!-- CONTENU -->
		@extends('layouts.default_co')
    @section('title','profil_amis')
    @section('content')
			

       <!-- Fin menu latéral gauche --> <!-- Fin menu latéral gauche -->
			
		
		
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication"> <!-- Bloc publication -->
						<!-- Media top -->
				

				<div class="container-fluide description col-xs-12 col-sm-12 col-md-12 col-lg-12">

				<nav class="navbar navbar-02">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand profila" href="#">profil</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index-online.html">Journal</a></li>
      <li class="active"><a href="friend.html">Amis</a></li>
      <li><a href="mon-contenu.html">contenu</a></li>
      <li><a href="parametres.html">Info</a></li> 
     
      <li><a href="apropos.html">Plus</a></li> 
    </ul>
  </div>
</nav>






<!-- Media middle -->

  <!-- photo profil nom prenom -->
    <hr>

<div class="container-fluid  haut-description ">
        <div class="media">
  					<div class="media-right media-top">
    					
  				<img src="images/profil_photo.jpg" class="img-circle profilo" alt="profil_image" width="150" height="150">
            </div>
  					<div class="media-body nom_p">
    					<h4 class="media-heading">NOM-PRENOM</h4>
    					<p>jean-claude chavez</p>
  					</div>
				</div>
				
  <!-- fin de photo profil nom prenom -->

  <!-- description -->
				<div class="media">
  					
    					   <h4 class="media-heading">AGE</h4>
    					 <p>34ans</p>
  				      
                <h4 class="media-heading">SECTEUR D'ACTIVITE</h4>
      					<p>ruby'php'css....</p>
    				
      					<h4 class="media-heading">DESCRIPTION</h4>
      					<p>je maee suis machin chose jaime les fleurs et  le café ......</p>
    					
  			
          </div>
  		</div>
  </div>
<!-- boite dialogue -->

<div class="container-fluid dialogue">
<div class="col-lg-12 publication">
  
  <hr>

  <form>
    
  
     <button type="submit" class="glyphicon glyphicon-plus btn btn-primary pull-right" id="btn-joindre"> Ajouter</button>
      <button type="submit" class="glyphicon glyphicon-envelope btn btn-primary pull-right" id="btn-joindre"> Contacter</button>
   
  </form>
  
  <hr>
</div>

</div>




  <div class= "container-fluid reseau-sociale">

        <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.example.com/page.html&layout=box_count&show_faces=true&width=65&action=like&font=arial&colorscheme=light&height=65" 
          scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:60px; height:60px; margin-top:0px;" allowTransparency="true"></iframe>

        <a href="http://twitter.com/share" class="twitter-share-button" 
          data-count="vertical" data-via="InfoWebMaster">Tweet</a>
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    

  </div>


<!-- boite commentaire -->
<div class="container-fluid poste">
  <ul class="media-list">
    <li class="media thumbnail">
      <a class="pull-left" href="#">
        <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="avatar contact">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Suggestion</h4>
        <p>Je pense souhaitable d'interdire les balises br dans le code html !</p>
        <div class="media thumbnail">
          <a class="pull-left" href="#">
            <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="avatar contact">
          </a>
          <div class="media-body">
            <h4 class="media-heading">balise inutile</h4>
            <p>Tu délires complètement, ce sont des balises tres utile.</p>
            <div class="media thumbnail">
              <a class="pull-left" href="#">
                <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="avatar contact">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Quel délire !</h4>
                <p>C'est toi qui délires !</p>
              </div>
            </div>
          </div>
          <div class="media">
            <a class="pull-left" href="#">
              <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="avatar contact">
            </a>
            <div class="media-body">
              <h4 class="media-heading">Quel courage !</h4>
              <p>J'aimerais te voir face à mon code toi !</p>
            </div>
          </div>
        </div>
        <div class="media thumbnail">
          <a class="pull-left" href="#">
            <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="avatar contact">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Un peu de calme</h4>
            <p>Je suis favorable à la préservation de la balise br.</p>
            <div class="media thumbnail">
              <a class="pull-left" href="#">
                <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="avatar contact">
              </a>
              <div class="media-body">
                <h4 class="media-heading">trop cool!</h4>
                <p>toute facon on peut la remplacer par p</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>


<!-- bar de partage et de j'aime -->
<div class= "container-fluid bouton-repondre">




  <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> J'aime</a> 
  <a href="#"><span class="glyphicon glyphicon-comment"></span> Commenter</a>  
  <a href="#"><span class="glyphicon glyphicon-share-alt"></span> Partager</a>
  <a href="#"><span class="glyphicon glyphicon-cog"></span></a>



</div>
<!-- bar de partage et de j'aime -->



<ul class="media-list">
    <li class="media thumbnail">
      <a class="pull-left" href="#">
        <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Suggestion</h4>
        <p>Je pense souhaitable d'interdire les balises br dans le code html !</p>
        <div class="media thumbnail">
          <a class="pull-left" href="#">
            <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="">
          </a>
          <div class="media-body">
            <h4 class="media-heading">balise inutile</h4>
            <p>Tu délires complètement, ce sont des balises tres utile.</p>
            <div class="media thumbnail">
              <a class="pull-left" href="#">
                <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Quel délire !</h4>
                <p>C'est toi qui délires !</p>
              </div>
            </div>
          </div>
          <div class="media">
            <a class="pull-left" href="#">
              <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="">
            </a>
            <div class="media-body">
              <h4 class="media-heading">Quel courage !</h4>
              <p>J'aimerais te voir face à mon code toi !</p>
            </div>
          </div>
        </div>
        <div class="media thumbnail">
          <a class="pull-left" href="#">
            <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Un peu de calme</h4>
            <p>Je suis favorable à la préservation de la balise br.</p>
            <div class="media thumbnail">
              <a class="pull-left" href="#">
                <img class="media-object" src="images/profil_photo.jpg" style="width:40px" alt="">
              </a>
              <div class="media-body">
                <h4 class="media-heading">trop cool!</h4>
                <p>toute facon on peut la remplacer par p</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>


<!-- bar de partage et de j'aime -->
    <div class= "container-fluid bouton-repondre">




      <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> J'aime</a> 
      <a href="#"><span class="glyphicon glyphicon-comment"></span> Commenter</a>  
      <a href="#"><span class="glyphicon glyphicon-share-alt"></span> Partager</a>
      <a href="#"><span class="glyphicon glyphicon-cog"></span></a>
      
                    

      
    </div>

  </div>
</div>
       
	@endsection		
 <!-- Fin bloc publication -->




        


		<!-- fin menu droite -->
				






