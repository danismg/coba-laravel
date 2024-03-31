<nav class="navbar navbar-expand-lg navbar-light bg-danger" style="height: 100px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="nav-link {{ ($active === "profile") ? 'active' : '' }} dropdown-toggle" style="background: none; border: none; color: white; font-size: 1rem;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="#">Sejarah Sekolah</a></li>
                        <li><a class="dropdown-item" href="#">Prestasi</a></li>
                    </ul>
                </div>
            </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($active === "tenaga kerja ") ? 'active' : '' }}" href="/posts">tenaga Kerja</a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                    <button class="nav-link {{ ($active === "galery") ? 'active' : '' }} dropdown-toggle" style="background: none; border: none; color: white; font-size: 1rem;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        galery
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Fasilitas sekolah</a></li>
                        <li><a class="dropdown-item" href="#">kegiatan sekolah</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "pengumuman") ? 'active' : '' }}" href="/pengumuman">pengumuman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "saran") ? 'active' : '' }}" href="/saran">saran</a>
            </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "contact") ? 'active' : '' }}" href="/contact">contact</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/logout" method="post">
                                @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                          </form>
                      </li>
                    </ul>
                  </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>

      </div>
  </div>
</nav>
