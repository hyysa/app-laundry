<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laundry 5758</title>

    <!-- Style link -->
    @vite([
        "resources/css/app.css",
        "resources/scss/app.scss",
        "resources/js/app.js",
    ])

    {{-- AOS CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Scrollbar Setting --}}
    <style>
      html::-webkit-scrollbar {
        width: 1vw;
      }
      html::-webkit-scrollbar-thumb{
        background: rgb(37, 37, 37);
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
    <!-- Navigation bar -->
    <header>
      <a href="#" class="logo" data-aos="fade-down">Laundry 5758</a>
      <ul class="nav">
        <li data-aos="fade-down" data-aos-delay="50"><a href="#home">Home</a></li>
        <li data-aos="fade-down" data-aos-delay="100"><a href="#about">About</a></li>
        <li data-aos="fade-down" data-aos-delay="150"><a href="#system">System</a></li>
        <li data-aos="fade-down" data-aos-delay="200"><a href="#contact">Contact</a></li>
      </ul>
    </header>

    <!-- Landing Page -->
    <section class="home" id="home">
      <div class="content">
        <h2 data-aos="fade-up">Laundry 5758</h2>
        <p  data-aos="fade-up" data-aos-delay="100">
            Laundry 5758 adalah layanan laundry yang menonjolkan komitmen terhadap kebersihan, kehandalan, dan kualitas dalam merawat pakaian Anda.
          <br />
          Silahkan klik tombol dibawah ini untuk memesan layanan!
        </p>
        <a href="pages/order" class="btn-1" data-aos="fade-up" data-aos-delay="200">Order</a>
      </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
      <div class="container">
        <!-- about item -->
        <div class="row">
          <div class="col50" data-aos="fade-right">
            <div class="titleText"><span>A</span>bout Us</div>
            <p>
              Laundry 5758 adalah jasa laundry profesional yang berlokasi di Jl.
              Panglima Sudirman No.27A, Ngambak, Beru, Kec. Wlingi, Kabupaten
              Blitar, Jawa Timur 66184. Kami berdiri sejak tahun 2023 dan telah
              melayani ratusan pelanggan dari berbagai kalangan. Kami
              berkomitmen untuk memberikan layanan laundry yang berkualitas dan
              memuaskan. Kami menggunakan peralatan dan bahan-bahan yang
              berkualitas untuk memastikan kebersihan dan keamanan pakaian Anda.
              Selain itu, kami juga memiliki tim profesional yang berpengalaman
              dan terlatih untuk mencuci, mengeringkan, dan menyetrika pakaian
              Anda dengan hati-hati
            </p>
          </div>
          <div class="col50" data-aos="fade-left">
            <div class="imgBx">
              <img src="image/about.jpg" alt="about" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col50" data-aos="fade-left">
            <p>
              Laundry 5758 menawarkan berbagai macam layanan laundry, mulai dari
              laundry kiloan, laundry satuan, laundry sepatu, laundry korde, dan
              laundry bed cover. Laundry 5758 juga menggunakan bahan-bahan
              pembersih yang berkualitas dan aman untuk pakaian. Laundry 5758
              memiliki tim yang profesional dan berpengalaman di bidang laundry.
              Tim Laundry 5758 selalu mengutamakan kepuasan pelanggan dan selalu
              berusaha memberikan layanan terbaik. Laundry 5758 buka setiap hari
              mulai pukul 07.00 WIB hingga pukul 21.00 WIB. Untuk informasi
              lebih lanjut, Anda dapat menghubungi Laundry 5758 di nomor telepon
              0813-3477-9697.
            </p>
          </div>
          <div class="col50" data-aos="fade-right">
            <div class="imgBx">
              <img src="image/about2.jpg" alt="about2" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col50" data-aos="fade-right">
            <p>
              Kami berkomitmen untuk memberikan layanan laundry yang terbaik
              bagi pelanggan kami. Kami percaya bahwa pelanggan adalah prioritas
              utama kami. Oleh karena itu, kami selalu berupaya untuk
              meningkatkan kualitas layanan kami agar pelanggan merasa puas.
              Jika Anda sedang mencari jasa laundry yang profesional dan
              berkualitas, Laundry 5758 adalah pilihan yang tepat untuk Anda.
              Kami siap melayani Anda dengan sepenuh hati.
            </p>
          </div>
          <div class="col50" data-aos="fade-left">
            <div class="imgBx">
              <img src="image/about3.jpg" alt="about3" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- System Section -->
    <section class="system" id="system">
      <div class="container">
        <div class="title" data-aos="fade-up">
          <h2 class="titleText">Our <span>S</span>ystem</h2>
          <p>Sistem organisasi pada Oxy Shoes Care</p>
        </div>

        <div class="row">
          <div class="timeline">
            <div class="row">
              <!-- Timeline item -->
              <div class="timeline-item">
                <div class="timeline-item-inner" data-aos="fade-right">
                  <i class="icon"></i>
                  <span>Administration</span>
                  <h4>Admin</h4>
                  <p>
                    Bertanggung jawab pada koordinasi dan pengelolaan berbagai
                    aspek administratif yang mendukung operasional jasa laundry
                    5758.
                  </p>
                </div>
              </div>

              <div class="timeline-item">
                <div class="timeline-item-inner" data-aos="fade-left">
                  <i class="icon"></i>
                  <span>Washing Stage</span>
                  <h4>Washing Attendant</h4>
                  <p>Bertugas mencuci dan perawatan pakain atau sepatu.</p>
                </div>
              </div>

              <div class="timeline-item">
                <div class="timeline-item-inner" data-aos="fade-right">
                  <i class="icon"></i>
                  <span>Packaging Stage</span>
                  <h4>Packaging Officer</h4>
                  <p>
                    Bertugas mengemas pakaian yang sudah dicuci dan siap dikirim
                    ke pelanggan / pemilik.
                  </p>
                </div>
              </div>

              <div class="timeline-item">
                <div class="timeline-item-inner" data-aos="fade-left">
                  <i class="icon"></i>
                  <span>Delivery Stage</span>
                  <h4>Delivery Officer</h4>
                  <p>
                    Bertugas mengatarkan laundry yang sudah dicuci dan dikemas
                    kepada pelanggan / pemilik.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="title" data-aos="fade-up">
          <h2 class="titleText">Contact <span>U</span>s</h2>
          <p>
            Jika ada pertanyaan, silahkan kirimkan pesan melalu form di bawah
            ini.
          </p>
        </div>

        <div class="box">
          <div class="containerForm" data-aos="fade-right" data-aos-delay="100">
            <h3>Send Message</h3>
            <form id="contactForm" action="{{ route('contact.store') }}" method="post">
              @csrf
              <div class="inputBox" data-aos="fade-right" data-aos-delay="150">
                <input type="text" name="name" id="name" placeholder="Name" />
              </div>
              <div class="inputBox"  data-aos="fade-right" data-aos-delay="200">
                <input type="text" name="email" id="email" placeholder="Email" />
              </div>
              <div class="inputBox" data-aos="fade-right" data-aos-delay="250">
                <textarea id="message" name="message" placeholder="Message"></textarea>
              </div>
              <div class="inputBox" data-aos="fade-right" data-aos-delay="300">
                <input
                  type="submit"
                  class="btn"
                  value="Send"
                />
              </div>
            </form>
          </div>

          <div class="map" data-aos="fade-left">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.161216094055!2d112.31246337505537!3d-8.085035891943372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e789363f6d3f5f1%3A0xdd363790b5a10e12!2sLaundry%205758!5e0!3m2!1sid!2ssg!4v1704104554823!5m2!1sid!2ssg"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>

          <div class="icon-container" data-aos="fade-up">
            <div class="icons" data-aos="fade-up" data-aos-delay="100">
              <span>Address :</span>
              <p>Ngambak, Blitar, Indonesia</p>
            </div>
            <div class="icons" data-aos="fade-up" data-aos-delay="200">
              <span>E-mail :</span>
              <p>laundry.5758@gmail.com</p>
            </div>
            <div class="icons" data-aos="fade-up" data-aos-delay="300">
              <span>Phone :</span>
              <p>0813-3477-9697</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Copyright -->
    <div class="cp">
      <p>
        Copyright &copy; 2023 <a href="#">Kelompok 2</a>. All rights
        reserved.
      </p>
    </div>

    <!--AOS JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <script>
      AOS.init({
        duration:800,
      })
    </script>
  </body>
</html>