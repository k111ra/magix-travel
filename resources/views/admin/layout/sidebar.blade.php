<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}">
            <img alt="image" src="{{ asset('admin/assets/img/logo.png') }}" class="header-logo" />
            <span class="logo-name"> <a href="{{ route('home') }}"> Magix Travel</a></span>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="dropdown @if (request()->routeIs('dashboard')) active @endif">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i data-feather="monitor"></i>
                <span>Tableau de Bord</span>
            </a>
        </li>
        <li class="@if (request()->routeIs('user.index')) active @endif">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i data-feather="user"></i>
                <span>Utilisateurs</span>
            </a>
        </li>
        <li class="@if (request()->routeIs('client.index')) active @endif">
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
                <li><a class="nav-link @if (request()->routeIs('tours.index')) active @endif"
                        href="{{ route('tours.index') }}">Tours</a></li>
                <li><a class="nav-link @if (request()->routeIs('hotels.index')) active @endif"
                        href="{{ route('hotels.index') }}">Hotels</a></li>
                <li><a class="nav-link @if (request()->routeIs('destinations.index')) active @endif"
                        href="{{ route('destinations.index') }}">Destinations</a></li>
                <li><a class="nav-link @if (request()->routeIs('vols.index')) active @endif"
                        href="{{ route('vols.index') }}">Vols</a></li>
                <li><a class="nav-link @if (request()->routeIs('reservations.index')) active @endif"
                        href="{{ route('reservations.index') }}">Reservation</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown">
                <i data-feather="settings"></i>
                <span>Contenu du site</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="nav-link @if (request()->routeIs('Roles.index')) active @endif"
                        href="{{ route('Roles.index') }}">Slide</a></li>
                {{-- <li><a class="nav-link @if (request()->routeIs('some_other_route')) active @endif" href="{{ route('some_other_route') }}">Some Other Route</a></li> --}}
                <!-- Add similar checks for other parametre menu items -->
                <li><a class="nav-link @if (request()->routeIs('Roles.index')) active @endif"
                    href="{{ route('message') }}">Message</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown">
                <i data-feather="settings"></i>
                <span>Parametre</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="nav-link @if (request()->routeIs('Roles.index')) active @endif"
                        href="{{ route('Roles.index') }}">Rôle</a></li>
                {{-- <li><a class="nav-link @if (request()->routeIs('some_other_route')) active @endif" href="{{ route('some_other_route') }}">Some Other Route</a></li> --}}
                <!-- Add similar checks for other parametre menu items -->
            </ul>
        </li>
    </ul>
</aside>
