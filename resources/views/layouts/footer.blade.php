<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desain Footer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* Gaya Footer */
        .footer {
            background-color: #222;
            color: #fff;
            padding: 40px 0;
        }

        .footer h4 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .footer h4::after {
            content: "";
            display: block;
            width: 40px;
            height: 2px;
            background-color: #f59e0b;
            margin-top: 5px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: #ddd;
            text-decoration: none;
            transition: 0.3s;
        }

        .footer ul li a:hover {
            color: #f59e0b;
        }

        .footer .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background: #f59e0b;
            color: white;
            border-radius: 50%;
            text-align: center;
            margin-right: 10px;
            transition: 0.3s;
        }

        .footer .social-links a:hover {
            background: #fff;
            color: #f59e0b;
            transform: scale(1.1);
        }

        .footer .subscribe input {
            border: none;
            padding: 10px;
            width: 75%;
            border-radius: 5px;
        }

        .footer .subscribe button {
            background: #f59e0b;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .footer .subscribe button:hover {
            background: white;
            color: #f59e0b;
        }

        .footer .copyright {
            text-align: center;
            padding-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<!-- Bagian Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Tentang Kami -->
            <div class="col-lg-4 col-md-6">
                <h4>Nilai Siswa</h4>
                <p>Platform untuk memantau nilai siswa, termasuk UTS, UAS, dan tugas. Melihat perkembangan akademik secara transparan.</p>
                <p><strong>Telepon:</strong> +1 5589 55488 55</p>
                <p><strong>Email:</strong> info@example.com</p>
                <div class="social-links mt-3">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Tautan Berguna -->
            <div class="col-lg-2 col-md-3">
                <h4>Tautan Berguna</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('user.siswa.index') }}">Data Siswa</a></li>
                    <li><a href="{{ route('user.galeri.index') }}">Galeri</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>

            <!-- Layanan Kami -->
            <div class="col-lg-2 col-md-3">
                <h4>Data Kami</h4>
                <ul>
                    <li><a href="{{ route('user.siswa.index') }}">Pantau Siswa</a></li>
                    <li><a href="{{ route('user.galeri.index') }}">Galeri</a></li>
                </ul>
            </div>

            <!-- Berlangganan -->
            <div class="col-lg-4 col-md-6">
                <h4>Berlangganan Buletin Kami</h4>
                <p>Terima informasi terbaru tentang nilai dan perkembangan akademik siswa.</p>
                <div class="subscribe d-flex">
                    <input type="email" placeholder="Masukkan email Anda">
                    <button type="submit">Kirim</button>
                </div>
            </div>
        </div>

        <!-- Hak Cipta -->
        <div class="copyright mt-4">
            <p>© 2025 <strong>Platform Nilai</strong>. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>

<!-- Skrip Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
