<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Alumni Perkuliahan - Universitas Esa Unggul</title>
  <meta name="description" content="Halaman Alumni Perkuliahan Universitas Contoh. Temukan kisah sukses para alumni dan inspirasi dari perjalanan karier mereka.">
  <meta name="keywords" content="Alumni, Mahasiswa, Perkuliahan, Universitas, Cerita Alumni, Karier, Testimoni">

  <!-- Favicons -->
  <link href="{{ asset('front/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: AlumniKu
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Updated: Oct 16 2024 dengan Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * Lisensi: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Jika ingin menggunakan logo gambar, bisa aktifkan baris di bawah ini -->
      <!-- <img src="{{ asset('front/assets/img/logo.png') }}" alt=""> -->
      <h1 class="sitename">AlumniKU</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#beranda" class="active">Beranda</a></li>
        <li><a href="#tentang">Tentang Alumni</a></li>
        <li><a href="#alumni">Data Alumni</a></li>
        <li><a href="#kisah">Kisah Inspiratif</a></li>
        <li><a href="#event">Acara</a></li>
        <li><a href="#berita">Berita</a></li>
        <li class="dropdown"><a href="#"><span>Lainnya</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="#testimoni">Testimoni</a></li>
            <li><a href="#faq">FAQ</a></li>
          </ul>
        </li>
        <li><a href="#kontak">Kontak</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="cta-btn" href="#registrasi">Daftar Alumni</a>

  </div>
</header>


<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <img src="{{ asset('front/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center text-center">
      <h2 data-aos="fade-up" data-aos-delay="100">Selamat Datang di Portal Alumni</h2>
      <p data-aos="fade-up" data-aos-delay="200">Komunitas Alumni yang Terhubung dan Berprestasi</p>
      <div data-aos="fade-up" data-aos-delay="300">
        <a href="#kisah" class="glightbox pulsating-play-btn" title="Lihat Kisah Alumni"></a>
      </div>
    </div>

  </section>

  <!-- About Alumni -->
  <section id="tentang" class="about section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Tentang Kami</h2>
      <p>Portal ini dibuat untuk mempererat silaturahmi, berbagi informasi, dan mendukung karir alumni di berbagai bidang.</p>
    </div>
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <p>Melalui portal alumni ini, kami ingin membangun komunitas yang solid, saling berbagi peluang kerja, dan memperkenalkan kisah sukses alumni ke masyarakat luas.</p>
          <ul>
            <li><i class="bi bi-check2-circle"></i> <span>Database alumni aktif dan terus diperbarui.</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Forum diskusi dan mentoring karir.</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Event reuni dan jejaring profesional.</span></li>
          </ul>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <p>Kami percaya bahwa alumni memiliki peran penting sebagai duta kampus di dunia profesional dan sosial.</p>
          <a href="#alumni" class="read-more"><span>Data Alumni</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Layanan Alumni -->
  <section id="layanan" class="services section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Layanan Alumni</h2>
      <p>Beragam fasilitas dan layanan untuk mendukung alumni</p>
    </div>
    <div class="container">
      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item">
            <div class="icon"><i class="bi bi-people"></i></div>
            <h3>Data Alumni</h3>
            <p>Akses database alumni untuk memperluas jejaring dan kolaborasi.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item">
            <div class="icon"><i class="bi bi-chat-dots"></i></div>
            <h3>Forum Alumni</h3>
            <p>Diskusi seputar karir, bisnis, dan pengalaman setelah lulus.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h3>Konsultasi Karir</h3>
            <p>Mendapatkan bimbingan dari alumni senior di berbagai bidang.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Statistik Alumni -->
  <section id="stats" class="stats section dark-background">
    <img src="{{ asset('front/assets/img/stats-bg.jpg')}}" alt="" data-aos="fade-in">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="subheading">
        <h3>Statistik Alumni</h3>
        <p>Berikut data sebaran alumni hingga saat ini:</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100">
            <span data-purecounter-start="0" data-purecounter-end="1500" class="purecounter"></span>
            <p>Alumni Terdaftar</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100">
            <span data-purecounter-start="0" data-purecounter-end="300" class="purecounter"></span>
            <p>Alumni Berwirausaha</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100">
            <span data-purecounter-start="0" data-purecounter-end="500" class="purecounter"></span>
            <p>Alumni di Dunia Industri</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100">
            <span data-purecounter-start="0" data-purecounter-end="50" class="purecounter"></span>
            <p>Event Alumni</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Kisah Alumni -->
  <section id="kisah" class="portfolio section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Kisah Alumni</h2>
      <p>Kumpulan cerita inspiratif dari alumni yang sukses di berbagai bidang</p>
    </div>
    <div class="container">
      <!-- Bisa pakai card atau masonry layout di sini -->
      <p class="text-center">Kisah alumni akan ditampilkan di sini dalam bentuk galeri atau artikel.</p>
    </div>
  </section>

  <!-- Keanggotaan Alumni -->
  <section id="keanggotaan" class="pricing section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Jenis Keanggotaan</h2>
      <p>Pilih jenis keanggotaan sesuai kebutuhan alumni</p>
    </div>
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Alumni Umum</h3>
            <h4>Gratis</h4>
            <ul>
              <li>Akses Forum</li>
              <li>Database Alumni</li>
              <li class="na">Konsultasi Karir</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item recommended">
            <span class="recommended-badge">Rekomendasi</span>
            <h3>Alumni Premium</h3>
            <h4>Rp 50.000 / Tahun</h4>
            <ul>
              <li>Akses Forum & Database</li>
              <li>Konsultasi Karir</li>
              <li>Prioritas Event</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Berita Terbaru -->
  <section id="berita" class="recent-posts section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Berita Alumni</h2>
      <p>Informasi terbaru seputar kegiatan dan prestasi alumni</p>
    </div>
    <div class="container">
      <p class="text-center">Berita alumni akan ditampilkan di sini dalam bentuk blog atau card berita.</p>
    </div>
  </section>

  <!-- Kontak -->
  <section id="kontak" class="contact section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Kontak</h2>
      <p>Hubungi pengurus alumni jika ingin bergabung atau ada pertanyaan</p>
    </div>
    <div class="container">
      <p class="text-center">Email: alumni@example.com | Telp: 0812-xxxx-xxxx</p>
    </div>
  </section>

</main>


<footer id="footer" class="footer dark-background">
  <div class="container text-center">
    <h3 class="sitename">AlumniKu</h3>
    <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>

    <div class="social-links d-flex justify-content-center mb-3">
      <a href="#"><i class="bi bi-twitter-x"></i></a>
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
      <a href="#"><i class="bi bi-skype"></i></a>
      <a href="#"><i class="bi bi-linkedin"></i></a>
    </div>

    <div class="copyright">
      &copy; <strong class="px-1 sitename">AlumniKu</strong> All Rights Reserved
    </div>

    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | Distributed by <a href="https://themewagon.com">ThemeWagon</a>
    </div>
  </div>
</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('front/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset ('front/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset ('front/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset ('front/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset ('front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset ('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset ('front/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset ('front/assets/js/main.js')}}"></script>

</body>

</html>