<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>svckliens.</title>
    <link rel="icon" href="butterfly_head.jpg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    
 
  <!-- nav begin -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">SVCKLIENS</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#article">Article</a>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          </li>
          <!-- Tombol untuk mode gelap dan terang -->
          <li class="nav-item">
            <button id="dark-mode" class="btn btn-dark">🌙 </button>
            <button id="light-mode" class="btn btn-danger">☀</button>
        </li>
        <li class="nav-item">
          <a class="btn btn-danger" href="logout.php">Logout</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--nav end -->
  <!--hero begin -->
  <section id="hero" class="text-center p-5 bg-dark" text-sm-start>
    <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
            <img src="butterfly_head.jpg" class="img-fluid rounded-circle" width="500">
            <div>
                <h1 class="fw-bold display-4">ZERO PRESSURE.</h1>
                <h4 class="lead display-6">greatness happens when you're focused on your flight path.</h4>
                <h6>
                    <span id="tanggal"></span>
                    <span id="jam"></span>
                </h6>
            </div>
        </div>
    </div>
  </section>
  <!-- hero end -->
  <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="produk/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
  <!-- gallery begin -->
  <section id="gallery" class="text-center p-5 bg-dark">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Gallery</h1>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="mathias-reding-NRX0VIQKMSI-unsplash.jpg" class="d-block w-50 mx-auto" width="100" height="auto">
          </div>
          <div class="carousel-item">
            <img src="atul-pandey-TFQxG7quwto-unsplash.jpg" class="d-block w-50 mx-auto"  width="100" height="auto">
          </div>
          <div class="carousel-item">
            <img src="alvaro-polo-wGolqRC2SFQ-unsplash.jpg" class="d-block w-50 mx-auto"  width="100" height="auto">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <!-- gallery end -->
  <!-- footer begin -->
  <footer class="text-center p-3">
    <div>
        <a href="https://www.instagram.com/rendystywn_"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="https://twitter.com/rendystywn_"><i class="bi bi-twitter h2 p-2 text-dark"></i></a>
        <a href="https://wa.me/+6287832051990"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
    </div>
    <div>
        Rendy Setyawan &copy; 2024
    </div>
</footer>
  <!-- footer end -->

  <script type="text/javascript">
    window.setTimeout("tampilWaktu()", 1000);

    function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilWaktu()", 1000);
        document.getElementById("tanggal").innerHTML =
        waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =
        waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
    }
  </script>

<script>
  // Ambil elemen tombol dan teks ikon
  document.addEventListener("DOMContentLoaded", () => {
    const darkButton = document.getElementById('dark-mode');
    const lightButton = document.getElementById('light-mode');
    const body = document.body;
    const sections = document.querySelectorAll('section');

    // Fungsi untuk mengubah ke dark mode
    function setDarkMode() {
        body.style.backgroundColor = 'black';
        body.style.color = 'white';

        sections.forEach(section => {
            section.classList.remove('bg-danger-subtle');
            section.classList.add('bg-secondary');
        });

        localStorage.setItem('mode', 'dark'); // Simpan pengaturan ke localStorage
    }

    // Fungsi untuk mengubah ke light mode
    function setLightMode() {
        body.style.backgroundColor = 'white';
        body.style.color = 'black';

        sections.forEach(section => {
            section.classList.remove('bg-secondary');
            section.classList.add('bg-danger-subtle');
        });

        localStorage.setItem('mode', 'light'); // Simpan pengaturan ke localStorage
    }

    // Cek mode yang terakhir digunakan
    const currentMode = localStorage.getItem('mode');
    if (currentMode === 'dark') {
        setDarkMode();
    } else {
        setLightMode();
    }

    // Event listener untuk tombol mode
    darkButton.addEventListener('click', setDarkMode);
    lightButton.addEventListener('click', setLightMode);
});


</script>

  </body>
</html>
