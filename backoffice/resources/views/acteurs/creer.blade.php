@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('acteurs.creer') }}">Creer mes acteurs</a></li>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Créer un Acteur</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" action="{{ route('acteurs.store') }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
              <label for="inputFirstname" class="col-lg-2 control-label">Firstname</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="firstname" id="inputFirstname" placeholder="Firstname">
                </div>
              </div>
              <div class="form-group">
              <label for="inputLastname" class="col-lg-2 control-label">Lastname</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="lastname" id="inputLastname" placeholder="Lastname">
                </div>
              </div>
              <div class="form-group">
              <label for="inputDob" class="col-lg-2 control-label">Date de naissance</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="dob" id="inputDob" placeholder="YYYY-mm-dd">
                </div>
              </div>
              <div class="form-group">
              <label for="inputCity" class="col-lg-2 control-label">Ville</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="city" id="inputCity" placeholder="La ville">
                </div>
              </div>
              <div class="form-group">
                <label for="textBiography" class="col-lg-2 control-label">Briography</label>
                <div class="col-lg-10">
                  <textarea class="form-control" rows="3" name="biography" id="textBiography"></textarea>
                  <span class="help-block">Ici la Briographie du Réalisateur</span>
                </div>
              </div>
              <div class="form-group">
                <label for="inputImg" class="col-lg-2 control-label">Image</label>
                <div class="col-lg-10">
                  <input class="form-control" name="image" id="inputImg" placeholder="Lien Image">
                </div>
              </div>
              <div class="form-group">
                <label for="inputNationality" class="col-lg-2 control-label">Nationalité</label>
                <div class="col-lg-10">
                  <input class="form-control" name="nationality" id="inputNationality" placeholder="La nationalité">
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
