<?php
session_start();

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    $servername = "localhost";
    $username = "root"; // Ganti dengan username Anda
    $password = ""; // Ganti dengan password Anda
    $dbname = "user_db"; // Ganti dengan nama database Anda

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }

    else {
        $error = "Login gagal. Periksa kembali email dan password.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html Lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Matthew Rarung Website</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" href="style.css">
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</head>



<body>

    <header>
        <div class="container">
        <h1><a href="index.html">Matthew Rarung</a></h1>
        <a href="" class=""></a>
        
            <ul class="nav-items">
                <li class="active"><a href="#utama"  class="nav-link clr-transition">Home</a></li>
                <li><a href="#blog" class="nav-link clr-transition">Blog</a></li>
                <li><a href="#gallery"  class="nav-link clr-transition">Gallery</a></li>
                <li><a href="kontak/contact.html"  class="nav-link clr-transition">Contact</a></li> 
            </ul>
        </div>
    </header>    

    <div id="utama" class="banner">
       <h2>I'm a <span class="text text-kedua">Student</span> from Manado</h2>
    </div>

    <section id="gallery" class="gallery">
        <div class="Container">
            <h3 class="hook-container">Gallery</h3>
        </div>

        <div class="gambar">
            <img src="gambar/foto2.jpeg">
            <div class="deskripsi">Blue Choir🎶 </div>
        </div>

        <div class="gambar">
            <img src="gambar/foto1.jpeg">
            <div class="deskripsi">Boys</div>
        </div>

        <div class="gambar">
            <img src="gambar/foto3.jpeg">
            <div class="deskripsi">Matthew Rarung</div>
        </div>
        
        
    </section>
    <div class="loader"></div>

    <section id="blog" class="blog">
        <h4>Mini Blog</h4>
        <br>
        <div class="blog-container">

            <div class="blog-box">
                <div class="blog-img">
                    <img src = "gambar/seni.jpeg" alt="blog">
                </div>

                <div class="blog-text">
                    <span>21 Mei 2024 / Seni</span>
                    <a href="" class="blog-title">Pembelajaran Seni Rupa Menggali Kreativitas</a>
                    <p>
                        Pembelajaran seni rupa di sekolah umumnya mencakup berbagai aspek, mulai dari pengenalan teknik dasar seperti garis, bentuk, warna, tekstur, hingga pemahaman tentang komposisi dan prinsip desain.</p>
                    <a href="https://www.kompasiana.com/noviawulandarypasaribu0516/662fc293c57afb08d92181e2/pembelajaran-seni-rupa-menggali-kreativitas-ekspresi-seni-dan-pemanfaatan-teknologi-dalam-berkarya-seni">Read More</a>
                </div>
            </div>

            <div class="blog-box">
                <div class="blog-img">
                    <img src = "gambar/teknologi.jpg" alt="blog">
                </div>

                <div class="blog-text">
                    <span>21 Mei 2024 / Teknologi</span>
                    <a href="#" class="blog-title">Teknologi Informasi dan Komunikasi</a>
                    <p>
                        Teknologi merupakan metode ilmiah untuk mencapai tujuan praktis, ilmu pengetahuan terapan, atau keseluruhan sarana untuk menyediakan barang-barang yang diperlukan bagi kelangsungan dan kenyamanan hidup manusia (kbbi.web.id-Juni 2021). 
                    </p>
                    <a href="https://www.djkn.kemenkeu.go.id/kpknl-yogyakarta/baca-artikel/14031/Teknologi-Informasi-dan-Komunikasi-Sebagai-Sarana-Peningkatan-Layanan-di-Masa-Pandemi.html">Read More</a>
                </div>
            </div>

            <div class="blog-box">
                <div class="blog-img">
                    <img src = "gambar/olahraga.jpg" alt="blog">
                </div>

                <div class="blog-text">
                    <span>21 Mei 2024 / Olahraga</span>
                    <a href="#" class="blog-title">Apa manfaat ketika kita berolahraga?</a>
                    <p>
                        Olahraga sangat penting dalam menjaga kebugaran tubuh apalagi bagi seorang pekerja atau yang banyak melakukan aktivitas perlu sekali berolahraga untuk mengimbangi kesehatan dan kebugaran orang tersebut. Seperti artikel yang dikutip dari kompasiana.com, ada beberapa manfaat berolahraga bagi kesehatan tubuh. 
                    </p>
                    <a href="https://www.pn-pariaman.go.id/berita/artikel/652-manfaat-berolahraga-bagi-kesehatan-tubuh.html">Read More</a>
                </div>
            </div>





        </div>
       
    </section>
    <script src="main.js"></script>
</body>

</html>