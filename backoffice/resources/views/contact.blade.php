
@extends('layout')

  @section('filArianne')
    @parent
    <li class="active"><a href="{{ route('contact') }}">Contact</a></li>
  @endsection

  @section('content')
    @section('content')
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contact</h1>
          </div>
        </div>
      </div>

  @endsection
