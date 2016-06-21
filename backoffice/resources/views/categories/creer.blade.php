@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('categories.creer') }}">Creer mes categories</a></li>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Creer mes categories</h1>
      </div>
    </div>
  </div>

@endsection
