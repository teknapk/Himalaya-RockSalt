<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="Main_logo">
        <img class="logo" src="{{ asset('assets/welcome/Picture6.jpg') }}" alt="Himalaya Rock Salt Logo">
        <p class="Navbar_text">The Perfect Fusion of Science and Nature</p>
    </div>

    <div class="main_website">
        <h1 class="web_name">Himalaya Rock Salt (T.M)</h1>
        <p class="tek_subheading">Manufactured & Exported by : Tekna Power</p>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav" style="margin-left:auto; font-size:17px;">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">HOME</a>
            </li>
            <li class="nav-item {{ request()->is('aboutus*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/aboutus') }}">ABOUT US</a>
            </li>
            <li class="nav-item dropdown {{ request()->is('products*') || request()->is('therapeutic*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    PRODUCTS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/products') }}">All Products</a>
                    <a class="dropdown-item" href="{{ url('/therapeutic') }}">Therapeutic Salt Lamps</a>
                    <a class="dropdown-item" href="{{ url('/therapeutic/Naturallamps') }}">Natural Lamps</a>
                    <a class="dropdown-item" href="{{ url('/therapeutic/Customizedlamps') }}">Customized Lamps</a>
                    <a class="dropdown-item" href="{{ url('/therapeutic/miniusb') }}">Mini USB Lamps</a>
                    <a class="dropdown-item" href="{{ url('/therapeutic/superheavylamps') }}">Super Heavy Lamps</a>
                    <a class="dropdown-item" href="{{ url('/saltroom') }}">Salt Room Caves Sauna</a>
                    <a class="dropdown-item" href="{{ url('/tablesalt') }}">Table and Edible Salts</a>
                    <a class="dropdown-item" href="{{ url('/tealight') }}">Tea Lights Photophore</a>
                    <a class="dropdown-item" href="{{ url('/kitchencook') }}">Kitchen and Cookware</a>
                    <a class="dropdown-item" href="{{ url('/spabath') }}">Spa and Bath Products</a>
                    <a class="dropdown-item" href="{{ url('/bodywear') }}">Body Wear</a>
                    <a class="dropdown-item" href="{{ url('/Healthcare') }}">Salt Health Care</a>
                    <a class="dropdown-item" href="{{ url('/animallicks') }}">Animal Licks</a>
                </div>
            </li>
            <li class="nav-item {{ request()->is('blog*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/blog') }}">BLOG</a>
            </li>
            <li class="nav-item {{ request()->is('contactus*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/contactus') }}">CONTACT US</a>
            </li>
        </ul>
    </div>
</nav>
