<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" style="color: blue" href="{{ route('home') }}">PERPUSTAKAANKU</a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Halaman Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('book.index') }}">Tabel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('form') }}">Formulir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
