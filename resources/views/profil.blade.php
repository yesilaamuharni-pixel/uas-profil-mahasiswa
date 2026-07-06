<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            background:#f4f6f9;
        }

        nav{
            background:#0d6efd;
            padding:18px;
            text-align:center;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin:0 20px;
            font-weight:bold;
            font-size:17px;
        }

        .hero{
            background:linear-gradient(135deg,#0d6efd,#6ea8fe);
            text-align:center;
            color:white;
            padding:50px;
        }

        .hero img{
            width:180px;
            height:180px;
            border-radius:50%;
            object-fit:cover;
            border:5px solid white;
            margin-bottom:20px;
        }

        .hero h1{
            font-size:38px;
            margin-bottom:10px;
        }

        .hero p{
            font-size:18px;
        }

        .container{
            width:90%;
            max-width:1000px;
            margin:40px auto;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:15px;
            box-shadow:0px 5px 15px rgba(0,0,0,0.15);
            margin-bottom:25px;
        }

        .card h2{
            color:#0d6efd;
            margin-bottom:15px;
        }

        .info{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:15px;
        }

        .info p{
            padding:10px;
            background:#f8fafc;
            border-radius:10px;
        }

        .skills{
            display:flex;
            flex-wrap:wrap;
            gap:15px;
        }

        .skill{
            background:#0d6efd;
            color:white;
            padding:10px 20px;
            border-radius:25px;
        }

        footer{
            text-align:center;
            padding:20px;
            color:#666;
        }

    </style>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/profil">Profil</a>
    <!-- <a href="/tentang">Tentang</a> -->
</nav>

<div class="hero">

    <img src="{{ asset('images/foto_yesila.png') }}">

    <h1>Yesila Muharni</h1>

    <p>D4 Rekayasa Perangkat Lunak</p>

</div>

<div class="container">

    <div class="card">

        <h2>Tentang Saya</h2>

        <p>
            Saya merupakan mahasiswa D4 Rekayasa Perangkat Lunak
            yang memiliki minat pada pengembangan aplikasi web,
            basis data, serta implementasi teknologi perangkat lunak.
            Website ini dibuat sebagai bagian dari tugas UAS
            mata kuliah CI/CD Pipeline.
        </p>

    </div>

    <div class="card">

        <h2>Data Diri</h2>

        <div class="info">

            <p><b>Nama:</b><br>Yesila Muharni</p>

            <p><b>NIM:</b><br>6304230021</p>

            <p><b>Email:</b><br>yesilamuharni@gmail.com</p>

            <p><b>Program Studi:</b><br>D4 Rekayasa Perangkat Lunak</p>

        </div>

    </div>

    <div class="card">

        <h2>Keahlian</h2>

        <div class="skills">

            <div class="skill">Laravel</div>

            <div class="skill">PHP</div>

            <div class="skill">MySQL</div>

            <div class="skill">GitHub</div>

            <div class="skill">Power BI</div>

        </div>

    </div>

</div>

<footer>
    © 2026 | Profil Mahasiswa
</footer>

</body>
</html>