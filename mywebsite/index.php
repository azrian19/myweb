<?php
// index.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebsite</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">MyWebsite</div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
        <button id="darkModeToggle" title="Dark Mode" class="dark-toggle">
        <i class="ri-moon-line"></i>
        </button>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content" data-aos="fade-up">
            <h1>Membangun Masa Depan Digital</h1>
            <p>Website aman, cepat, dan profesional dengan teknologi modern</p>
            <a href="#services" class="cta-button">Lihat Layanan</a>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="about" id="about">
        <div class="container">
            <h2 data-aos="fade-right">Tentang Kami</h2>
            <p data-aos="fade-up">Kami adalah tim developer yang berdedikasi untuk membangun solusi web yang kuat, aman, dan responsif untuk semua kebutuhan bisnis Anda.</p>
        </div>
    </section>

    <!-- Layanan -->
    <section class="services" id="services">
        <div class="container">
            <h2 data-aos="fade-left">Layanan Kami</h2>
            <div class="service-cards">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <i class="ri-shield-check-line"></i>
                    <h3>Keamanan Aplikasi</h3>
                    <p>Melindungi website dari serangan dan kebocoran data.</p>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <i class="ri-layout-4-line"></i>
                    <h3>UI/UX Design</h3>
                    <p>Tampilan yang estetis dan pengalaman pengguna yang mulus.</p>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <i class="ri-server-line"></i>
                    <h3>Hosting & Server</h3>
                    <p>Deploy website Anda di server cepat dan aman.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
<section class="testimonials">
    <div class="container">
        <h2 data-aos="fade-up">Apa Kata Klien Kami</h2>
        <div class="testimonial-cards">
            <div class="testimonial" data-aos="fade-up" data-aos-delay="100">
                <p>"Pelayanan luar biasa dan cepat tanggap."</p>
                <strong>- Budi, CEO Startup</strong>
            </div>
            <div class="testimonial" data-aos="fade-up" data-aos-delay="200">
                <p>"Timnya profesional, hasilnya memuaskan!"</p>
                <strong>- Sari, Owner Toko Online</strong>
            </div>
        </div>
    </div>
</section>


    <!-- Kontak Kami -->
<section class="contact" id="contact">
    <div class="container">
        <h2 data-aos="fade-up">Hubungi Kami</h2>
        <form action="proses_kontak.php" method="POST" class="contact-form" data-aos="fade-up" data-aos-delay="200">
            <input type="text" name="nama" placeholder="Nama Anda" required>
            <input type="email" name="email" placeholder="Email Anda" required>
            <textarea name="pesan" placeholder="Tulis pesan Anda di sini..." rows="5" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</section>

<!-- FAQ -->
<section class="faq">
  <div class="container">
    <h2>Pertanyaan Umum</h2>
    <div class="accordion">
      <div class="faq-item">
        <button class="faq-question">Bagaimana cara memesan layanan?</button>
        <div class="faq-answer">Silakan hubungi kami melalui form kontak di bawah atau WhatsApp.</div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Apakah bisa request desain custom?</button>
        <div class="faq-answer">Tentu! Kami siap bantu sesuai kebutuhan Anda.</div>
      </div>
    </div>
  </div>
</section>


    <!-- Footer Include -->
    <?php include 'footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            offset: 150,
            once: true,
        });
    </script>
    <script>
    const toggle = document.getElementById('darkModeToggle');
    toggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
    </script>
    <!-- Scroll to Top Button -->
<button id="toTopBtn" title="Kembali ke atas">↑</button>

<!-- JS -->
<script>
  const toTopBtn = document.getElementById("toTopBtn");
  window.onscroll = function () {
    toTopBtn.style.display = window.scrollY > 200 ? "block" : "none";
  };
  toTopBtn.onclick = function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };

  const questions = document.querySelectorAll(".faq-question");
  questions.forEach((q) => {
    q.addEventListener("click", () => {
      const answer = q.nextElementSibling;
      answer.style.display = answer.style.display === "block" ? "none" : "block";
    });
  });
</script>

</body>
</html>
