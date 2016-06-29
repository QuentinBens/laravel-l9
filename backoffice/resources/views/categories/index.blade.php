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
      <div class="row">
        <div class="col-md-12">  ​
          <table class="table table-hover bgTable">
            <thead>
              <tr class="active">
                <th class ="id">ID's</th>
                <th class ="title">Titres</th>
                <th class ="img">Images</th>
                <th class ="desc">Description</th>
                <th class ="act">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $element)

              <tr>
                <td class ="id">{{$element->id}}</td>
                <td class ="title">{{$element->title}}</td>
                <td class ="img"> <img src="{{$element->image}}" height="120px" width="80px"/> </td>
                <td class ="desc">{{ strip_tags(str_limit($element->description, 300)) }}</td>
                <td class ="act">
                    <a href="#"><span class="label label-info">Créer</span></a>
                    <a href="#"><span class="label label-success">Voir</span></a>
                    <a href="{{ route('categories.delete', [
                        'id' => $element->id,
                        ]) }}" onclick="return confirm('Etes vous sûre de vouloir supprimer ce film ?');"><span class="label label-danger">Supprimer</span></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>


@endsection
