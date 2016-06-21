@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('movies.voir') }}">Voir de films</a></li>
@endsection

@section('content')
  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Voir mes films</h1>
        </div>
      </div>
    </div>


@endsection
