<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Manajemen Stok Barang</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="sidebar" id="sidebar">
            <button class="menu-toggle" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="logo">
                <h2>StockMaster</h2>
                <span class="nav-text">Manajemen Stok Barang</span>
            </div>
            
            <nav class="nav-menu">
                <div class="nav-item active" onclick="showSection('dashboard')">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-text">Dashboard</span>
                </div>
                <div class="nav-item" onclick="showSection('products')">
                    <i class="fas fa-boxes"></i>
                    <span class="nav-text">Manajemen Produk</span>
                </div>
                <div class="nav-item" onclick="showSection('transactions')">
                    <i class="fas fa-exchange-alt"></i>
                    <span class="nav-text">Transaksi Barang</span>
                </div>
                <div class="nav-item" onclick="showSection('expiry')">
                    <i class="fas fa-clock"></i>
                    <span class="nav-text">Pemantauan Kadaluarsa</span>
                </div>
                <div class="nav-item" onclick="showSection('reports')">
                    <i class="fas fa-chart-bar"></i>
                    <span class="nav-text">Laporan</span>
                </div>
                <div class="nav-item" onclick="showSection('users')">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">Manajemen User</span>
                </div>
                <div class="nav-item" onclick="showSection('settings')">
                    <i class="fas fa-cog"></i>
                    <span class="nav-text">Pengaturan</span>
                </div>
            </nav>
        </div>

        <div class="main-content">
            <div class="header">
                <h1 id="pageTitle">Dashboard</h1>
                <div class="user-info">
                    <span>Selamat datang, <strong>Admin</strong></span>
                    <div class="user-avatar">A</div>
                </div>
            </div>

            {{-- Bagian yang bisa diisi dari halaman lain --}}
            @yield('content')
        </div>
    </div>
</body>
</html>
