@extends('layouts.default_co')
@section('title','parametre')
@section('content')

			
		

				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 publication"> <!-- Bloc publication -->
					
				<div class="media">
  					<div class="media-left media-middle">
    					<img src="images/css3.png" class="img-circle" style="width:60px" alt="logo css3">
  					</div>
  					 <div class="media-body">
    					<label for="css">css</label>
    					<input name type="text" class="form-control" id="css" placeholder="exprimez-vous!">
    					<p></p>
              <div class="btn-envoyer">
                                   <input type="submit" name="submit" class="btn btn-primary" value="envoyer">
                                        <span class="glyphicon glyphicon-ok"></span>
                                 </div>
  					</div>
				</div>
				<!-- Media bottom -->
				<div class="media">
  					<div class="media-left media-bottom">
    					<img src="images/java.png" class="img-circle" style="width:60px" alt="logo java">
  					</div>
  					<div class="media-body">
    					<label class="java">java</label>
    					<input type="text" class="form-control" id="java" placeholder="exprimez-vous!">
    					<p></p>
              <div class="btn-envoyer">
                                   <input type="submit" name="submit" class="btn btn-primary" value="envoyer">
                                        <span class="glyphicon glyphicon-ok"></span>
            
  						</div>
					</div>
          </div>
</form>
<!--formulaire rubriques-->

				
					</div> <!-- Fin bloc publication -->
			
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
		

      @endsection
     