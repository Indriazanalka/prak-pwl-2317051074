<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <!-- Import Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #325c79ff, #0096c4ff, #00a6ffff);
      background-size: 300% 300%;
      animation: gradientBG 8s ease infinite;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .profile-container {
      text-align: center;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      padding: 28px;
      border-radius: 20px;
      width: 340px;
      box-shadow: 0 6px 24px rgba(0,0,0,0.3);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #3e2723;
    }

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      margin: 0 auto 18px auto;
      overflow: hidden;
      border: 4px solid #3e2723;
      box-shadow: 0 0 12px rgba(62,39,35,0.6);
    }

    .profile-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-info {
      background: rgba(255, 255, 255, 0.2);
      padding: 12px;
      margin: 10px 0;
      border-radius: 10px;
      font-size: 15px;
      font-weight: 600;
      letter-spacing: 0.3px;
      transition: transform 0.3s ease, background 0.3s ease;
    }

    .profile-info:hover {
      background: rgba(255, 255, 255, 0.35);
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="profile-container">
    <!-- Foto Profil -->
    <div class="profile-img">
      <img src="{{ asset('images/rataip.jpg') }}" alt="Profile Picture">
    </div>

    <!-- Data Profil -->
    <div class="profile-info">Nama: {{ $nama }}</div>
    <div class="profile-info">NPM: {{ $npm }}</div>
    <div class="profile-info">Kelas: {{ $kelas }}</div>
  </div>
</body>
</html>