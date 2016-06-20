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
        <li class="active"><a href="{{ url('faq') }}"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a></li>
        <li><a href="{{ url('about-us') }}"><i class="fa fa-info-circle" aria-hidden="true"></i> A propos</a></li>
        <li><a href="{{ url('contact') }}"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-list" aria-hidden="true"></i> Dashboard <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-film" aria-hidden="true"></i> Ajout Movies</a></li>
            <li><a href="#">Ajout Acteur</a></li>
            <li><a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i> Ajout Movies</a></li>
            <li><a href="#">Ajout Réalisateur</a></li>
            <li><a href="#">Ajout Avancée</a></li>
            <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://twitter.com/Brio_Tno?lang=fr"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a></li>
        <li><a href="https://www.facebook.com/Quentin.Qb"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a></li>
        <li><a href="https://www.linkedin.com/in/quentin-benard-7ba31011b"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
