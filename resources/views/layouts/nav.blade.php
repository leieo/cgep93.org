<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
          <!--img src="{{asset('assets/pictures/Logo.gif')}}" width="30" height="30" alt="logo"-->
      </a>
      <p>
        <a class="navbar-brand navbar-brand-laptop" href="/">Cercle Généalogique de l'Est Parisien</a>
        <br class="navbar-brand navbar-brand-laptop">
        <a class="navbar-brand navbar-brand-mobile" href="#">CGEP 93</a>
        <a class="navbar-brand navbar-brand-laptop navbar-brand-laptop-subtitle" href="#">Généalogie et Histoire de Seine-Saint-Denis</a>
      </p>
      <button class="navbar-toggler p-0 border-0" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar" style="max-height: 36%">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">L'Association</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{route('association')}}">Statuts</a>
              <a class="dropdown-item" href="#">Membres du CA</a>
              <a class="dropdown-item" href="#">Règlement intérieur</a>
              <a class="dropdown-item" href="#">Adhésions</a>
              <a class="dropdown-item" href="#">Infos pratiques</a>
              <a class="dropdown-item" href="{{route('contact')}}">Nous contacter</a>
            </div>
          </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vie associative</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{route('communitylife')}}">Bulletins</a>
                <a class="dropdown-item" href="#">Liste sommaire</a>
                <a class="dropdown-item" href="#">Relevés papiers</a>
                <a class="dropdown-item" href="#">Génécole</a>
                <a class="dropdown-item" href="{{route('event')}}">Événements</a>

            </div>
        </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recherches</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{route('search')}}">Généabank</a>
              <a class="dropdown-item" href="#">Bigenet</a>
              <a class="dropdown-item" href="#">Trucs et astuces</a>
              <a class="dropdown-item" href="#">Département</a>
              <a class="dropdown-item" href="#">Archives</a>
              <a class="dropdown-item" href="#">Liens</a>
              <a class="dropdown-item" href="#">Recherches dans le Monde</a>
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
