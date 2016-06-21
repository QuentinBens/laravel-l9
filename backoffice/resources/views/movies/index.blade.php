@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('movies.index') }}">Liste de films</a></li>
@endsection

@section('content')
  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h1 class="text-primary">Liste de Film</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">  ​
            <table class="table table-hover bgTable">
              <thead>
                <tr class="active">
                  <th>ID's</th>
                  <th>Titres</th>
                  <th>Images</th>
                  <th class ="tileWidth">Synopsis</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($movies as $element)

                <tr>
                  <td>{{$element->id}}</td>
                  <td>{{$element->title}}</td>
                  <td> <img src="{{$element->image}}" height="120px" width="80px"/> </td>
                  <td>{{ strip_tags($element->synopsis) }}</td>
                  <td>
                      <a href="#"><span class="label label-info">Créer</span></a>
                      <a href="#"><span class="label label-success">Voir</span></a>
                      <a href="#"><span class="label label-danger">Supprimer</span></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


@endsection
