<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href="Profile.css">
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
<body>
    <div class="container">
        <nav class="wrapper">
            <div class="brand">
                <div class="Nama1">smkmutuckp</div>
                <div class="Nama2">.id</div>
            </div>
            <ul class="navigasi">
                <li><a class="teks1" href="navbar.php">Home</a></li>
                <li><a class="teks2" href="collection.php">Collection</a></li>
                <li><a class="teks3" href="MAJOR.PHP">Major</a></li>
                <li><img id="profile-picture" src="logo_mutu_png_transparant-removebg-preview-1.png" alt="Hack"></li>
            </ul>
        </nav>
        <div class="Fcontainer">
          <div class="card">
            <div class="card-image">
              <img src="Collection/Tahun/GIFLOOP.gif" alt="1">
            </div>
            <div class="profile-image">
              <img src="Collection/Tahun/channels4_profile.jpg" alt="2">
            </div>
            <div class="card-content">
              <h3>Satria Diwangkara Kalalo</h3>
              <p>Kelas XI RPL 1 Seorang Pelajaran Mahasiswa Pemogramman Web Dan Hobinya Game Online & Offline</p>
            </div>
            <div class=icons>
              <a href="https://www.youtube.com/@GamerSatria" class="fa-brands fa-youtube"></a>
              <a href="https://www.facebook.com/Satriagaming999iq/" class="fa-brands fa-facebook"></a>
              <a href="https://x.com/SatriaKalalo?t=Cw7LsJk5J1tWnwMeMB6OCQ&s=09" class="fa-brands fa-x-twitter"></a>
              <a href="https://www.instagram.com/satriadiwangkara/" class="fa-brands fa-instagram"></a>
              <a href="#" class="fa-brands fa-whatsapp"></a>
            </div>
          </div>
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