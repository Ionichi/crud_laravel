<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Ionichi | </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('news') ? 'active' : '' }}" href="/news">News</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item">
                                <a href="/dashboard" class="dropdown-item">
                                    <i class="bi bi-layout-text-sidebar-reverse"></i>
                                    My Dashboard
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login"><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="/register"><i
                                class="bi bi-file-earmark-plus"></i> Register</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
