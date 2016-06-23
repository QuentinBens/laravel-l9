@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('categories.creer') }}">Creer mes categories</a></li>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Créer une catégorie</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" action="{{ route('categories.store') }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
              <label for="inputTitre" class="col-lg-2 control-label">Titre</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="titre" id="inputTitre" placeholder="Titre">
                </div>
              </div>
              <div class="form-group">
                <label for="textDescription" class="col-lg-2 control-label">Description</label>
                <div class="col-lg-10">
                  <textarea class="form-control" rows="3" name="description" id="textDescription"></textarea>
                  <span class="help-block">Ici la description de votre catégorie</span>
                </div>
              </div>
              <div class="form-group">
                <label for="inputImg" class="col-lg-2 control-label">Image</label>
                <div class="col-lg-10">
                  <input class="form-control" name="image" id="inputImg" placeholder="Lien Image">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
