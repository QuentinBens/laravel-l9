 class ="title"@extends('layout')

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
                <th class ="id">ID's</th>
                <th class ="title">Titres</th>
                <th class ="img">Images</th>
                <th class ="synopsis">Synopsis</th>
                <th class ="act">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($movies as $element)

              <tr>
                <td class ="id">{{$element->id}}</td>
                <td class ="title">{{$element->title}}</td>
                <td class ="img"> <img src="{{$element->image}}" height="120px" width="80px"/> </td>
                <td class ="synopsis">{{ strip_tags(str_limit($element->synopsis, 300)) }}</td>
                <td class ="edit">
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



@endsection
