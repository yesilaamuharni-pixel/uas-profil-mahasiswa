<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home - Selamat Datang di Website Profil Mahasiswa</title>

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

nav a:hover{
    text-decoration:underline;
}

.hero{
    background:linear-gradient(135deg,#0d6efd,#6ea8fe);
    color:white;
    text-align:center;
    padding:80px 20px;
}

.hero h1{
    font-size:50px;
    margin-bottom:15px;
}

.hero p{
    font-size:20px;
    margin-bottom:10px;
}

.section-title{
    text-align:center;
    color:#0d6efd;
    margin-top:50px;
    margin-bottom:30px;
    font-size:32px;
}

.features{
    display:flex;
    justify-content:center;
    gap:25px;
    flex-wrap:wrap;
    width:90%;
    margin:auto;
}

.card{
    width:300px;
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0px 5px 15px rgba(0,0,0,0.15);
    text-align:center;
}

.card .icon{
    font-size:50px;
    margin-bottom:15px;
}

.card h3{
    color:#0d6efd;
    margin-bottom:15px;
}

.card p{
    color:#555;
    line-height:25px;
}

.info-box{
    width:80%;
    max-width:900px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0px 5px 15px rgba(0,0,0,0.15);
    text-align:center;
}

.info-box h2{
    color:#0d6efd;
    margin-bottom:20px;
}

.info-box p{
    color:#555;
    line-height:28px;
}

.footer{
    text-align:center;
    margin-top:50px;
    padding:20px;
    color:#777;
}

</style>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/profil">Profil</a>
    <!-- <a href="/tentang">Tentang</a> -->
</nav>

<section class="hero">

    <h1>Selamat Datang di Website Profil Mahasiswa</h1>

    <p>Website Berbasis Laravel</p>

    <p>Tugas UAS Mata Kuliah CI/CD Pipeline</p>

</section>

<h2 class="section-title">Fitur Aplikasi</h2>

<section class="features">

    <div class="card">
        <div class="icon">👩</div>
        <h3>Profil Mahasiswa</h3>
        <p>
            Menampilkan informasi mahasiswa
            seperti nama, NIM, email,
            dan program studi.
        </p>
    </div>

    <div class="card">
        <div class="icon">💻</div>
        <h3>Laravel Framework</h3>
        <p>
            Website dibangun menggunakan
            framework Laravel untuk
            pengembangan aplikasi web modern.
        </p>
    </div>

    <div class="card">
        <div class="icon">🚀</div>
        <h3>CI/CD Pipeline</h3>
        <p>
            Aplikasi akan diintegrasikan
            dengan GitHub Actions dan
            deployment otomatis.
        </p>
    </div>

</section>

<div class="info-box">

    <h2>Tentang Website</h2>

    <p>
        Sistem Profil Mahasiswa merupakan aplikasi web sederhana
        yang dibuat untuk menampilkan informasi profil mahasiswa.
        Aplikasi ini dikembangkan menggunakan Laravel dan akan
        digunakan sebagai implementasi konsep Continuous Integration
        dan Continuous Deployment (CI/CD).
    </p>

</div>

<div class="footer">
    © 2026 | UAS CI/CD Pipeline
</div>

</body>
</html>