<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorit | Layar Nusantara</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #111115;
            color: #f5f5f5;
            line-height: 1.7;
        }

        nav {
            background: #19191e;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            border-bottom: 1px solid #33333b;
        }

        .brand {
            color: #ff5261;
            font-size: 23px;
            font-weight: bold;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .brand small {
            display: block;
            color: #bdbdc5;
            font-size: 10px;
            letter-spacing: 2px;
        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            gap: 22px;
        }

        .menu a {
            color: #d0d0d6;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .menu a:hover,
        .menu a.active {
            color: #ff5261;
        }

        .hero {
            padding: 65px 7%;
            background: linear-gradient(120deg, #481824, #19191e);
            text-align: center;
        }

        .label {
            display: inline-block;
            background: #e83d50;
            color: white;
            padding: 5px 13px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .hero h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .hero h1 span {
            color: #ff5261;
        }

        .hero p {
            color: #d0cbd0;
            max-width: 650px;
            margin: auto;
        }

        .container {
            padding: 55px 7%;
        }

        .heading {
            margin-bottom: 25px;
            border-left: 4px solid #ff5261;
            padding-left: 14px;
        }

        .heading h2 {
            font-size: 27px;
        }

        .heading p {
            color: #a7a7b2;
            font-size: 14px;
        }

        .empty-card {
            max-width: 700px;
            margin: 30px auto;
            padding: 45px 25px;
            text-align: center;
            background: #232329;
            border: 1px solid #373740;
            border-radius: 14px;
        }

        .heart {
            font-size: 60px;
            color: #ff5261;
            margin-bottom: 15px;
        }

        .empty-card h3 {
            font-size: 23px;
            margin-bottom: 12px;
        }

        .empty-card p {
            color: #bdbdc5;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .button {
            display: inline-block;
            padding: 12px 22px;
            background: #e83d50;
            color: white;
            border-radius: 7px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            transition: 0.2s;
        }

        .button:hover {
            background: #c92c3e;
        }

        .tips {
            margin-top: 35px;
            padding: 22px;
            border-radius: 10px;
            background: #232329;
            border: 1px solid #373740;
        }

        .tips h3 {
            color: #ff6573;
            margin-bottom: 8px;
        }

        .tips p {
            color: #c4c4cd;
            font-size: 14px;
        }

        footer {
            padding: 25px;
            text-align: center;
            background: #19191e;
            border-top: 1px solid #33333b;
            color: #aaaab5;
            font-size: 13px;
        }

        footer strong {
            color: #ff5261;
        }

        @media (max-width: 750px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .menu {
                gap: 12px 18px;
            }

            .hero h1 {
                font-size: 31px;
            }

            .container {
                padding: 40px 6%;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <a href="{{ route('home') }}" class="brand">
            LAYAR NUSANTARA
            <small>JELAJAHI SINEMA INDONESIA</small>
        </a>

        <div class="menu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('movies.index') }}">Eksplorasi</a>
            <a href="{{ route('genre') }}">Genre</a>
            <a href="{{ route('favorit') }}" class="active">Favorit</a>
            <a href="{{ route('tentang') }}">Tentang</a>
        </div>
    </nav>

    <!-- HEADER -->
    <header class="hero">
        <span class="label">KOLEKSI PILIHANMU</span>

        <h1>
            Film <span>Favorit.</span>
        </h1>

        <p>
            Tempat untuk menyimpan dan menemukan kembali
            film-film yang paling kamu sukai.
        </p>
    </header>

    <!-- KONTEN FAVORIT -->
    <main class="container">

        <div class="heading">
            <h2>Daftar Film Favorit</h2>
            <p>Kumpulan cerita yang ingin kamu nikmati kembali.</p>
        </div>

        <section class="empty-card">
            <div class="heart">&#9825;</div>

            <h3>Belum Ada Film Favorit</h3>

            <p>
                Kamu belum memiliki koleksi film favorit.
                Jelajahi katalog Layar Nusantara dan temukan
                film yang menarik untuk ditonton.
            </p>

            <a href="{{ route('movies.index') }}" class="button">
                Jelajahi Film &rarr;
            </a>
        </section>

        <section class="tips">
            <h3>Temukan Cerita Favoritmu</h3>

            <p>
                Mulai dari film horor yang menegangkan,
                drama yang menyentuh hati, hingga komedi
                yang menghibur. Selalu ada cerita menarik
                dari perfilman Indonesia.
            </p>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        &copy; 2026 <strong>Layar Nusantara</strong>.
        Mengenal dan mengapresiasi film Indonesia.
    </footer>

</body>
</html>