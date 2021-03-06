

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Kuy Jalan</title>
    <link href="{{url('img/logo.png')}}" rel="icon" type="image/png">
    <link rel="stylesheet" href="{{url('assets/styles/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/styles1.css')}}">
</head>

<body class="admin-page">
    <!-- Admin Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/admin/wisata">
            <img src="{{url('assets/images/logokuy.png')}}" width="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbaradmin"
            aria-controls="navbaradmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-admin" id="navbaradmin">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item nav-main-admin">
                    <a class="nav-link {{ $active[0] }}" href="/admin/wisata">
                        <span class="sr-only"></span>Wisata</a>
                </li>
                <li class="nav-item nav-main-admin">
                    <a class="nav-link {{ $active[1] }}" href="/admin/transaksi">
                        <span class="sr-only"></span>Transaksi</a>
                </li>
                <li class="nav-item nav-main-admin">
                    <a class="nav-link {{ $active[2] }}" href="/admin/riwayat">
                        <span class="sr-only"></span>Riwayat Transaksi</a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/">Landing Page</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                      </li>
            </ul>
        </div>
    </nav>
    <!-- End of Admin Navbar -->

    <!-- Admin Sidebar -->
    <div class="admin-sidebar" style="z-index:999">
        <ul class="nav flex-column nav-sidebar">
            <li class="nav-item">
                <a class="nav-link {{ $active[0] }}" href="/admin/wisata">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" /></svg>
                </a>
            </li>
        </ul>
    </div>

    @yield('konten')

  </body>
  <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
  <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
  </html>
     <!-- End of Wisata Content -->
