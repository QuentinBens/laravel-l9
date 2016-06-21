@extends('layout')
{{-- ===============================HEAD================================= --}}

@section('name')
  @parent - Il parlent de nous

@endsection

@section('metadesc')
  Description de ils parlent de nous
@endsection

{{-- ===============================BODY================================= --}}
@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('presse') }}">Ils parlent de nous</a></li>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Kit de presse</h1>
      </div>
    </div>
  </div>
@endsection



@section('js')
  @parent
  <script src="{{ asset('js/concept.js') }}" charset="utf-8"></script>
@endsection
