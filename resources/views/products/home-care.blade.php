<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - Home Care</title>
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
            background: linear-gradient(135deg, #00897b, #26a69a);
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

        .breadcrumb {
            padding: 15px 32px;
            background: white;
            font-size: 14px;
            color: #666;
        }

        .breadcrumb a {
            color: #1a73e8;
            text-decoration: none;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 30px 32px;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            width: 220px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .product-card .emoji {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .product-card h4 {
            margin-bottom: 6px;
        }

        .product-card .price {
            color: #00897b;
            font-weight: bold;
            font-size: 16px;
        }

        .category-tabs {
            display: flex;
            gap: 10px;
            padding: 16px 32px;
            background: white;
            border-bottom: 1px solid #e0e0e0;
            flex-wrap: wrap;
        }

        .category-tabs a {
            padding: 8px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            color: #555;
            background: #f0f2f5;
            transition: all 0.2s;
        }

        .category-tabs a:hover {
            background: #e3f2fd;
            color: #1a73e8;
        }

        .category-tabs a.active {
            background: #1a73e8;
            color: white;
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

    <div class="breadcrumb">
        <a href="/">Home</a> / <a href="/category/food-beverage">Products</a> / Home Care
    </div>

    <div class="header">
        <h2>🏠 Home Care</h2>
        <p>Daftar produk perawatan rumah tangga</p>
    </div>

    <div class="category-tabs">
        <a href="/category/food-beverage">🍔 Food & Beverage</a>
        <a href="/category/beauty-health">💄 Beauty & Health</a>
        <a href="/category/home-care" class="active">🏠 Home Care</a>
        <a href="/category/baby-kid">👶 Baby & Kid</a>
    </div>

    <div class="products">
        <div class="product-card">
            <div class="emoji">🧹</div>
            <h4>Pembersih Lantai</h4>
            <p class="price">Rp 28.000</p>
        </div>
        <div class="product-card">
            <div class="emoji">🧽</div>
            <h4>Sabun Cuci Piring</h4>
            <p class="price">Rp 15.000</p>
        </div>
        <div class="product-card">
            <div class="emoji">🫧</div>
            <h4>Deterjen Cair</h4>
            <p class="price">Rp 35.000</p>
        </div>
        <div class="product-card">
            <div class="emoji">🌸</div>
            <h4>Pewangi Ruangan</h4>
            <p class="price">Rp 22.000</p>
        </div>
    </div>
</body>

</html>