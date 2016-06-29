@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('movies.creer') }}">Creer mes films</a></li>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Creer mes films</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Créer un film</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" action="{{ route('movies.store') }}" method="post">
              {{ csrf_field() }}
              @foreach ($errors->all() as $element)
                <div class="alert alert-danger alert-dismissible">{{ $element }}</div>
              @endforeach
              <div class="form-group">
              <label for="inputTitre" class="col-lg-2 control-label">Titre</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control"  name="titre" value="sqlkjhdfùlmqsdjf" id="inputTitre" placeholder="Titre">
                </div>
              </div>
              <div class="form-group">
                <label for="textSynopsis" class="col-lg-2 control-label">Synopsis</label>
                <div class="col-lg-10">
                  <textarea class="form-control" name="synopsis" rows="3" id="textSynopsis"></textarea>
                  <span class="help-block">Ici le synopsis de votre film</span>
                </div>
              </div>
              <div class="form-group">
                <label for="textDescription" class="col-lg-2 control-label">Description</label>
                <div class="col-lg-10">
                  <textarea class="form-control" rows="3" name="description" id="textDescription"></textarea>
                  <span class="help-block">Ici la description de votre film</span>
                </div>
              </div>
              <div class="form-group">
                <label for="inputImg" class="col-lg-2 control-label">Image</label>
                <div class="col-lg-10">
                  <input class="form-control" name="image" id="inputImg" placeholder="Lien Image">
                </div>
              </div>
              <div class="form-group">
                <label for="inputTrailer" class="col-lg-2 control-label">Bande d'annonce</label>
                <div class="col-lg-10">
                  <input class="form-control" id="inputTrailer" name="trailer" type="text" placeholder="Lien Trailer">
                </div>
              </div>
              <div class="form-group">
                <label for="inputDob" class="col-lg-2 control-label">Date de Sortie</label>
                <div class="col-lg-10">
                  <input class="form-control" id="inputDob" name="daterelease" type="text" placeholder="dd/mm/YYY">
                </div>
              </div>
              <div class="form-group">
                <label for="inputDuree" class="col-lg-2 control-label">Durée</label>
                <div class="col-lg-10">
                  <input class="form-control" id="inputDuree" name="duree" type="text" placeholder="en Nb d'heure">
                </div>
              </div>
              <div class="form-group">
                <label for="inputBudget" class="col-lg-2 control-label">Budget</label>
                <div class="col-lg-10">
                  <input class="form-control" id="inputBudget" name="budget" type="text" placeholder="en €">
                </div>
              </div>
              <div class="form-group">
                <label for="select" class="col-lg-2 control-label">BO</label>
                <div class="col-lg-10">
                  <select name="bo" class="form-control" id="select">
                    <option value="VO">VO</option>
                    <option value="VF">VF</option>
                    <option value="VOSTFR">VOSTFR</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Langues</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="languages" id="optionsRadios1" value="fr">
                      Français
                    </label>
                    <label>
                      <input type="radio" name="languages" id="optionsRadios2" value="en">
                      Anglais
                    </label>
                    <label>
                      <input type="radio" name="languages" id="optionsRadios2" value="it">
                      Italien
                    </label>
                    <label>
                      <input type="radio" name="languages" id="optionsRadios2" value="es">
                      Espagnol
                    </label>
                  </div>
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
