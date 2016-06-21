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
  </div>

@endsection
