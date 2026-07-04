<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tentang Aplikasi</title>

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
    color:white;
    text-align:center;
    padding:60px;
}

.hero h1{
    font-size:42px;
    margin-bottom:15px;
}

.hero p{
    font-size:18px;
}

.container{
    width:90%;
    max-width:1100px;
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

.tech{
    display:flex;
    flex-wrap:wrap;
    gap:20px;
}

.tech-card{
    flex:1;
    min-width:200px;
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0px 5px 15px rgba(0,0,0,0.15);
    text-align:center;
}

.tech-card h3{
    color:#0d6efd;
    margin-bottom:10px;
}

.pipeline{
    text-align:center;
    font-size:20px;
    font-weight:bold;
    line-height:50px;
    color:#0d6efd;
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
    <a href="/tentang">Tentang</a>
</nav>

<div class="hero">

    <h1>Tentang Aplikasi</h1>

    <p>
        Sistem Profil Mahasiswa Berbasis Laravel
    </p>

</div>

<div class="container">

    <div class="card">

        <h2>Tujuan Aplikasi</h2>

        <p>
            Aplikasi Profil Mahasiswa dibuat sebagai media informasi
            profil mahasiswa sekaligus sebagai implementasi tugas
            UAS mata kuliah CI/CD Pipeline.
            Website ini dirancang sederhana, responsif, dan mudah
            dikembangkan menggunakan framework Laravel.
        </p>

    </div>

    <div class="card">

        <h2>Fitur Aplikasi</h2>

        <ul style="padding-left:20px; line-height:30px;">
            <li>Halaman Home</li>
            <li>Halaman Profil Mahasiswa</li>
            <li>Halaman Tentang Aplikasi</li>
            <li>Tampilan Responsif dan Modern</li>
        </ul>

    </div>

    <h2 style="text-align:center;color:#0d6efd;margin-bottom:20px;">
        Teknologi yang Digunakan
    </h2>

    <div class="tech">

        <div class="tech-card">
            <h3>Laravel</h3>
            <p>Framework utama pengembangan aplikasi web.</p>
        </div>

        <div class="tech-card">
            <h3>PHP</h3>
            <p>Bahasa pemrograman yang digunakan Laravel.</p>
        </div>

        <div class="tech-card">
            <h3>GitHub</h3>
            <p>Mengelola source code dan version control.</p>
        </div>

        <div class="tech-card">
            <h3>CI/CD</h3>
            <p>Automasi build, test, dan deployment aplikasi.</p>
        </div>

    </div>

    <br><br>

    <div class="card">

        <h2>Alur Implementasi CI/CD</h2>

        <div class="pipeline">

            Developer <br>
            ↓ <br>
            GitHub Repository <br>
            ↓ <br>
            GitHub Actions <br>
            ↓ <br>
            Deployment <br>
            ↓ <br>
            Website Online

        </div>

    </div>

</div>

<footer>
    © 2026 | UAS CI/CD Pipeline
</footer>

</body>
</html>