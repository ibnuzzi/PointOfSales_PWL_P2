<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - Penjualan</title>
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

        .header {
            background: linear-gradient(135deg, #2e7d32, #43a047);
            color: white;
            padding: 40px 32px;
        }

        .header h2 {
            font-size: 28px;
        }

        .header p {
            opacity: 0.9;
            margin-top: 8px;
        }

        .content {
            display: flex;
            gap: 30px;
            padding: 30px 32px;
            flex-wrap: wrap;
        }

        .product-list {
            flex: 2;
            min-width: 300px;
        }

        .cart {
            flex: 1;
            min-width: 280px;
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            height: fit-content;
        }

        .cart h3 {
            margin-bottom: 16px;
            color: #2e7d32;
        }

        .product-list h3 {
            margin-bottom: 16px;
        }

        .product-item {
            background: white;
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.06);
        }

        .product-item .name {
            font-weight: 600;
        }

        .product-item .price {
            color: #2e7d32;
            font-weight: bold;
        }

        .btn {
            background: #1a73e8;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
        }

        .btn:hover {
            background: #1557b0;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        .cart-total {
            margin-top: 16px;
            padding-top: 16px;
            border-top: 2px solid #2e7d32;
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 18px;
        }

        .btn-checkout {
            width: 100%;
            margin-top: 16px;
            background: #2e7d32;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-checkout:hover {
            background: #1b5e20;
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

    <div class="header">
        <h2>💰 Halaman Penjualan</h2>
        <p>Transaksi Point of Sales</p>
    </div>

    <div class="content">
        <div class="product-list">
            <h3>Daftar Produk</h3>
            <div class="product-item">
                <div>
                    <div class="name">☕ Kopi Arabika</div>
                    <div class="price">Rp 25.000</div>
                </div>
                <button class="btn">+ Tambah</button>
            </div>
            <div class="product-item">
                <div>
                    <div class="name">🍞 Roti Gandum</div>
                    <div class="price">Rp 15.000</div>
                </div>
                <button class="btn">+ Tambah</button>
            </div>
            <div class="product-item">
                <div>
                    <div class="name">💄 Lipstik Matte</div>
                    <div class="price">Rp 85.000</div>
                </div>
                <button class="btn">+ Tambah</button>
            </div>
            <div class="product-item">
                <div>
                    <div class="name">🧹 Pembersih Lantai</div>
                    <div class="price">Rp 28.000</div>
                </div>
                <button class="btn">+ Tambah</button>
            </div>
            <div class="product-item">
                <div>
                    <div class="name">🍼 Susu Formula</div>
                    <div class="price">Rp 95.000</div>
                </div>
                <button class="btn">+ Tambah</button>
            </div>
        </div>

        <div class="cart">
            <h3>🧾 Keranjang Belanja</h3>
            <div class="cart-item">
                <span>Kopi Arabika x1</span>
                <span>Rp 25.000</span>
            </div>
            <div class="cart-item">
                <span>Roti Gandum x2</span>
                <span>Rp 30.000</span>
            </div>
            <div class="cart-total">
                <span>Total</span>
                <span>Rp 55.000</span>
            </div>
            <button class="btn-checkout">Bayar Sekarang</button>
        </div>
    </div>
</body>

</html>