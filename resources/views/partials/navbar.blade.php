<nav class="navbar navbar-expand-lg navbar-dark navbar-color p-0">
    <a class="navbar-brand p-0" href="{{ url('/') }}">
        <img class="ml-3 p-1" src="{{ asset('shopporium.png') }}" alt="{{ config('app.name') }}" width="75" height="75" />
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto navbar-left">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Best Sellers</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Top Buyers</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Today's Deals</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Customer Service</a>
            </li>
        </ul>

        @guest
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item {{ Request::is('sign-in') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('sign-in') }}">Sign In</a>
                </li>

                <li class="nav-item {{ Request::is('sign-up') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('sign-up') }}">Sign Up</a>
                </li>
            </ul>
        @endguest

        @auth
            <ul class="navbar-nav ml-auto">
                <div class="btn-group">
                    <a class="dropdown-toggle mr-10" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        @if (auth()->user()->avatar !== "default.png")
                            <img src="{{ asset('storage') }}/{{ auth()->user()->avatar }}" width="50" height="50"/>
                        @else
                            <img src="{{ asset('storage/avatars/default.png') }}" width="50" height="50"/>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item">Profile</a>
                        <a class="dropdown-item">Another action</a>
                        <a class="dropdown-item">Something else here</a>
                        <hr/>
                        <a class="dropdown-item" href="{{ url('/sign-out') }}">Sign Out</a>
                    </div>
                </div>
            </ul>
        @endauth
    </div>
</nav>
