
@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('about') }}">About-us</a></li>
@endsection

  @section('content')
    @section('content')
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>About</h1>
          </div>
        </div>
      </div>

  @endsection
