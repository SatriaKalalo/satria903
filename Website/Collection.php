<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Collection.css">
    <title>Document</title>
</head>

<body>
    <div class="FContainer">
        <nav class="wrapper">
            <div class="brand">
                <div class="Nama1">Smkmutuckp</div>
                <div class="Nama2">.Id</div>
            </div>
            <ul class="navigation">
                <li><a href="navbar.php">Home</a></li>
                <li><a href="Collection.php" class="active">Collection</a></li>
                <li><a href="major.php">Major</a></li>
                <li><img id="profile-picture" src="logo_mutu_png_transparant-removebg-preview-1.png" alt="Foto Profile"></li>
            </ul>
        </nav>
        <div class="body1">
            <div class="container">
                <div class="kartu" style="--clr:#0f0">
                    <div class="imgBx">
                        <img src="LOGO_PPLG-removebg-preview.PNG" alt="">
                    </div>
                    <div class="konten">
                        <h2>PPLG </h2>
                        <a href="Collection/TahunRPL.php" style="background:#0f0">Lihat ></a>
                    </div>
                </div>
                <div class="kartu" style="--clr:#ff0">
                    <div class="imgBx">
                        <img src="Logo_eskul_B.IINGGRIS-removebg-preview.PNG" alt="">
                    </div>
                    <div class="konten">
                        <h2>TBSM</h2>
                        <a href="Collection/TahunTBSM.php" style="background:#ff0">Lihat ></a>
                    </div>
                </div>
                <div class="kartu" style="--clr:#008000">
                    <div class="imgBx">
                        <img src="LOGO_PPLG-removebg-preview.PNG" alt="">
                    </div>
                    <div class="konten">
                        <h2>TKJ</h2>
                        <a href="Collection/TahunTKJ.php" style="background:#008000">Lihat ></a>
                    </div>
                </div>
                <div class="kartu" style="--clr:#036494">
                    <div class="imgBx">
                        <img src="LOGO_PPLG-removebg-preview.PNG" alt="">
                    </div>
                    <div class="konten">
                        <h2>TO</h2>
                        <a href="Collection/TahunTO.php" style="background:#036494">Lihat ></a>
                    </div>
                </div>
                <div class="kartu" style="--clr:#964b00">
                    <div class="imgBx">
                        <img src="LOGO_PPLG-removebg-preview.PNG" alt="">
                    </div>
                    <div class="konten">
                        <h2>MPLB</h2>
                        <a href="Collection/TahunMPLB.php" style="background:#964b00">Lihat ></a>
                    </div>
                </div>
                <div class="kartu" style="--clr:#ff0000">
                    <div class="imgBx">
                        <img src="LOGO_PPLG-removebg-preview.PNG" alt="">
                    </div>
                    <div class="konten">
                        <h2>TM</h2>
                        <a href="Collection/TahunTM.php" style="background:#ff0000">Lihat ></a>
                    </div>
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