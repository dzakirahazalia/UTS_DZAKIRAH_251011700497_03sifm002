<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang | Layar Nusantara</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #111115;
            color: #f5f5f7;
            line-height: 1.8;
        }

        a {
            text-decoration: none;
        }

        /* NAVBAR */
        nav {
            background: #19191e;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            border-bottom: 1px solid #303036;
        }

        .brand {
            color: #ff5261;
            font-size: 23px;
            font-weight: bold;
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
            font-size: 14px;
            font-weight: bold;
            transition: .2s;
        }

        .menu a:hover,
        .menu a.active {
            color: #ff5261;
        }

        /* HEADER */
        .hero {
            padding: 75px 8% 65px;
            background:
                radial-gradient(ellipse at top left, #401923 0%, transparent 60%),
                #111115;
            border-bottom: 1px solid #29292f;
        }

        .eyebrow {
            color: #ff6573;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .hero h1 {
            max-width: 850px;
            font-size: clamp(38px, 6vw, 65px);
            line-height: 1.15;
            margin: 20px 0;
            letter-spacing: -1px;
        }

        .hero h1 span {
            color: #ff5261;
        }

        .hero p {
            max-width: 680px;
            color: #c6c6d0;
            font-size: 17px;
        }

        .hero-line {
            width: 75px;
            height: 4px;
            background: #ff5261;
            border-radius: 10px;
            margin-top: 28px;
        }

        /* KONTEN */
        .container {
            max-width: 1100px;
            margin: auto;
            padding: 65px 25px;
        }

        .section-heading {
            margin-bottom: 28px;
        }

        .section-heading h2 {
            font-size: 30px;
            line-height: 1.3;
            margin-top: 10px;
        }

        .section-heading p {
            color: #aaaab5;
            font-size: 14px;
            margin-top: 8px;
        }

        /* CERITA */
        .story-layout {
            display: grid;
            grid-template-columns: 1fr 1.4fr;
            gap: 35px;
            align-items: stretch;
        }

        .story-title {
            background: #20191f;
            border: 1px solid #39252d;
            border-radius: 12px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 280px;
        }

        .story-title .number {
            color: #ff6573;
            font-size: 13px;
            letter-spacing: 2px;
        }

        .story-title h2 {
            font-size: 34px;
            line-height: 1.3;
            margin: 25px 0;
        }

        .story-title h2 span {
            color: #ff5261;
        }

        .story-title small {
            color: #aaaab5;
        }

        .story-text {
            padding: 12px 0;
        }

        .story-text p {
            color: #c9c9d2;
            margin-bottom: 18px;
            text-align: justify;
        }

        .story-text strong {
            color: white;
        }

        /* PRINSIP */
        .principles {
            margin-top: 75px;
        }

        .principle-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .principle-card {
            background: #1c1c22;
            border: 1px solid #33333b;
            border-radius: 12px;
            padding: 25px;
            transition: .25s;
        }

        .principle-card:hover {
            transform: translateY(-4px);
            border-color: #ff5261;
        }

        .principle-card .number {
            color: #ff6573;
            font-size: 13px;
            font-weight: bold;
        }

        .principle-card h3 {
            font-size: 20px;
            margin: 15px 0 8px;
        }

        .principle-card p {
            color: #bdbdc7;
            font-size: 14px;
        }

        /* CARA KERJA WEBSITE */
        .how-section {
            background: #19191e;
            border-top: 1px solid #303036;
            border-bottom: 1px solid #303036;
            padding: 65px 25px;
        }

        .how-inner {
            max-width: 1050px;
            margin: auto;
        }

        .steps {
            margin-top: 30px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
        }

        .step {
            border-top: 2px solid #ff5261;
            padding-top: 18px;
        }

        .step span {
            color: #ff6573;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .step h3 {
            font-size: 19px;
            margin: 10px 0;
        }

        .step p {
            color: #bdbdc7;
            font-size: 14px;
        }

        /* AJAKAN */
        .closing {
            max-width: 1100px;
            margin: auto;
            padding: 70px 25px;
            text-align: center;
        }

        .closing h2 {
            font-size: clamp(28px, 4vw, 42px);
            line-height: 1.3;
            margin: 15px 0;
        }

        .closing h2 span {
            color: #ff5261;
        }

        .closing p {
            max-width: 620px;
            margin: auto;
            color: #bdbdc7;
        }

        .button {
            display: inline-block;
            margin-top: 25px;
            background: #e83d50;
            color: white;
            padding: 12px 22px;
            border-radius: 7px;
            font-weight: bold;
            transition: .2s;
        }

        .button:hover {
            background: #c92c3e;
            transform: translateY(-2px);
        }

        /* FOOTER */
        footer {
            background: #19191e;
            border-top: 1px solid #303036;
            padding: 25px;
            text-align: center;
            color: #aaaab5;
            font-size: 13px;
        }

        footer strong {
            color: #ff5261;
        }

        /* RESPONSIVE */
        @media (max-width: 750px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .menu {
                gap: 14px;
            }

            .hero {
                padding: 50px 25px;
            }

            .story-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .principle-grid,
            .steps {
                grid-template-columns: 1fr;
            }

            .container {
                padding: 45px 20px;
            }

            .principles {
                margin-top: 50px;
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
            <a href="{{ route('profil') }}">Profil</a>
            <a href="{{ route('movies.index') }}">Katalog Film</a>
            <a href="{{ route('genre') }}">Genre</a>
            <a href="{{ route('tentang') }}" class="active">Tentang</a>
        </div>
    </nav>

    <!-- PEMBUKA -->
    <header class="hero">
        <div class="eyebrow">Tentang Layar Nusantara</div>

        <h1>
            Mengenal film bukan hanya
            <span>soal menonton.</span>
        </h1>

        <p>
            Ada cerita di balik setiap judul, ada pesan dalam setiap
            adegan, dan ada karya yang layak untuk dikenal.
            Layar Nusantara menjadi tempat untuk mulai menjelajahinya.
        </p>

        <div class="hero-line"></div>
    </header>

    <main class="container">

        <!-- CERITA WEBSITE -->
        <section class="story-layout">
            <div class="story-title">
                <span class="number">01 / LATAR BELAKANG</span>

                <h2>
                    Dari rasa ingin tahu,
                    <span>lahir sebuah ruang.</span>
                </h2>

                <small>Layar Nusantara — Ruang untuk pecinta film</small>
            </div>

            <div class="story-text">
                <p>
                    Pernah melihat judul film yang menarik, tetapi belum
                    tahu film itu bercerita tentang apa? Atau ingin
                    mencari film dari genre tertentu tanpa harus membuka
                    banyak halaman?
                </p>

                <p>
                    <strong>Layar Nusantara</strong> dibuat untuk
                    memudahkan pengunjung mengenal film Indonesia.
                    Informasi film dikumpulkan dalam sebuah katalog
                    sehingga judul, genre, tahun rilis, durasi,
                    poster, dan sinopsis bisa dilihat dengan lebih mudah.
                </p>

                <p>
                    Website ini juga menjadi bentuk pengenalan terhadap
                    beragam karya perfilman Indonesia. Pengunjung dapat
                    menjelajahi koleksi yang tersedia dan menemukan
                    cerita yang sesuai dengan ketertarikannya.
                </p>
            </div>
        </section>

        <!-- PRINSIP WEBSITE -->
        <section class="principles">
            <div class="section-heading">
                <div class="eyebrow">02 / Pegangan kami</div>
                <h2>Apa yang penting bagi kami?</h2>
                <p>Hal sederhana yang membuat informasi film lebih mudah dinikmati.</p>
            </div>

            <div class="principle-grid">

                <article class="principle-card">
                    <div class="number">01</div>
                    <h3>Informasi yang Jelas</h3>
                    <p>
                        Setiap film dilengkapi informasi utama agar
                        pengunjung dapat mengenali judul dan gambaran
                        ceritanya dengan lebih mudah.
                    </p>
                </article>

                <article class="principle-card">
                    <div class="number">02</div>
                    <h3>Mudah Dijelajahi</h3>
                    <p>
                        Katalog dan kategori membantu pengunjung
                        menemukan film tanpa perlu mencari informasi
                        secara terpisah.
                    </p>
                </article>

                <article class="principle-card">
                    <div class="number">03</div>
                    <h3>Menghargai Karya</h3>
                    <p>
                        Mengenal lebih banyak film merupakan salah satu
                        cara untuk melihat keberagaman cerita dan
                        kreativitas dalam perfilman Indonesia.
                    </p>
                </article>

            </div>
        </section>

    </main>

    <!-- CARA MENGGUNAKAN WEBSITE -->
    <section class="how-section">
        <div class="how-inner">
            <div class="section-heading">
                <div class="eyebrow">03 / Mulai menjelajah</div>
                <h2>Temukan film dengan caramu.</h2>
                <p>Gunakan bagian website sesuai informasi yang ingin kamu cari.</p>
            </div>

            <div class="steps">

                <article class="step">
                    <span>LANGKAH 01</span>
                    <h3>Buka Katalog Film</h3>
                    <p>
                        Lihat koleksi film yang tersedia beserta
                        informasi singkat setiap judul.
                    </p>
                </article>

                <article class="step">
                    <span>LANGKAH 02</span>
                    <h3>Pilih Genre</h3>
                    <p>
                        Jelajahi kategori seperti horor, drama,
                        komedi, keluarga, dan genre lainnya.
                    </p>
                </article>

                <article class="step">
                    <span>LANGKAH 03</span>
                    <h3>Kenali Ceritanya</h3>
                    <p>
                        Buka detail film untuk membaca sinopsis,
                        melihat poster, dan mengenal informasi
                        film lebih lengkap.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <!-- PENUTUP -->
    <section class="closing">
        <div class="eyebrow">Selamat menjelajah</div>

        <h2>
            Cerita mana yang ingin
            <span>kamu kenali?</span>
        </h2>

        <p>
            Mulai dari satu judul, satu genre, atau satu cerita
            yang membuatmu penasaran. Jelajahi koleksi film
            yang tersedia di Layar Nusantara.
        </p>

        <a href="{{ route('movies.index') }}" class="button">
            Buka Katalog Film &rarr;
        </a>
    </section>

    <!-- FOOTER -->
    <footer>
        &copy; {{ date('Y') }}
        <strong>Layar Nusantara</strong>.
        Mengenal dan mengapresiasi film Indonesia.
    </footer>

</body>
</html>