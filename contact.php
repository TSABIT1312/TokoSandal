<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Informasi Pembuat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .contact-container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .contact-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .contact-header h1 {
            font-size: 2rem;
            font-weight: bold;
        }
        .contact-info p {
            margin: 0 0 10px;
        }
        .social-icons a {
            margin: 0 10px;
            font-size: 1.5rem;
            color: #333;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
<?php include "navbar.php"; ?>

<div class="contact-container">
    <div class="contact-header">
        <h1>Kontak & Informasi</h1>
        <p>Hubungi saya melalui informasi di bawah ini</p>
    </div>
    <div class="contact-info">
        <h4>Informasi:</h4>
        <p><strong>Nama:</strong> Tsabit</p>
        <p><strong>Email:</strong> sabitalfikri@gmail.com</p>
        <p><strong>Telepon:</strong> +62 812-3456-7890</p>
        <p><strong>Alamat:</strong> Jl Selamat Tinggal, Jaya, Los Angeles</p>
    </div>
    <div class="social-icons text-center mt-4">
        <h4>Ikuti Saya:</h4>
        <a href="https://www.facebook.com/tsabitalfikri/?locale=id_ID" target="blank" title="Facebook">
            <i class="bi bi-facebook"></i>
        </a>
        <a href="https://www.twitter.com" target="blank" title="Twitter">
            <i class="bi bi-twitter"></i>
        </a>
        <a href="https://www.instagram.com" target="blank" title="Instagram">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="https://www.linkedin.com" target="blank" title="LinkedIn">
            <i class="bi bi-linkedin"></i>
        </a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
