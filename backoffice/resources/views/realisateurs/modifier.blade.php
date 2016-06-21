@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('realisateurs.modifier') }}">Modifier mes realisateurs</a></li>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Modifier mes realisateurs</h1>
      </div>
    </div>
  </div>
@endsection
