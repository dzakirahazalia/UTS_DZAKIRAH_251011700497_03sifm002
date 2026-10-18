<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Layar Nusantara</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --red: #ff4d60;
            --red-dark: #d92e45;
            --bg: #0c0c10;
            --panel: #19191f;
            --text: #f7f7fa;
            --muted: #aaaab7;
            --border: rgba(255,255,255,.09);
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        /* NAVBAR */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
            padding: 20px 7%;
            background: #131318;
            border-bottom: 1px solid var(--border);
        }

        .brand {
            color: var(--red);
            font-size: 24px;
            font-weight: 900;
            letter-spacing: -.7px;
            line-height: 1.3;
        }

        .brand small {
            display: block;
            margin-top: 5px;
            color: #aaaab5;
            font-size: 10px;
            font-weight: normal;
            letter-spacing: 2.5px;
        }

        nav {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 23px;
        }

        nav a {
            color: #dddde5;
            font-size: 13px;
            font-weight: bold;
            transition: color .25s;
        }

        nav a:hover,
        nav a.active {
            color: var(--red);
        }

        /* BAGIAN ATAS */
        .hero {
            position: relative;
            overflow: hidden;
            min-height: 460px;
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            align-items: center;
            gap: 45px;
            padding: 65px 8%;
            background:
                radial-gradient(ellipse at 85% 50%, #49202a 0%, transparent 42%),
                linear-gradient(120deg, #171218, #0c0c10 75%);
            border-bottom: 1px solid var(--border);
        }

        .hero::before {
            content: "SINEMA INDONESIA";
            position: absolute;
            left: 5%;
            bottom: -30px;
            font-size: clamp(55px, 10vw, 135px);
            font-weight: 900;
            letter-spacing: -5px;
            white-space: nowrap;
            color: rgba(255,255,255,.025);
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 13px;
            margin-bottom: 22px;
            color: #ff8995;
            background: rgba(255,77,96,.12);
            border: 1px solid rgba(255,77,96,.3);
            border-radius: 30px;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .label span {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--red);
        }

        .hero h1 {
            max-width: 600px;
            font-size: clamp(37px, 5vw, 62px);
            line-height: 1.12;
            letter-spacing: -2px;
            margin-bottom: 22px;
        }

        .accent {
            color: var(--red);
        }

        .hero p {
            max-width: 480px;
            color: #c0bec8;
            font-size: 15px;
            line-height: 1.9;
            margin-bottom: 28px;
        }

        .btn {
            display: inline-block;
            padding: 12px 21px;
            border-radius: 7px;
            color: white;
            background: var(--red-dark);
            font-size: 13px;
            font-weight: bold;
            box-shadow: 0 8px 25px rgba(217,46,69,.2);
            transition: .25s;
        }

        .btn:hover {
            background: var(--red);
            transform: translateY(-3px);
        }

        /* GAMBAR DARI FOLDER PUBLIC/IMAGES */
        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 310px;
        }

        .poster {
            position: absolute;
            overflow: hidden;
            width: 170px;
            height: 245px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,.18);
            box-shadow: 0 20px 45px rgba(0,0,0,.5);
            background-size: cover;
            background-position: center;
            transition: transform .35s;
        }

        .poster:hover {
            transform: translateY(-10px) rotate(0deg);
            z-index: 5;
        }

        .poster::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(transparent 30%, rgba(0,0,0,.9));
        }

        .poster-one {
            left: 4%;
            transform: rotate(-13deg);
            background-image:
                linear-gradient(160deg, transparent 20%, #6c2636),
                url("{{ asset('images/aga laen.jpg') }}");
        }

        .poster-two {
            z-index: 2;
            top: 20px;
            background-image:
                linear-gradient(160deg, transparent 20%, #a33b30),
                url("{{ asset('images/Dilan 1990.jpg') }}");
        }

        .poster-three {
            right: 4%;
            transform: rotate(13deg);
            background-image:
                linear-gradient(160deg, transparent 20%, #253d54),
                url("{{ asset('images/jumbo.jpg') }}");
        }

        .poster-caption {
            position: absolute;
            z-index: 2;
            left: 13px;
            right: 13px;
            bottom: 15px;
        }

        .poster-caption small {
            display: block;
            color: #ff9aa4;
            font-size: 9px;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }

        .poster-caption strong {
            font-size: 17px;
            line-height: 1.2;
        }

        /* KONTEN PROFIL */
        main {
            max-width: 1200px;
            margin: auto;
            padding: 65px 30px;
        }

        .section-heading {
            margin-bottom: 25px;
        }

        .eyebrow {
            display: block;
            color: var(--red);
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 2.5px;
            margin-bottom: 8px;
        }

        .section-heading h2 {
            font-size: clamp(27px, 4vw, 36px);
            line-height: 1.3;
            margin-bottom: 9px;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 14px;
        }

        .about-layout {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 22px;
            margin-bottom: 55px;
        }

        .about-card,
        .feature-card {
            background: linear-gradient(145deg, #202027, #15151a);
            border: 1px solid var(--border);
            border-radius: 15px;
            transition: transform .3s, border-color .3s;
        }

        .about-card:hover,
        .feature-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255,77,96,.5);
        }

        .about-card {
            padding: 30px;
        }

        .about-card h3 {
            font-size: 22px;
            margin-bottom: 13px;
        }

        .about-card p,
        .feature-card p {
            color: #c4c4ce;
            font-size: 14px;
            line-height: 1.9;
        }

        .side-stack {
            display: grid;
            gap: 18px;
        }

        .feature-card {
            padding: 24px;
        }

        .feature-card h3 {
            color: #ff7481;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .feature-icon {
            font-size: 25px;
            margin-bottom: 10px;
        }

        /* AJAKAN MENJELAJAHI FILM */
        .closing {
            padding: 35px;
            border: 1px solid rgba(255,77,96,.25);
            border-radius: 16px;
            background:
                radial-gradient(ellipse at right, rgba(255,77,96,.15), transparent 60%),
                #19151a;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
        }

        .closing h2 {
            font-size: clamp(23px, 3vw, 30px);
            margin-bottom: 8px;
        }

        .closing p {
            color: #c4c4ce;
            font-size: 14px;
            max-width: 600px;
        }

        /* FOOTER */
        footer {
            padding: 25px 7%;
            background: #131318;
            border-top: 1px solid var(--border);
            text-align: center;
            color: var(--muted);
            font-size: 12px;
        }

        footer strong {
            color: var(--red);
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            header {
                align-items: flex-start;
                flex-direction: column;
            }

            nav {
                gap: 18px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 55px 7%;
            }

            .hero-visual {
                min-height: 300px;
            }

            .about-layout {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            header {
                padding: 20px;
            }

            nav {
                gap: 12px 17px;
            }

            nav a {
                font-size: 12px;
            }

            .hero {
                padding: 45px 22px;
            }

            .hero h1 {
                letter-spacing: -1px;
            }

            .poster {
                width: 125px;
                height: 190px;
            }

            main {
                padding: 45px 20px;
            }

            .about-card,
            .feature-card {
                padding: 22px;
            }

            .closing {
                align-items: flex-start;
                flex-direction: column;
                padding: 25px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header>
        <a href="{{ route('home') }}" class="brand">
            LAYAR NUSANTARA
            <small>JELAJAHI SINEMA INDONESIA</small>
        </a>

        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('profil') }}" class="active">Profil</a>
            <a href="{{ route('movies.index') }}">Katalog Film</a>
            <a href="{{ route('genre') }}">Genre</a>
            <a href="{{ route('tentang') }}">Tentang</a>
        </nav>
    </header>

    <!-- BAGIAN ATAS: TETAP DIPERTAHANKAN -->
    <section class="hero">
        <div class="hero-content">
            <span class="label"><span></span> PROFIL WEBSITE</span>

            <h1>
                Mengenal Dunia
                <span class="accent">Layar Nusantara</span>
            </h1>

            <p>
                Ruang untuk mengenal cerita, karya, dan keberagaman
                sinema Indonesia. Temukan informasi film dan jelajahi
                cerita dari berbagai genre dalam satu tempat.
            </p>

            <a href="{{ route('movies.index') }}" class="btn">
                Jelajahi Katalog Film &rarr;
            </a>
        </div>

        <div class="hero-visual">
            <div class="poster poster-one">
                <div class="poster-caption">
                    <small>LAYAR NUSANTARA</small>
                    <strong>Ragam Cerita</strong>
                </div>
            </div>

            <div class="poster poster-two">
                <div class="poster-caption">
                    <small>JELAJAHI</small>
                    <strong>Sinema Indonesia</strong>
                </div>
            </div>

            <div class="poster poster-three">
                <div class="poster-caption">
                    <small>KENALI</small>
                    <strong>Karya Nusantara</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- BAGIAN BAWAH YANG LEBIH SINGKAT -->
    <main>
        <section>
            <div class="section-heading">
                <span class="eyebrow">CERITA KAMI</span>
                <h2>Lebih Dekat dengan <span class="accent">Dunia Film</span></h2>
                <p>Tempat untuk mencari tahu tentang film Indonesia.</p>
            </div>

            <div class="about-layout">
                <article class="about-card">
                    <h3>🎬 Apa itu Layar Nusantara?</h3>
                    <p>
                        Layar Nusantara adalah website katalog film Indonesia.
                        Di sini, pengunjung dapat melihat judul film, genre,
                        durasi, tahun rilis, poster, dan deskripsi cerita.
                        Semua informasi disajikan agar kamu bisa mengenal
                        film yang tersedia dengan lebih mudah.
                    </p>
                </article>

                <div class="side-stack">
                    <article class="feature-card">
                        <div class="feature-icon">🍿</div>
                        <h3>Temukan Ceritamu</h3>
                        <p>
                            Dari drama sampai horor, setiap film punya
                            cerita dan pengalaman yang berbeda.
                        </p>
                    </article>

                    <article class="feature-card">
                        <div class="feature-icon">🎞️</div>
                        <h3>Kenali Filmnya</h3>
                        <p>
                            Lihat informasi dan sinopsis sebelum
                            memilih film yang ingin kamu kenali.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="closing">
            <div>
                <h2>Siap Menjelajahi Film Indonesia?</h2>
                <p>
                    Buka katalog dan temukan berbagai judul film
                    beserta informasi ceritanya.
                </p>
            </div>

            <a href="{{ route('movies.index') }}" class="btn">
                Lihat Katalog Film &rarr;
            </a>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        &copy; 2026 <strong>Layar Nusantara</strong>.
        Jelajahi dan apresiasi sinema Indonesia.
    </footer>

</body>
</html>