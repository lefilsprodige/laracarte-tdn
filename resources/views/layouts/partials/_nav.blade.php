<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home_path')}}">Laracarte</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="{{ set_active_route('home_path') }}">
          <a class="nav-link" aria-current="page" href="{{route('home_path')}}">Home</a>
        </li>
        <li class="{{ set_active_route('about_path') }}">
          <a class="nav-link" href="{{Route('about_path')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artisans</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Planet
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="https://laravel.com">Laravel.com</a></li>
            <li><a class="dropdown-item" href="https://laravel.io">Laravel.io</a></li>
            <li><a class="dropdown-item" href="https://laracasts.com">Laracast</a></li>
            <li><a class="dropdown-item" href="https://larajobs.com">Larajobs</a></li>
            <li><a class="dropdown-item" href="https://laravel-news.com">Laravel New</a></li>
            <li><a class="dropdown-item" href="https://larachat.co">Larachat</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacts</a>
        </li>
    </ul>
    <span class="navbar-nav d-flex">
      <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
    </span>
    </div>
  </div>
</nav>
