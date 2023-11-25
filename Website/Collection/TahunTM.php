<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="TahunTM.css">
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
                <li><a class="teks1" href="http://localhost/SatriaKalalo/Website/navbar.php">Home</a></li>
                <li><a class="teks2" href="http://localhost/SatriaKalalo/Website/collection.php" class="active">Collection</a></li>
                <li><a class="teks3" href="http://localhost/SatriaKalalo/Website/major.php">Major</a></li>
                <li><img  id="profile-picture" src="logo_mutu_png_transparant-removebg-preview-1.png" alt="Hack"></li>
            </ul>
        </nav>
      <div class="balok">
        <div class="ukuran-klik">
          2024
        </div>
        <div class="ukuran-klik">
          2023
        </div>
        <div class="ukuran-klik" id="T2022">
          2022
        </div>
        <div class="ukuran-klik">
          2021
        </div>
        <div class="ukuran-klik">
          2020
        </div>
        <div class="ukuran-klik">
          2019
        </div>
      </div>
    </div>
</body>
  <script>
    document.getElementById('profile-picture').addEventListener(
      'click', function()
      {
        window.location.href = 'http://localhost/SatriaKalalo/Website/Profile.php';
      });

      var T2022 = document.getElementById('T2022');
      T2022.addEventListener('click', function()
      {
        window.location.href = 'Tahun/2022TM.php';
      }
      );
  </script>
</html>