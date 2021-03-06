@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('realisateurs.creer') }}">Creer mes realisateurs</a></li>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Créer un Réalisateurs</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('realisateurs.store') }}" method="post">
              {{ csrf_field() }}
              @foreach ($errors->all() as $element)
                <div class="alert alert-danger alert-dismissible">{{ $element }}</div>
              @endforeach
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
                  <input type="text" class="form-control" name="dob" id="inputDob" placeholder="dd/mm/YYYY">
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
                  <input class="form-control" type="file" name="image" accept="image/*" id="inputImg" >
                </div>
              </div>
              <div class="form-group">
                <label for="inputNote" class="col-lg-2 control-label">Note</label>
                <div class="col-lg-10">
                  <input class="form-control" name="note" id="inputNote" placeholder="Note sur 5">
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
