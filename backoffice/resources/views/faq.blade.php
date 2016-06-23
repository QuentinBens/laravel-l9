
@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('faq') }}">FAQ</a></li>
@endsection

  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Faq</h1>
        </div>
      </div>
    </div>
  @endsection
