<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
          <img src="../assets/img/logo.gif" width="30" height="30" alt="">
      </a>
      <p>
        <a class="navbar-brand navbar-brand-laptop" href="/public">Cercle Généalogique de l'Est Parisien</a>
        <br class="navbar-brand navbar-brand-laptop">
        <a class="navbar-brand navbar-brand-mobile" href="#">CGEP 93</a>
        <a class="navbar-brand navbar-brand-laptop navbar-brand-laptop-subtitle" href="#">Généalogie et Histoire de Seine-Saint-Denis</a>
      </p>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">L'Association</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{route('association')}}">Statuts</a>
              <a class="dropdown-item" href="#">Membres du CA</a>
              <a class="dropdown-item" href="#">Règlement intérieur</a>
              <a class="dropdown-item" href="#">Adhésions</a>
              <a class="dropdown-item" href="#">Infos pratiques</a>
              <a class="dropdown-item" href="#">Nous contacter</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vie Associative</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{route('bulletins')}}">Bulletins</a>
                <a class="dropdown-item" href="{{route('summary')}}">Liste sommaire</a>
                <a class="dropdown-item" href="{{route('paperstatements')}}">Relevés papiers</a>
                <a class="dropdown-item" href="{{route('genecole')}}">Génécole</a>
                <a class="dropdown-item" href="{{route('events')}}">Événements</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recherches</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{route('geneabank')}}">Généabank</a>
              <a class="dropdown-item" href="{{route('bigenet')}}">Bigenet</a>
              <a class="dropdown-item" href="{{route('tips')}}">Trucs et astuces</a>
              <a class="dropdown-item" href="{{route('department')}}">Département</a>
              <a class="dropdown-item" href="{{route('archives')}}">Archives</a>
              <a class="dropdown-item" href="{{route('links')}}">Liens</a>
              <a class="dropdown-item" href="{{route('worldresearch')}}">Recherches dans le Monde</a>
            </div>
          </li>



          <li class="nav-item">
            @guest
              <a class="nav-link" href="login">Espace membre</a>
            @endguest

            @auth
              <a class="nav-link" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Déconnexion
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            @endauth

          </li>
        </ul>
      </div>
    </nav>
