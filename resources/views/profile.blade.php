<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
        }
        .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .info {
            background: #e0e0e0;
            padding: 10px;
            border-radius: 8px;
            margin: 10px 0;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="card">
        <!-- Ganti dengan foto asli di folder public (misalnya public/images/profile.jpg) -->
        <img src="{{ asset('images/bosmuda.png') }}" alt="Foto Profil">

        <div class="info">Nama : {{ $nama }}</div>
        <div class="info">Kelas : {{ $kelas }}</div>
        <div class="info">NPM : {{ $nim }}</div>
    </div>
</body>
</html>
