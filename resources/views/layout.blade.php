<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SmartMart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }
        .card, .alert {
            background-color: #1e1e1e;
            border-color: #333;
        }

    </style>
</head>
<body>

    @auth
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SmartMart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('barangs.index') }}">Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('transaksis.index') }}">Transaksi</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item me-3">
                        <a href="{{ route('profile.edit') }}" class="nav-link text-light">{{ Auth::user()->name }} ({{ Auth::user()->role }})</a>
                    </li>


                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-sm btn-outline-light" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endauth

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
