<nav class="navbar navbar-expand-lg bg-body-tertiary py-4">
    <div class="container">
        <a class="navbar-brand" href="/home">Telkom University</a>

        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'text-primary' : '' }}" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('registercollege') ? 'text-primary' : '' }}"
                        aria-current="page" href="{{ route('registercollege') }}">Pendaftaran</a>
                </li>
            </ul>


            <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->username }}
                </a>

                <ul class="dropdown-menu">
                    @if (Auth::user()->is_admin == 1)
                        <li><a class="dropdown-item" href="{{ route('admin.index') }}">Admin</a></li>
                    @endif
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li class="dropdown-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn text-right p-0">Logout</button>
                        </form>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</nav>
