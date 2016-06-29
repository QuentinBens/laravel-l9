@extends('layout')

@section('filArianne')
  @parent
  <li class="active"><a href="{{ route('realisateurs.index') }}">Liste de realisateurs</a></li>
@endsection

@section('content')
  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>La liste de mes realisateurs</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">  ​
          <table class="table table-hover bgTable">
            <thead>
              <tr class="active">
                <th class ="id">Id</th>
                <th class ="Firstname">Firstname</th>
                <th class ="Lastname">Lastname</th>
                <th class ="img">Photo</th>
                <th class ="dob">Date de naissance</th>
                <th class ="Bio">Briographie</th>
                <th class ="act">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($realisateurs as $element)

              <tr>
                <td class ="id">{{$element->id}}</td>
                <td class ="firstname">{{$element->firstname}}</td>
                <td class ="lastname">{{$element->lastname}}</td>
                <td class ="img"> <img src="{{$element->image}}" height="120px" width="80px"/> </td>
                <td class ="dob">{{ strip_tags($element->dob) }}</td>
                <td class ="bio">{{ strip_tags(str_limit($element->biography, 300)) }}</td>
                <td class ="act">
                    <a href="#"><span class="label label-info">Créer</span></a>
                    <a href="#"><span class="label label-success">Voir</span></a>
                    <a href="{{ route('realisateurs.delete', [
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
