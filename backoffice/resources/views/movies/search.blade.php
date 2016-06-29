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
            @if (session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif
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
                      <a href="#"><span class="label label-info">Modifier</span></a>
                      <a href="#"><span class="label label-success">Voir</span></a>
                      <a href="{{ route('movies.delete', [
                          'id' => $element->id,
                          ]) }}" onclick="return confirm('Etes vous sûre de vouloir supprimer ce film ?');"><span class="label label-danger">Supprimer</span></a>
                      @if (!in_array($element->id, session('likes', [])))
                        <a href="{{ route('movies.aimer', [
                          'id' => $element->id,
                          'action' => 'like'
                          ]) }}"><span class='fa fa-heart-o'></span></a>
                      @else
                        <a href="{{ route('movies.aimer', [
                          'id' => $element->id,
                          'action' => 'dislike'
                          ]) }}"><span class='fa fa-heart'></span></a>
                      @endif
                      @if ($element->visible == 1)
                        <a href="{{ route('movies.visibility', [
                          'id' => $element->id,
                          'visibility' => '0'
                          ]) }}"><span class="fa fa-eye" class="btn"></span></a>
                      @else
                        <a href="{{ route('movies.visibility', [
                          'id' => $element->id,
                          'visibility' => '1'
                          ]) }}"><span class="fa fa-eye-slash" class="btn"></span></a>
                      @endif

                      @if ($element->cover == 1)
                        <a href="{{ route('movies.cover', [
                          'id' => $element->id,
                          'cover' => '0'
                          ]) }}"><span class="fa fa-circle-o" class="btn"></span></a>
                      @else
                        <a href="{{ route('movies.cover', [
                          'id' => $element->id,
                          'cover' => '1'
                          ]) }}"><span class="fa fa-circle" class="btn"></span></a>
                      @endif

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>





@endsection
