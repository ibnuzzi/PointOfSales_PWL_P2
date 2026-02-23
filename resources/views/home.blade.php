<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - Point of Sales</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            color: #333;
        }

        .navbar {
            background: #1a73e8;
            color: white;
            padding: 16px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            font-size: 22px;
        }

        .navbar nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 500;
        }

        .navbar nav a:hover {
            text-decoration: underline;
        }

        .hero {
            background: linear-gradient(135deg, #1a73e8, #0d47a1);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }

        .hero h2 {
            font-size: 36px;
            margin-bottom: 16px;
        }

        .hero p {
            font-size: 18px;
            opacity: 0.9;
        }

        .features {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 50px 20px;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            width: 250px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-bottom: 10px;
            color: #1a73e8;
        }

        .card p {
            font-size: 14px;
            color: #666;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #999;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1>🛒 POS - Point of Sales</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/category/food-beverage">Products</a>
            <a href="/sales">Penjualan</a>
        </nav>
    </div>

    <div class="hero">
        <h2>Selamat Datang di Point of Sales</h2>
        <p>Sistem kasir modern untuk membantu penjualan Anda</p>
    </div>

    <div class="features">
        <div class="card">
            <h3>📦 Produk</h3>
            <p>Kelola daftar produk berdasarkan kategori dengan mudah</p>
        </div>
        <div class="card">
            <h3>💰 Penjualan</h3>
            <p>Proses transaksi penjualan dengan cepat dan akurat</p>
        </div>
        <div class="card">
            <h3>👤 Pengguna</h3>
            <p>Manajemen profil pengguna dan hak akses</p>
        </div>
    </div>

    <footer>
        &copy; 2026 POS - Point of Sales | PWL 2025/2026
    </footer>
</body>

</html>