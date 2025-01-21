<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Tambahkan box-shadow ke setiap card */
        .card {
            background-color: #white;
            /* Warna kartu gelap */
            color: #dark;
            /* Teks putih */
            border: none;
            /* Hilangkan border */
            box-shadow: 0 0px 8px rgba(0, 0, 0, 0.2);
            /* Efek bayangan */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Animasi */
        }

        .card:hover {
            transform: scale(1);
            /* Zoom sedikit saat hover */
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.4);
            /* Perbesar bayangan saat hover */
        }
    </style>
</head>

<body>
<?php include "navbar.php"; ?>
    <!-- Hero Section -->
    <section class="hero d-flex align-items-center text-center" data-aos="fade-up" data-aos-duration="1000">
        <div class="container mt-4">
            <h1>Selamat Datang di <span style="color:rgb(83, 83, 86); font-weight:700;">Bits</span><span style="color: black; font-weight:700;">Shoes</span>, <br>Jadikan sepatu anda seperti baru!</h1>
            <p class="lead">BitsShoes adalah sebuah web yang memberikan layanan order pencucian sepatu yang mudah yang bisa anda cakup pada online dan memudahkan anda bisa menunggu dengan hanya dirumah saja dan sepatu yang ingin anda cuci dapat di ambil/diantar kerumah anda.</p>
        </div>
    </section>
    <!-- Services Section -->
    <section class="container py-5">
        <h2 class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">Layanan Kami</h2>
        <div class="row">

            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Fast Cleaning </h5>
                        <hr>
                        <p class="card-text">Fast cleaning merupakan sebuah layanan cuci sepatu yang membersihkan bagian kotor kecil saja yang terlihat dari luar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Deep Cleaning </h5>
                        <hr>
                        <p class="card-text">Deep cleaning merupakan sebuah layanan cuci  sepatu yang membersihkan bagian sepatu luar baikpun dalam dan akan membuat sepatu anda terlihat seperti baru. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Repair </h5>
                        <hr>
                        <p class="card-text">Repair merupakan sebuah layanan perbaikan sepatu anda yang awalnya tidak bisa digunakan dan akan kembali bisadi gunakan.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>