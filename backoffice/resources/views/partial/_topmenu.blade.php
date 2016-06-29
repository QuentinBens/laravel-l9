<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Laravel L9</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('faq') }}"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a></li>
        <li><a href="{{ route('about') }}"><i class="fa fa-info-circle" aria-hidden="true"></i> A propos</a></li>
        <li><a href="{{ route('contact') }}"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a></li>
        <li><a href="{{ route('concept') }}"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Concept</a></li>
        <li><a href="{{ route('presse') }}"><i class="fa fa-comment" aria-hidden="true"></i> Ils parlent de nous</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-list" aria-hidden="true"></i> Dashboard <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#"><i class="fa fa-film" aria-hidden="true"></i> Ajout Movies</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('movies.index') }}">Index la liste des Films</a></li>
                <li><a href="{{ route('movies.creer') }}">Ajouter un film</a></li>
                <li><a href="{{ route('movies.modifier') }}">Modifier la liste des Films</a></li>
                <li><a href="{{ route('movies.voir') }}">Voir la liste des Films</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Ajout Categories</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('categories.index') }}">Index la liste des Categories</a></li>
                <li><a href="{{ route('categories.creer') }}">Ajouter une Categorie</a></li>
                <li><a href="{{ route('categories.modifier') }}">Modifier la liste des Categories</a></li>
                <li><a href="{{ route('categories.voir') }}">Voir la liste des Categories</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#"><i class="fa fa-video-camera" aria-hidden="true"></i> Ajout Réalisateur</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('realisateurs.index') }}">Index la liste des Réalisateur</a></li>
                <li><a href="{{ route('realisateurs.creer') }}">Ajouter un Réalisateur</a></li>
                <li><a href="{{ route('realisateurs.modifier') }}">Modifier la liste des Réalisateur</a></li>
                <li><a href="{{ route('realisateurs.voir') }}">Voir la liste des Réalisateur</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#"><i class="fa fa-star" aria-hidden="true"></i> Ajout Acteurs</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('acteurs.index') }}">Index la liste des Acteurs</a></li>
                <li><a href="{{ route('acteurs.creer') }}">Ajouter un Acteur</a></li>
                <li><a href="{{ route('acteurs.modifier') }}">Modifier la liste des Acteurs</a></li>
                <li><a href="{{ route('acteurs.voir') }}">Voir la liste des Acteurs</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Ajout Avancée</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="{{ route('movies.search') }}" method="get">
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Search">
        </div>
        <button type="submit" name="button" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
