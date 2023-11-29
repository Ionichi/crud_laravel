<nav class="navbar navbar-expand-lg" style="background-color: #04c1fa;">
  <div class="container-fluid">
    <img src="img/logo2.jpg" alt="..." width="50" class="card-img-top-left">
    <a class="navbar-brand" href="/">JMC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Request::is(('/'))?'avtive' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is(('about'))?'avtive' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is(('order'))?'avtive' : '' }}" href="/order">Order</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item-dropdown">
            <a class="nav-link dropdown-toogle" href="#" id="navbarDropdown" role="button" data-bs-toogle="dropdown" aria-expanded="false">
              Welcome Back! {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form actoin="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown_item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
              <li class="nav-item">
                <a class="nav-link {{ Request::is('login')?'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
        @endauth  
      </ul>
    </div>
  </div>
</nav>