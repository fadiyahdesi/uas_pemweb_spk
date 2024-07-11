@extends('customer.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-QhZ1gflG1it+Ev+7aFdkwEUU0KdKQAYsLAD0x3E6/4KhOQpKQV1CE6N+fERj8ziRgAvElO69nZlA1Te5W5t06w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<section id="landing" class="d-flex flex-column justify-content-end align-items-center">
  <div id="landingCarousel" class="container carousel carousel-fade" data-ride="carousel">
    <div class="panel">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">WELCOME TO OPTIC FINDER</span></h2>
        <p class="animate__animated fanimate__adeInUp">Dengan senang hati memperkenalkan Anda pada platform kami yang dirancang khusus untuk membantu Anda memilih optik terbaik sesuai kebutuhan dan preferensi Anda. Sistem ini menggunakan metode Analytical Hierarchy Process (AHP).</p>
        <br>
        <a href="/register" class="btn-get-started animate__animated animate__fadeInUp scrollto">SIGN IN/UP</a>
      </div>
    </div>
  </div>
</section>

<main id="main">
  <section id="about" class="about">
    <div class="container">
      <div class="section-title" data-aos="zoom-out">
        <h2>A B O U T</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <h3>OPTIK FINDER</h3>
          <p>
            Sistem pendukung keputusan (SPK) canggih yang dirancang untuk membantu Anda menemukan optik terbaik di daerah Anda. Apakah Anda mencari kacamata berkualitas tinggi, pemeriksaan mata ahli, atau teknologi lensa kontak terbaru, sistem kami menyediakan solusi komprehensif dan mudah digunakan untuk memenuhi kebutuhan Anda.
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> Basis data lengkap dari toko optik</li>
            <li><i class="icofont-check-circled"></i> Penyaringan lanjutan berdasarkan preferensi Anda</li>
            <li><i class="icofont-check-circled"></i> Pembaruan dan ulasan waktu nyata</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h3>Bagaimana OPTIK FINDER Bekerja</h3>
          <p>
            Sistem kami menggunakan algoritma canggih dan analisis data untuk memberi peringkat toko optik berdasarkan beberapa kriteria, memastikan Anda mendapatkan rekomendasi terbaik. Begini caranya:
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> <strong>Pengumpulan Data:</strong> Kami mengumpulkan data lengkap tentang toko optik, termasuk lokasi, layanan yang ditawarkan, ulasan pelanggan, dan penilaian.</li>
            <li><i class="icofont-check-circled"></i> <strong>Evaluasi Kriteria:</strong> Algoritma kami mengevaluasi toko berdasarkan kriteria utama seperti kualitas layanan, berbagai produk, kepuasan pelanggan, dan harga.</li>
            <li><i class="icofont-check-circled"></i> <strong>Rekomendasi yang Dipersonalisasi:</strong> Berdasarkan kebutuhan dan preferensi spesifik Anda, OPTIK FINDER memberikan rekomendasi yang disesuaikan, membantu Anda membuat keputusan yang tepat.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="rumahoptic" class="rumahoptic">
    <div class="container">
      <div class="section-title" data-aos="zoom-out">
        <h2>O P T I C</h2>
      </div>

      <style>
        .metric {
          background-color: #fff;
          padding: 20px;
          text-align: center;
          border-radius: 5px;
          margin-bottom: 20px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          transition: transform 0.3s, box-shadow 0.3s;
        }

        .metric:hover {
          transform: translateY(-10px);
          box-shadow: 0 8px 16px rgba(255, 204, 0, 0.4);
          /* Warna bayangan kekuningan */
          background-color: gold;
          /* Warna kekuningan */
        }

        .icon {
          font-size: 36px;
          color: #ff0;
          margin-bottom: 10px;
        }

        .title {
          font-size: 18px;
          font-weight: bold;
          color: white;
        }

        .bg-black {
          background-color: black;
        }

        .panel-body {
          margin-top: 40px;
        }

        .row {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
        }

        .col-md-4 {
          flex: 0 0 30%;
          max-width: 30%;
          box-sizing: border-box;
          margin-bottom: 20px;
        }
      </style>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-4">
            <div class="metric bg-black" data-aos="fade-up">
              <span class="icon"><i class="fa fa-map-marker-alt"></i></span>
              <p>
                <span class="title">Optik Kustin Tegal</span>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="metric bg-black" data-aos="fade-up" data-aos-delay="100">
              <span class="icon"><i class="fa fa-map-marker-alt"></i></span>
              <p>
                <span class="title">Optik FaVaa</span>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="metric bg-black" data-aos="fade-up" data-aos-delay="200">
              <span class="icon"><i class="fa fa-map-marker-alt"></i></span>
              <p>
                <span class="title">Optik B. Riski Tegal</span>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="metric bg-black" data-aos="fade-up" data-aos-delay="300">
              <span class="icon"><i class="fa fa-map-marker-alt"></i></span>
              <p>
                <span class="title">Optik Tegal Aziz</span>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="metric bg-black" data-aos="fade-up" data-aos-delay="400">
              <span class="icon"><i class="fa fa-map-marker-alt"></i></span>
              <p>
                <span class="title">Optik Melawai</span>
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="fitur" class="fitur">
    <div class="container">
      <div class="section-title" data-aos="zoom-out">
        <h2>F I T U R</h2>
      </div>
      <style>
        .feature-box {
          background-color: #fff;
          padding: 20px;
          text-align: center;
          border-radius: 5px;
          margin-bottom: 20px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-box:hover {
          transform: translateY(-10px);
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .feature-icon {
          font-size: 36px;
          color: yellow;
          margin-bottom: 10px;
        }

        .feature-title {
          font-size: 18px;
          font-weight: bold;
          color: #333;
        }

        .feature-description {
          font-size: 14px;
          color: #777;
        }

        .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 20px;
        }

        .section-title p {
          font-size: 16px;
          color: #555;
          text-align: center;
          margin-bottom: 40px;
        }

        .row {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
        }

        .col-md-6 {
          flex: 0 0 45%;
          max-width: 45%;
          box-sizing: border-box;
          margin-bottom: 20px;
        }

        .col-md-6 .feature-box {
          height: 100%;
        }
      </style>

      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <div class="feature-box" data-aos="fade-up">
              <span class="feature-icon"><i class="fa fa-list-alt"></i></span>
              <p class="feature-title">Kriteria</p>
              <p class="feature-description">Manajemen kriteria untuk proses evaluasi.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-box" data-aos="fade-up" data-aos-delay="100">
              <span class="feature-icon"><i class="fa fa-cube"></i></span>
              <p class="feature-title">Alternatif</p>
              <p class="feature-description">Pengelolaan alternatif yang akan dievaluasi.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-box" data-aos="fade-up" data-aos-delay="200">
              <span class="feature-icon"><i class="fa fa-th-list"></i></span>
              <p class="feature-title">Subkriteria</p>
              <p class="feature-description">Penentuan subkriteria yang lebih spesifik.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-box" data-aos="fade-up" data-aos-delay="300">
              <span class="feature-icon"><i class="fa fa-calculator"></i></span>
              <p class="feature-title">Perhitungan AHP</p>
              <p class="feature-description">Proses perhitungan Analytical Hierarchy Process.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

</main>
@endsection