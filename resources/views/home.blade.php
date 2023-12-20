<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sinergi Bansos | {{ $title }}</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <!-- Poppins Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Font Awesome stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- CSS File -->
  <link href="assets/css/home_style.css" rel="stylesheet">
</head>

<body style="font-family: 'Poppins', sans-serif; color: #444444;">
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <a class="logo me-auto" href="index.html" style="color: azure;">
        <img src={{ asset('assets/img/logo.png') }} alt="" class="img-fluid">
        Sinergi Bansos
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#information">Information</a></li>
          <li><a class="nav-link   scrollto" href="#contact">Contact Us</a></li>
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Sinergi Bansos</h1>
          <h2>Sistem Informasi Pelayanan Biaya Langsung Tunai (BLT)</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-more-info scrollto">Informasi Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('assets/img/donasi.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Sistem Informasi Pelayanan Biaya Langsung Tunai (BLT)
            </p>
            <ul>
              <li><i class="fas fa-square-check"></i> Pengajuan Bantuan</li>
              <li><i class="fas fa-square-check"></i> Penentuan Penerima Bantuan</li>
              <li><i class="fas fa-square-check"></i> Arsip</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Sinergi Bansos adalah sistem informasi yang dirancang untuk mengoptimalkan pengajuan bantuan sosial, menentukan penerima bantuan secara efisien, dan menyediakan sistem arsip untuk memudahkan manajemen data. Tujuannya adalah untuk mencapai pemerataan bantuan sosial dengan lebih efektif.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="information" class="information section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Information</h2>
          <p>Berikut informasi singkat mengenari Bantuan Sosial Biaya Langsung Tunai (BLT)</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <!-- <div class="icon"><i class="fa-regular fa-list"></i></div> -->
              <h5 style="font-size: 24px; color: #37517e;">BLT</h5>
              <p>Bantuan Langsung Tunai (BLT) adalah bantuan yang berasal dari alokasi dana desa pada Anggaran Pendapatan Belanja Desa (APB Desa) yang akan diberikan oleh pemerintah kepada masyarakat yang kehilangan mata pencaharian karena pandemik virus corona atau Covid-19.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
              <h5 style="font-size: 24px; color: #37517e;">Syarat dan Ketentuan Penerima</h5>
              <ul>
                <li>Masyarakat miskin atau rawan miskin yang memiliki KTP.</li>
                <li>Bukan termasuk anggota PNS, Polri dan TNI.</li>
                <li>Gaji maksimal Rp3,5 juta bagi penerima yang bekerja</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Kontak kami untuk informasi lebih lanjut</p>
          @include('message.alert')
        </div>

        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="fas fa-location-crosshairs"></i>
                <h4 style="font-size: 20px; color: #37517e; padding: 0 0 0 60px;">Location</h4>
                <p style="padding: 0 0 10px 60px; font-size: 14px; color: #6182ba;">Jl. Lingkar Maskumambang No.1, Sukorame, Kec. Mojoroto Kota Kediri Jawa Timur</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4 style="font-size: 20px; color: #37517e; padding: 0 0 0 60px;">Email</h4>
                <p style="padding: 0 0 10px 60px; font-size: 14px; color: #6182ba;">pbl.bansos@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4 style="font-size: 20px; color: #37517e; padding: 0 0 0 60px;">Telephone</h4>
                <p style="padding: 0 0 10px 60px; font-size: 14px; color: #6182ba;">085 111 222 33</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
             <form action="{{ route('pesan.store') }}" method="POST" class="kontak-pesan"> 
                 @csrf 
                <h4 class="keterangan-form text-center mb-2" style="font-size: 18px; color: #37517e;">Isi formulir untuk memberikan laporan atau pesan</h4>
                <div class="form-group mt-4">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
                  @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group mt-2">
                  <label for="email">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                  @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror                
                </div>
              <div class="form-group mt-2">
                <label for="isi">Pesan</label>
                <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" id="isi" rows="10"></textarea>
                @error('isi')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror              
              </div>
              <div class="text-center mt-4">
                <button type="submit">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer">
    <div class="container footer-text">
      <div class="copyright">
        &copy; Copyright <strong><span>Manajemen Informatika 2E 2023</span></strong>. All Rights Reserved
      </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-b4gtTkp1zfV1Bpy5Fb1TKtL6Q5/JpOW0g5SRBpftjLXQcteq+6pndABbF9bejGdfo" crossorigin="anonymous"></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>