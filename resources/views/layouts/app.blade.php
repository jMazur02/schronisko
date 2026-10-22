<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Twój Pupil - Schronisko">
        <meta name="author" content="">
        <title>Twój Pupil!</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container px-5 d-flex justify-content-between align-items-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('zdjecia/logo.png') }}" alt="Logo Twój Pupil!" height="80" width="200">
                </a>

                <div class="d-flex gap-2">
                    @guest
                    <button class="btn btn-outline-light" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Zaloguj
                    </button>
                    @endguest

                    @auth
                    <a href="{{ url('/panel') }}" class="btn btn-warning">Panel Pracownika</a>
                    @endauth

                    <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                        Menu
                    </button>
                </div>
            </div>
        </nav>

        <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Logowanie dla pracowników</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Hasło</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Zaloguj się</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/') }}">Strona główna</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/onas') }}">O nas</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/zwierzaki') }}">Nasze Zwierzaki</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/zaadoptuj') }}">Zaadoptuj</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/kontakt') }}">Kontakt</a></li>
                </ul>
            </div>
        </div>

        @yield('content')

        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Jakub Mazur &copy; Twój Pupil! 2025</p></div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>