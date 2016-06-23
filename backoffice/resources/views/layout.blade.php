<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      @section('titrePage')
      BackOffice
      @show
    </title>
    <meta name="name" content="@section('metadesc') Meta Description de BackOffice @show">

    <!-- Bootstrap -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @section('css')
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://bootswatch.com/spacelab/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
      <link rel="stylesheet" href="{{ asset('css/main.css')}}" media="screen" title="no title" charset="utf-8">
    @show


  </head>
  <body>
    <header>
      @include('partial/_topmenu')
    </header>
    <main>

      <ol class="breadcrumb" id ="breadcrumb">
        @section('filArianne')
          <li><a href="{{ route('welcome') }}">Home</a></li>
        @show
      </ol>

      @section('content')

      @show

    </main>

    <footer>
      @include('partial/_footer')
    </footer>

      @section('js')
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/main.js') }}" charset="utf-8"></script>
        <script src="{{ asset('js/garand-sticky/jquery.sticky.js') }}" charset="utf-8"></script>
      @show
    </body>
    </html>
