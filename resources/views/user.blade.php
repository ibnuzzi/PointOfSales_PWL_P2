<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - Profil User</title>
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

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .profile-card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1a73e8, #0d47a1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 40px;
            color: white;
        }

        .profile-card h2 {
            font-size: 28px;
            margin-bottom: 8px;
            color: #1a73e8;
        }

        .profile-card .info {
            margin-top: 20px;
            text-align: left;
        }

        .profile-card .info-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }

        .profile-card .info-item .label {
            color: #999;
            font-weight: 500;
        }

        .profile-card .info-item .value {
            font-weight: 600;
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

    <div class="container">
        <div class="profile-card">
            <div class="avatar">👤</div>
            <h2>{{ $name }}</h2>
            <div class="info">
                <div class="info-item">
                    <span class="label">User ID</span>
                    <span class="value">{{ $id }}</span>
                </div>
                <div class="info-item">
                    <span class="label">Nama</span>
                    <span class="value">{{ $name }}</span>
                </div>
                <div class="info-item">
                    <span class="label">Role</span>
                    <span class="value">Kasir</span>
                </div>
                <div class="info-item">
                    <span class="label">Status</span>
                    <span class="value" style="color: #4caf50;">● Aktif</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>