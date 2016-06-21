
@extends('layout')
{{-- ===============================HEAD================================= --}}
  @section('titrePage')
    @parent - Concept

  @endsection

  @section('metadesc')
    Description du concept
  @endsection

  @section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/concept.css') }}" media="screen" title="no title" charset="utf-8">
  @endsection

  {{-- ===============================BODY================================= --}}


  @section('filArianne')
    @parent
    <li class="active"><a href="{{ route('concept') }}">Concept</a></li>
  @endsection

  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Concept</h1>
        </div>
      </div>
    </div>
  @endsection









  @section('js')
    @parent
    <script src="{{ asset('js/concept.js') }}" charset="utf-8"></script>
  @endsection
