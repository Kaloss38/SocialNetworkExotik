@section('title','creation_groupe')
@extends('layouts.default_co')

<!-- CONTENU -->

@section('content')
<!-- Fin menu latéral gauche -->
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 publication"> <!-- Colonne publication -->
  <div class="container-fluide">

    <div class="container-fluide form-group-create">

      <form method="post" action="/groupe/{{ $groupe->id }}">
        <input type="hidden" name="_method" value="put" />
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">Modifier le nom du groupe</label>
          <input type="text" name="groupe_name" class="form-control" id="name" value="{{ $groupe->name }}">
        </div>

        <div class="form-group">
          <label for="surname">Modifier la description du groupe du groupe</label>
          <input type="text" name="description" class="form-control" id="surname" value="{{ $groupe->description }}">
        </div>

        <div class="span1 request-button">
          <input type="submit" class="btn btn-primary" value="Modifier">
        </div>

      </form>
      <form method="post" action="/groupe/{{ $groupe->id }}">
        <input type="hidden" name="_method" value="delete"/>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Supprimer</button>
      </form>
    </div>
  </div>
</div> <!-- Fin bloc publication -->

@endsection
