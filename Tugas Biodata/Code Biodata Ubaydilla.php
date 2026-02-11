<?php
// ==========================================
// BAGIAN 1: VARIABEL & LOGIKA PHP
// ==========================================

// --- Data Diri ---
 $nama_lengkap = "Ubaydilla Alvaro Gibran Syahpalevi";
 $nama_panggilan = "Ubay";
 $agama = "Islam";
 $tempat_lahir = "Kabupaten Semarang";
 $tanggal_lahir = 07;
 $bulan_lahir = "November";
 $tahun_lahir = 2009;
 $alamat = "Jl. Merdeka No. 13 RT 02 RW 04, Beji, Ungaran Timur, Kabupaten Semarang";
 $gender = "Laki-laki";
 $kewarganegaraan = "Indonesia";
 $no_wa = "085290649623";
 $email = "deepyhappy@gmail.com";
 $foto = "Ubay.jpg";
 $motto = "Ragumu Rugimu.";

// --- Perhitungan Umur & Waktu ---
 $tahun_sekarang = date("Y");
 $umur = $tahun_sekarang - $tahun_lahir;
 $tahun_mendatang = $tahun_sekarang + 10;
 $umur_mendatang = $umur + 10;

// --- Teks Keinginan 10 Tahun Lagi ---
 $teks_keinginan = "Hai namaku $nama_panggilan, saat ini tahun $tahun_sekarang, aku adalah seorang $gender yang berumur $umur tahun. 10 tahun lagi di tahun $tahun_mendatang, di umur $umur_mendatang tahun, aku adalah seorang musisi indie atau game developer indie. Aku ingin membuat game dan musik serta membangun komunitas di media sosial. Rencana yang akan aku tempuh adalah lulus kuliah dengan IPK cumlaude, magang di perusahaan besar, dan terus belajar teknologi terbaru.";

// --- Data Array ---
 $hobi = ["Game", "Main Bola", "Membuat Kesenian (musik, gambar, cerita)", "Tidur"];
 $makanan_favorit = ["Mie Ayam", "Nasi Goreng", "Rendang", "Bakso"];
 $minuman_favorit = ["Es Teh Manis", "Kopi Susu", "Thai Tea + Boba", "Air Mineral"];

 $skills = [
    "Editing" => 80,
    "Olahraga" => 90,
    "Coding" => 50,
    "Desain Grafis" => 90
];

 $riwayat_pendidikan = [
    ["tingkat" => "SD", "sekolah" => "SDN Sidomulyo 03", "mulai" => "2016", "lulus" => "2022"],
    ["tingkat" => "SMP", "sekolah" => "SMPN 2 Ungaran", "mulai" => "2022", "lulus" => "2025"],
    ["tingkat" => "SMA/SMK", "sekolah" => "SMKN 8 Semrang", "mulai" => "2025", "lulus" => "2028"],
];

// --- Jadwal Pelajaran (Senin - Jumat, Jam 1-10) ---
// Senin, Selasa, Rabu, Kamis, Jumat
 $jadwal_pelajaran = [
    1 => ["B. Inggris", "Matematika ", "Agama", "B. Inggris", "IPAS"],
    2 => ["B. Inggris", "Matematika ", "Agama", "B. Inggris", "IPAS"],
    3 => ["Informatika", "Seni Musik", "Agama", "PGD 2", "Matematika "],
    4 => ["Informatika", "Seni Musik", "Olahraga", "PGD 2", "Matematika "],
    5 => ["KKA", "IPAS", "Olahraga", "PGD 2", "PPS"],
    6 => ["KKA", "IPAS", "Olahraga", "PGD 2", "PPS"],
    7 => ["GIM", "IPAS", "B. Jawa", "PGD 1", "B. Indonesia"],
    8 => ["GIM", "IPAS", "B. Jawa", "PGD 1", "B. Indonesia"],
    9 => ["GIM", "B. Indonesia", "Sejarah", "PGD 1"],
    10 => ["GIM", "B. Indonesia", "Sejarah", "PGD 1"]
];

// --- Jadwal Piket (Highlight Nama) ---
 $piket_kelas = [
    "Senin" => ["Cahaya", "Fanezza", "Azka", "Aca", "Nafiu", "Rama", "Ridwan"],
    "Selasa" => ["Syarif", "Teo", "Zidni", "Love", "Diva", "Angel", "Galuh"],
    "Rabu" => ["Matha", "Kirey", "Oliv", "Nashwa", "Ines", "Reizo", "Alfarizi"], 
    "Kamis" => ["Jihan", "Bunga", "Tata", "Valen", "Qais", "Jason", "Gavian"],
    "Jumat" => ["Virda", "Alin", "Windy","Nove", "$nama_panggilan", "Kael", "Leon", "Ihsan"] // Nama panggilan juga ada di sini
];

// --- Logika Navigasi Halaman ---
 $page = isset($_GET['page']) ? $_GET['page'] : 'biodata';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata & Jadwal <?php echo $nama_panggilan; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* ==========================================
           BAGIAN 2: CSS (STYLING KREATIF)
           ========================================== */
        :root {
            --primary: #880808;     
            --secondary: #C41E3A;
            --accent: #6E260E;
            --text: #1a202c;
            --card-bg: rgba(255, 255, 255, 0.85); 
            --glass-blur: 10px;
            --highlight: #0f0000;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            /* --- KODE BACKGROUND GAMBAR --- */
            background-image: url('bg.jpg'); 
            background-size: cover;        
            background-position: center;    
            background-attachment: fixed;
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
        }

        /* --- Header & Navigation --- */
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1rem 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 20px;
            transition: background 1s;
        }

        nav a:hover, nav a.active {
            background-color: rgba(255,255,255,0.2);
        }

        /* --- Marquee Motto --- */
        .marquee-container {
            background-color: var(--highlight);
            color: white;
            overflow: hidden;
            white-space: nowrap;
            padding: 10px 0;
            position: relative;
        }

        .marquee-content {
            display: inline-block;
            animation: scroll-left 15s linear infinite;
            padding-left: 100%;
            font-weight: bold;
            font-size: 1.1rem;
        }

        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        /* --- Main Container --- */
        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }

               /* --- Profile Section --- */
        .profile-card {
            display: flex;
            flex-wrap: wrap;
            /* Gunakan var(--card-bg) yang sudah kita ubah di atas */
            background: var(--card-bg); 
            border-radius: 15px;
            
            /* --- TAMBAHKAN INI: Efek Kaca --- */
            backdrop-filter: blur(var(--glass-blur)); 
            -webkit-backdrop-filter: blur(var(--glass-blur)); /* Untuk browser Chrome/Safari */
            border: 1px solid rgba(255, 255, 255, 0.3); /* Garis tipis agar terlihat elegan */
            /* ----------------------------- */
            
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2); /* Bayangan halus */
            overflow: hidden;
            margin-bottom: 30px;
        }

        .profile-img img {
            width: 100%;            /* Mengikuti lebar wadah */
            height: auto;           /* Tinggi otomatis menyesuaikan rasio */
            max-width: 220px;       /* <--- BATASAN UKURAN FOTO: Ubah angka 220 ini jika mau lebih kecil/besar */
            
            border-radius: 0;       /* Sesuai permintaanmu sebelumnya (persegi) */
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .profile-img {
            flex: 1 1 220px;        /* Lebar minimum 220px */
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.3); /* Latar belakang sedikit transparan */
        }
        
        /* --- Content Sections (Lists, Tables, Skills) --- */
        .section-box {
            background: var(--card-bg);
            padding: 25px;
            border-radius: 15px;
            backdrop-filter: blur(var(--glass-blur));
            -webkit-backdrop-filter: blur(var(--glass-blur));
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            margin-bottom: 30px;
        }

        /* 10 Tahun Ke Depan */
        .future-box {
            background-color: #e0fbfc;
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid var(--primary);
            font-style: italic;
        }

        /* Lists */
        .list-group {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }
        
        .list-col {
            flex: 1;
            min-width: 250px;
        }

        ul.square-list { list-style-type: square; padding-left: 20px; }
        ol.num-list { list-style-type: decimal; padding-left: 20px; }
        ol.alpha-list { list-style-type: upper-alpha; padding-left: 20px; }
        li { margin-bottom: 5px; }

        /* Skills */
        .skill-container { margin-bottom: 15px; }
        .skill-header { display: flex; justify-content: space-between; margin-bottom: 5px; font-weight: bold; }
        .progress-bar {
            height: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            overflow: hidden;
        }
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--accent), var(--primary));
            border-radius: 5px;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: var(--primary);
            color: white;
            text-align: center;
        }

        tr:nth-child(even) { background-color: #f8f9fa; }
        tr:hover { background-color: #e9ecef; }

        /* Jadwal Table Specifics */
        .jadwal-table th, .jadwal-table td {
            text-align: center;
            font-size: 0.9rem;
        }
        .jam-col { background-color: #e9ecef; font-weight: bold; }

        /* Piket Highlight */
        .highlight-name {
            background-color: #ffbe0b;
            color: #000;
            font-weight: bold;
            padding: 2px 5px;
            border-radius: 4px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            color: #6c757d;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .profile-card { flex-direction: column; }
            .profile-img { padding: 20px; }
            .list-group { flex-direction: column; }
            .jadwal-table { display: block; overflow-x: auto; }
        }
    </style>
</head>
<body>

    <!-- Header & Marquee -->
    <header>
        <h2><i class="fas fa-user-graduate"></i> Web Profil Siswa</h2>
        <nav>
            <a href="?page=biodata" class="<?= $page == 'biodata' ? 'active' : ''; ?>"><i class="fas fa-id-card"></i> Biodata</a>
            <a href="?page=jadwal" class="<?= $page == 'jadwal' ? 'active' : ''; ?>"><i class="fas fa-calendar-alt"></i> Jadwal Pelajaran</a>
        </nav>
    </header>

    <div class="marquee-container">
        <div class="marquee-content">
            <i class="fas fa-quote-left"></i> <?php echo $motto; ?> <i class="fas fa-quote-right"></i>
        </div>
    </div>

    <div class="container">
        
        <!-- ==========================================
             HALAMAN BIODATA
             ========================================== -->
        <?php if ($page == 'biodata'): ?>
            
            <!-- Kartu Profil Utama -->
            <div class="profile-card">
                <div class="profile-img">
                    <img src="<?php echo $foto; ?>" alt="Foto <?php echo $nama_panggilan; ?>">
                </div>
                <div class="profile-info">
                    <h1><?php echo $nama_lengkap; ?></h1>
    
                    <!-- TAMBAHAN: Tempat menampilkan sapaan -->
                    <p id="sapaan-user" style="font-size: 1.1rem; font-weight: 500; color: var(--primary); margin-bottom: 10px;">
                    Memuat sapaan...
                    </p>

                    <h3><?php echo $agama; ?> | <?php echo $kewarganegaraan; ?></h3>
                <div class="info-grid">
                        <div class="info-item"><i class="fas fa-birthday-cake"></i> <span><?php echo "$tempat_lahir, $tanggal_lahir $bulan_lahir $tahun_lahir"; ?></span></div>
                        <div class="info-item"><i class="fas fa-hourglass-half"></i> <span><?php echo "$umur Tahun"; ?></span></div>
                        <div class="info-item"><i class="fas fa-map-marker-alt"></i> <span><?php echo $alamat; ?></span></div>
                        <div class="info-item"><i class="fab fa-whatsapp"></i> <span><?php echo $no_wa; ?></span></div>
                        <div class="info-item"><i class="fas fa-envelope"></i> <span><?php echo $email; ?></span></div>
                        <div class="info-item"><i class="fas fa-venus-mars"></i> <span><?php echo $gender; ?></span></div>
                    </div>
                </div>
            </div>

            <!-- Keinginan 10 Tahun -->
            <div class="section-box">
                <h2 class="section-title"><i class="fas fa-rocket"></i> Masa Depan</h2>
                <div class="future-box">
                    <p><?php echo $teks_keinginan; ?></p>
                </div>
            </div>

            <!-- Hobi, Makanan, Minuman -->
            <div class="list-group">
                <div class="section-box list-col">
                    <h2 class="section-title"><i class="fas fa-gamepad"></i> Hobi</h2>
                    <ol class="num-list">
                        <?php foreach($hobi as $h): ?>
                            <li><?php echo $h; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>

                <div class="section-box list-col">
                    <h2 class="section-title"><i class="fas fa-utensils"></i> Makanan Favorit</h2>
                    <ul class="square-list">
                        <?php foreach($makanan_favorit as $m): ?>
                            <li><?php echo $m; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="section-box list-col">
                    <h2 class="section-title"><i class="fas fa-coffee"></i> Minuman Favorit</h2>
                    <ol class="alpha-list">
                        <?php foreach($minuman_favorit as $d): ?>
                            <li><?php echo $d; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>

            <!-- Skills & Riwayat Pendidikan -->
            <div class="list-group">
                <div class="section-box list-col">
                    <h2 class="section-title"><i class="fas fa-tools"></i> Skills</h2>
                    <?php foreach($skills as $skill => $persen): ?>
                        <div class="skill-container">
                            <div class="skill-header">
                                <span><?php echo $skill; ?></span>
                                <span><?php echo $persen; ?>%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: <?php echo $persen; ?>%;"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="section-box list-col">
                    <h2 class="section-title"><i class="fas fa-graduation-cap"></i> Riwayat Pendidikan</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Tingkat</th>
                                <th>Nama Sekolah</th>
                                <th>Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($riwayat_pendidikan as $rp): ?>
                                <tr>
                                    <td><?php echo $rp['tingkat']; ?></td>
                                    <td><?php echo $rp['sekolah']; ?></td>
                                    <td><?php echo $rp['mulai']; ?> - <?php echo $rp['lulus']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <!-- ==========================================
             HALAMAN JADWAL
             ========================================== -->
        <?php else: ?>
            
            <div class="section-box">
                <h2 class="section-title"><i class="fas fa-chalkboard-teacher"></i> Jadwal Pelajaran</h2>
                <div style="overflow-x: auto;">
                    <table class="jadwal-table">
                        <thead>
                            <tr>
                                <th>Jam Ke</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=1; $i<=10; $i++): ?>
                                <tr>
                                    <td class="jam-col">Ke-<?php echo $i; ?></td>
                                    <?php 
                                        // Mapping hari ke index array (0=Senin, 1=Selasa, dst)
                                        // Jadwal array di PHP adalah 1-based index untuk jam, 
                                        // isinya adalah array 5 elemen untuk hari.
                                        $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"];
                                        foreach($hari as $h): 
                                            // Ambil mapel berdasarkan index hari (0-4)
                                            $index_hari = array_search($h, $hari);
                                            $mapel = $jadwal_pelajaran[$i][$index_hari] ?? "-";
                                    ?>
                                        <td><?php echo $mapel; ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="section-box">
                <h2 class="section-title"><i class="fas fa-broom"></i> Jadwal Piket Kelas</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Petugas Piket</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($piket_kelas as $hari => $siswa): ?>
                            <tr>
                                <td><strong><?php echo $hari; ?></strong></td>
                                <td>
                                    <?php 
                                        // Highlight nama panggilan jika ada di daftar
                                        foreach($siswa as $nama) {
                                            if(strtolower($nama) == strtolower($nama_panggilan)) {
                                                echo "<span class='highlight-name'>$nama</span> ";
                                            } else {
                                                echo "$nama ";
                                            }
                                        }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        <?php endif; ?>

    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $nama_lengkap; ?>. Dibuat dengan PHP, HTML, CSS & JS.</p>
    </footer>

    <!-- ==========================================
         BAGIAN 3: JAVASCRIPT
         ========================================== -->
        <script>
        // Efek sederhana saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            
            function updateJamDanSapaan() {
                // 1. Ambil waktu sekarang
                const now = new Date();
                const hours = now.getHours();
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');

                // 2. Tentukan Sapaan berdasarkan jam
                let greeting;
                if (hours < 12) {
                    greeting = "Selamat Pagi";
                } else if (hours < 18) {
                    greeting = "Selamat Siang";
                } else {
                    greeting = "Selamat Malam";
                }

                // 3. Gabungkan semua teks: Sapaan + Nama + Jam
                // Tambahkan pemisah " | " agar terlihat rapi di sebelahnya
                const textLengkap = `${greeting}, <?php echo $nama_panggilan; ?>! | ${hours}:${minutes}:${seconds}`;

                // 4. Masukkan ke elemen HTML
                document.getElementById("sapaan-user").innerText = textLengkap;
            }

            // Jalankan fungsi pertama kali saat halaman dibuka
            updateJamDanSapaan();

            // Jalankan ulang setiap 1000 milidetik (1 detik)
            setInterval(updateJamDanSapaan, 1000);
        });
    </script>

</body>
</html>
