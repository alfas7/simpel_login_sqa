<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .gradient-card {
            background: linear-gradient(135deg, #f8f9ff 0%, #f1f4ff 100%);
        }
        .menu-card {
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9ff 100%);
        }
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(147, 197, 253, 0.2);
            background: linear-gradient(135deg, #f1f4ff 0%, #e8eeff 100%);
        }
        .stat-value {
            background: -webkit-linear-gradient(45deg, #60a5fa, #93c5fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-blue-50">
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold mb-3 bg-gradient-to-r from-blue-400 to-indigo-400 text-transparent bg-clip-text">
                Sistem Manajemen Laundry
            </h1>
            <p class="text-lg text-gray-500">✨ Wangi Laundry Pekanbaru ✨</p>
        </div>

        <!-- Statistik Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- Pendapatan Hari Ini -->
            <div class="gradient-card rounded-xl p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm mb-1">Pendapatan Hari Ini</p>
                        <p class="text-2xl font-bold text-blue-500">
                            Rp 1.250.000
                        </p>
                    </div>
                    <i class="fas fa-coins text-3xl text-blue-400 opacity-80"></i>
                </div>
            </div>

            <!-- Pendapatan Bulan Ini -->
            <div class="gradient-card rounded-xl p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm mb-1">Pendapatan Bulan Ini</p>
                        <p class="text-2xl font-bold text-blue-500">
                            Rp 25.750.000
                        </p>
                    </div>
                    <i class="fas fa-chart-line text-3xl text-blue-400 opacity-80"></i>
                </div>
            </div>

            <!-- Status Pesanan -->
            <div class="gradient-card rounded-xl p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm mb-1">Status Pesanan</p>
                        <p class="text-xl font-bold text-amber-400">5 Pending</p>
                        <p class="text-xl font-bold text-blue-400">8 Proses</p>
                    </div>
                    <i class="fas fa-tasks text-3xl text-blue-400 opacity-80"></i>
                </div>
            </div>

            <!-- Statistik Pelanggan -->
            <div class="gradient-card rounded-xl p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm mb-1">Total Pelanggan</p>
                        <p class="text-2xl font-bold text-blue-500">128</p>
                        <p class="text-sm text-gray-500 mt-2">Layanan Terpopuler:</p>
                        <p class="text-sm text-blue-500">Cuci Setrika</p>
                    </div>
                    <i class="fas fa-users text-3xl text-blue-400 opacity-80"></i>
                </div>
            </div>
        </div>

        <!-- Menu Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Kelola Pelanggan -->
            <a href="#" class="menu-card rounded-xl p-6 shadow-sm">
                <div class="flex items-center mb-4">
                    <i class="fas fa-user-friends text-3xl text-blue-400 mr-4"></i>
                    <h3 class="text-xl font-semibold text-blue-500">Kelola Pelanggan</h3>
                </div>
                <p class="text-gray-500">Manajemen data dan informasi pelanggan</p>
            </a>

            <!-- Kelola Layanan -->
            <a href="#" class="menu-card rounded-xl p-6 shadow-sm">
                <div class="flex items-center mb-4">
                    <i class="fas fa-tshirt text-3xl text-blue-400 mr-4"></i>
                    <h3 class="text-xl font-semibold text-blue-500">Kelola Layanan</h3>
                </div>
                <p class="text-gray-500">Pengaturan jenis dan harga layanan</p>
            </a>

            <!-- Kelola Petugas -->
            <a href="#" class="menu-card rounded-xl p-6 shadow-sm">
                <div class="flex items-center mb-4">
                    <i class="fas fa-user-tie text-3xl text-blue-400 mr-4"></i>
                    <h3 class="text-xl font-semibold text-blue-500">Kelola Petugas</h3>
                </div>
                <p class="text-gray-500">Manajemen data petugas laundry</p>
            </a>

            <!-- Kelola Pesanan -->
            <a href="#" class="menu-card rounded-xl p-6 shadow-sm">
                <div class="flex items-center mb-4">
                    <i class="fas fa-clipboard-list text-3xl text-blue-400 mr-4"></i>
                    <h3 class="text-xl font-semibold text-blue-500">Kelola Pesanan</h3>
                </div>
                <p class="text-gray-500">Manajemen pesanan dan status laundry</p>
            </a>

            <!-- Kelola Pembayaran -->
            <a href="#" class="menu-card rounded-xl p-6 shadow-sm">
                <div class="flex items-center mb-4">
                    <i class="fas fa-money-bill-wave text-3xl text-blue-400 mr-4"></i>
                    <h3 class="text-xl font-semibold text-blue-500">Kelola Pembayaran</h3>
                </div>
                <p class="text-gray-500">Manajemen pembayaran dan transaksi</p>
            </a>

            <!-- Laporan & Analisis -->
            <a href="#" class="menu-card rounded-xl p-6 shadow-sm">
                <div class="flex items-center mb-4">
                    <i class="fas fa-chart-bar text-3xl text-blue-400 mr-4"></i>
                    <h3 class="text-xl font-semibold text-blue-500">Laporan & Analisis</h3>
                </div>
                <p class="text-gray-500">Lihat laporan dan analisis bisnis</p>
            </a>
        </div>
    </div>
</body>
</html>