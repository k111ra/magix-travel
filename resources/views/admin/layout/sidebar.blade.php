{{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Liste des utilisateurs">
          <a class="nav-link" href="{{route('tableUtilisateur')}}">
          <i class="fas fa-fw fa-users"></i>
            <span class="nav-link-text">Utilisateurs</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Liste des client">
          <a class="nav-link" href="user-profile.html">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Client</span>
          </a>
        </li>
		<!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My listings">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMylistings" data-parent="#mylistings">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">My listings</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMylistings">
            <li>
              <a href="listings.html">Pending <span class="badge badge-pill badge-primary">6</span></a>
            </li>
			<li>
              <a href="listings.html">Active <span class="badge badge-pill badge-success">6</span></a>
            </li>
			<li>
              <a href="listings.html">Expired <span class="badge badge-pill badge-danger">6</span></a>
            </li>
          </ul>
        </li> -->
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Commande">
          <a class="nav-link" href="reviews.html">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span class="nav-link-text">Commande</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="produit">
          <a class="nav-link" href="bookmarks.html">
          <i class="fa fa-shopping-bag"></i>
            <span class="nav-link-text">Produit</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="produit">
          <a class="nav-link" href="bookmarks.html">
          <i class="fa fa-hotel"></i>
            <span class="nav-link-text">Tours</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Devis">
          <a class="nav-link" href="add-listing.html">
          <i class="fas fa-calculator"></i>
            <span class="nav-link-text">Devis</span>
          </a>
        </li>
		<!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link" href="user-profile.html">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">My Profile</span>
          </a>
        </li> -->
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Parametre">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#Components">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Parametre</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="charts.html">Rôle</a>
            </li>
			<li>
              <a href="tables.html">Categorie</a>
            </li>

        <li>
            <li>
              <a href="charts.html">Postes</a>
          </li>
        </ul>
       </li>
      --}}

      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">
                <img alt="image" src="{{ asset('admin/assets/img/logo.png')}}" class="header-logo" />
                <span class="logo-name"> <a href="{{route('home')}}"> Magix Travel</a></span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown @if(request()->routeIs('dashboard')) active @endif">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i data-feather="monitor"></i>
                    <span>Tableau de Bord</span>
                </a>
            </li>
            <li class="@if(request()->routeIs('user.index')) active @endif">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i data-feather="user"></i>
                    <span>Utilisateurs</span>
                </a>
            </li>
            <li class="@if(request()->routeIs('client.index')) active @endif">
                <a class="nav-link" href="{{ route('client.index') }}">
                    <i data-feather="users"></i>
                    <span>Clients</span>
                </a>
            </li>

            <!-- Add similar checks for other menu items -->

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="shopping-bag"></i>
                    <span>Produits</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link @if(request()->routeIs('tours.index')) active @endif" href="{{ route('tours.index') }}">Tours</a></li>
                    <li><a class="nav-link @if(request()->routeIs('hotels.index')) active @endif" href="{{ route('hotels.index') }}">Hotels</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="settings"></i>
                    <span>Parametre</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link @if(request()->routeIs('Roles.index')) active @endif" href="{{ route('Roles.index') }}">Rôle</a></li>
                    {{-- <li><a class="nav-link @if(request()->routeIs('some_other_route')) active @endif" href="{{ route('some_other_route') }}">Some Other Route</a></li> --}}
                    <!-- Add similar checks for other parametre menu items -->
                </ul>
            </li>
        </ul>
    </aside>

