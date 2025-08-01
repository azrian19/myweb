<?php include 'footer.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami | MyWebsite</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>

<header class="navbar">
    <div class="logo">MyWebsite</div>
    <nav>
        <ul class="nav-links">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="about.php" class="active">Tentang</a></li>
            <li><a href="index.php#services">Layanan</a></li>
            <li><a href="index.php#contact">Kontak</a></li>
        </ul>
    </nav>
    <!-- Tombol Dark Mode -->
    <button id="darkModeToggle" title="Dark Mode" class="dark-toggle">
        <i class="ri-moon-line"></i>
    </button>
</header>

<section class="about" style="min-height: 80vh;">
    <div class="container">
        <h2 data-aos="fade-up">Tentang Kami</h2>
        <p data-aos="fade-up" data-aos-delay="150">
            MyWebsite adalah platform digital yang dibangun oleh tim profesional dengan tujuan membantu bisnis Anda memiliki identitas digital yang kuat. 
            Kami mengutamakan keamanan, kecepatan, dan kemudahan penggunaan dalam setiap proyek yang kami kerjakan.
        </p>
        <br>
        <p data-aos="fade-up" data-aos-delay="300">
            Fokus utama kami adalah membangun website dengan pendekatan modern, menggunakan teknologi open source seperti PHP, Docker, dan framework CSS ringan. 
            Kami juga memberikan layanan konsultasi dan pendampingan untuk pengembangan jangka panjang.
        </p>
    </div>
</section>

<?php include 'footer.php'; ?>

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
</body>
</html>
