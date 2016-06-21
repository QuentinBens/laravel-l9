@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('categories.index') }}">Liste de categories</a></li>
@endsection

@section('content')
  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>La liste de mes categories</h1>
        </div>
      </div>
    </div>


@endsection
