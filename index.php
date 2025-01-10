<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>svckliens.</title>
    <link rel="icon" href="produk/butterfly_head.jpg" />
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
            <img src="produk/butterfly_head.jpg" class="img-fluid rounded-circle" width="500">
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
    <h1 class="fw-bold display-4 pb-3">Article</h1>
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
<section id="JadwalKuliah" class="container my-5">
        <H3 class="text-center fw-bold mb-5">Jadwal Kuliah & Kegiatan Mahasiswa</H3>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100 bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Senin</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">07:00 - 08:40</h6>
                        <p class="text-dark text-center">
                            Basis Data</p>
                        <p class="text-dark text-center">Ruang H.3.4</p>
                        <h6 class="text-dark text-center">12:30 - 14:10</h6>
                        <p class="text-dark text-center">Technopreneurship</p>
                        <p class="text-dark text-center">Kulino</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100 bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Selasa</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">08:00 - 09:30</h6>
                        <p class="text-dark text-center">
                            Pemrograman Berbasis Web</p>
                        <p class="text-dark text-center">Ruang D.2.A</p>
                        <h6 class="text-dark text-center">14:00 - 16:00</h6>
                        <p class="text-dark text-center">Basis Data</p>
                        <p class="text-dark text-center">Ruang D.3.M</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100 bg-danger text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Rabu</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">10:00 - 12:00</h6>
                        <p class="text-dark text-center">
                            Pemrograman Berbasis Objecj</p>
                        <p class="text-dark text-center">Ruang D.2.A</p>
                        <h6 class="text-dark text-center">13:30 - 15:00</h6>
                        <p class="text-dark text-center">Pemrograman Sisi Server</p>
                        <p class="text-dark text-center">Ruang D.2.A</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100 bg-warning text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kamis</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">08:00 - 10:00</h6>
                        <p class="text-dark text-center">
                            Pengantar Teknologi Informasi</p>
                        <p class="text-dark text-center">Ruang D.3.N</p>
                        <h6 class="text-dark text-center">11:00 - 13:00</h6>
                        <p class="text-dark text-center">Rapat Koordinasi HMTI</p>
                        <p class="text-dark text-center">Ruang Rapat G.1</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
                <div class="card h-100 bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jumat</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">09:00 - 11:00</h6>
                        <p class="text-dark text-center">
                            Data mining</p>
                        <p class="text-dark text-center">Ruang G.2.3</p>
                        <h6 class="text-dark text-center">13:00 - 15:00</h6>
                        <p class="text-dark text-center">Information Retrieval</p>
                        <p class="text-dark text-center">Ruang G.2.4</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card h-100 bg-dark-subtle text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sabtu</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">08:00 - 10:00</h6>
                        <p class="text-dark text-center">
                            Bimbingan Karier</p>
                        <p class="text-dark text-center">Online</p>
                        <h6 class="text-dark text-center">10:30 - 12:00</h6>
                        <p class="text-dark text-center">Bimbingan Skripsi</p>
                        <p class="text-dark text-center">Online</p>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col">
                <div class="card h-100 bg-dark text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Minggu</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <p class="text-dark text-center">Tidak ada jadwal</p>
                        <h6>08:00 - 10:00</h6>
                        <p>Online</p>
                        <h6>10:30 - 12:00</h6>
                        <p>Bimbingan Skripsi</p>
                        <p>Online</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

  <!-- gallery begin -->
  <section id="gallery" class="text-center p-5 bg-dark">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Gallery</h1>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);
        $isActive = true; // Untuk menentukan slide pertama aktif
        while ($row = $hasil->fetch_assoc()) {
        ?>
          <div class="carousel-item <?php if ($isActive) { echo 'active'; $isActive = false; } ?>">
          <div class="d-flex justify-content-center">
          <img src="produk/<?= $row["gambar"] ?>" class="img-fluid" style="max-height: 400px;" alt="Gambar Gallery">
        </div>
            <div class="carousel-caption d-none d-md-block">
              <h5><?= $row["judul"] ?></h5>
              <p><?= $row["tanggal"] ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
      <!-- Kontrol navigasi carousel -->
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
