<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="wrapper">
            <div class="brand">
                <div class="Nama1">smkmutuckp</div>
                <div class="Nama2">.id</div>
            </div>
            <ul class="navigasi">
                <li><a class="teks1" href="navbar.php" class="active">Home</a></li>
                <li><a class="teks2" href="collection.php">Collection</a></li>
                <li><a class="teks3" href="major.php">Major</a></li>
                <li><img id="profile-picture" src="logo_mutu_png_transparant-removebg-preview-1.png" alt="Hack"></li>
            </ul>
        </nav>
    <div class="foto">
      <figure>
        <div class="slide">
          <img src="Desain sekolah.png" alt="foto1">
        </div>
        <div class="slide">
          <img src="Foto Sekkolah Lama 1.png" alt="foto2">
        </div>
        <div class="slide">
          <img src="Foto Sekkolah Lama 2.png" alt="foto3">
        </div>
        <div class="slide">
          <img src="wallpaperflare.com_wallpaper (3).jpg" alt="foto4">
        </div>
      </figure>
    </div>
    </div>
</body>
  <script>
    document.getElementById('profile-picture').addEventListener('click', function() {
    // Redirect ke halaman profil, ganti URL berikut dengan URL halaman profil yang diinginkan
    window.location.href = 'Profile.php';
});
  </script>
</html>