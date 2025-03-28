<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('profiles.index') }}">Mon Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('settings.index') }}">Mes Informations</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.create') }}">Cree un post</a>
            </li>
        </ul>

      </div>
    </div>
  </nav>


