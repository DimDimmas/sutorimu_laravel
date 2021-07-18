<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">Sutorimu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="nav navbar-nav ml-auto justify-content-end">
        <li class="nav-item 
        {{request()->is('home') ? 'l-active' : ''}}
        {{request()->is('/') ? 'l-active' : ''}}">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item
        {{request()->is('anime-list') ? 'l-active' : ''}}
        {{request()->is('search') ? 'l-active' : ''}}">
          <a class="nav-link" href="{{ url('anime-list') }}">Anime List</a>
        </li>
        <li class="nav-item 
        {{request()->is('movie-list') ? 'l-active' : ''}}">
            <a class="nav-link" href="{{ url('movie-list') }}">Movie</a>
        </li>
        <li class="nav-item
        {{request()->is('genre-list') ? 'l-active' : ''}}">
          <a class="nav-link" href="{{ url('genre-list') }}">Genre</a>
        </li>
        <li class="nav-item 
        {{request()->is('request-anime') ? 'l-active' : ''}}">
          <a class="nav-link" href="{{ url('request-anime') }}">Request</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <form action="{{ route('search') }}" method="get">
                    <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </li>
      </ul>
    </div>
</nav>