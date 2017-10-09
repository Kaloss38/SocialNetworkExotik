@section('title','creation_groupe')
 @extends('layouts.default_co')

		<!-- CONTENU -->
		
			@section('content')
			 <!-- Fin menu latéral gauche -->
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication"> <!-- Colonne publication -->
				<div class="container-fluide">

          <div class="jumbotron jumbotron-groupe">
            <h1>Création de groupe</h1> 
            <p>C'est ici que vous pouvez créer votre groupe de partage</p> 
          </div>

          <div class="container-fluide form-group-create">

            <form method="post" action="/creation_groupe">
              {{ csrf_field() }}

              <div class="form-group">
                <label for="name">Le nom de votre groupe</label>
                <input type="text" name="groupe_name" class="form-control" id="name">
              </div>

              <div class="form-group">
                <label for="surname">Le sujet de votre groupe</label>
                <input type="text" name="description" class="form-control" id="surname">
              </div>

              <div class="span1 request-button">
                <input type="submit" class="btn btn-primary" value="Je crée mon groupe">
              </div>

            </form>
          </div>
        </div>
		  </div> <!-- Fin bloc publication -->

			@endsection
