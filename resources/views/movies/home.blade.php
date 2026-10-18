<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Layar Nusantara</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #0b0b0f;
            color: #f5f5f7;
            font-family: Arial, sans-serif;
            line-height: 1.7;
        }

        nav {
            background: #17171c;
            border-bottom: 1px solid #303039;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 24px;
            flex-wrap: wrap;
        }

        .brand {
            color: #ff5261;
            font-size: 23px;
            font-weight: 900;
            text-decoration: none;
        }

        .brand small {
            display: block;
            color: #aaaab5;
            font-size: 10px;
            font-weight: normal;
            letter-spacing: 2px;
        }

        .menu {
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        .menu a {
            color: #dddde3;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .menu a:hover,
        .menu a.active {
            color: #ff5261;
        }

        .hero {
            padding: 75px 7%;
            min-height: 490px;
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            align-items: center;
            gap: 45px;
            background:
                radial-gradient(ellipse at left, #401722 0%, #211319 42%, #0b0b0f 80%);
        }

        .label {
            display: inline-block;
            padding: 5px 13px;
            background: #e83d50;
            color: white;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        .hero h1 {
            font-size: clamp(38px, 5vw, 64px);
            line-height: 1.12;
            margin-bottom: 22px;
        }

        .highlight {
            color: #ff5261;
        }

        .hero p {
            color: #d0cbd0;
            max-width: 650px;
            margin-bottom: 28px;
        }

        .button {
            display: inline-block;
            padding: 12px 23px;
            border-radius: 7px;
            background: #e83d50;
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: .2s;
        }

        .button:hover {
            background: #c92c3e;
        }

        .button-outline {
            display: inline-block;
            padding: 11px 22px;
            margin-left: 8px;
            border: 1px solid #555560;
            border-radius: 7px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .button-outline:hover {
            border-color: #ff5261;
            color: #ff5261;
        }

        .hero-posters {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            align-items: center;
        }

        .hero-posters img {
            width: 100%;
            height: 245px;
            object-fit: cover;
            border-radius: 12px;
            border: 1px solid #45404a;
            box-shadow: 0 15px 35px #0008;
        }

        .hero-posters img:first-child {
            transform: translateY(18px);
        }

        .hero-posters img:last-child {
            transform: translateY(-18px);
        }

        .section {
            padding: 45px 7%;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }

        .section-heading h2 {
            font-size: 27px;
        }

        .section-heading p {
            color: #aaaab5;
            font-size: 14px;
        }

        .section-heading a {
            color: #ff6573;
            text-decoration: none;
            font-weight: bold;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 45px;
        }

        .stat-card {
            padding: 22px;
            border: 1px solid #303039;
            border-radius: 12px;
            background: #19191f;
        }

        .stat-card strong {
            display: block;
            color: #ff5261;
            font-size: 28px;
        }

        .stat-card span {
            color: #bdbdc7;
            font-size: 13px;
        }

        .movie-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .movie-card {
            overflow: hidden;
            border: 1px solid #303039;
            border-radius: 12px;
            background: #19191f;
            transition: .2s;
        }

        .movie-card:hover {
            transform: translateY(-5px);
            border-color: #ff5261;
        }

        .movie-card img,
        .poster-placeholder {
            width: 100%;
            height: 280px;
            display: block;
            background: #292930;
        }

        .movie-card img {
            object-fit: cover;
        }

        .poster-placeholder {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            text-align: center;
            color: #ff8791;
        }

        .movie-info {
            padding: 16px;
        }

        .badge {
            display: inline-block;
            padding: 5px 10px;
            margin-bottom: 10px;
            border-radius: 20px;
            background: #49202c;
            color: #ff9ba4;
            font-size: 11px;
        }

        .movie-info h3 {
            font-size: 16px;
            margin-bottom: 7px;
        }

        .movie-info p {
            min-height: 42px;
            color: #bdbdc7;
            font-size: 12px;
            margin-bottom: 14px;
        }

        .detail-link {
            display: block;
            padding: 10px;
            border-radius: 6px;
            background: #e83d50;
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            text-align: center;
        }

        .detail-link:hover {
            background: #c92c3e;
        }

        .empty {
            padding: 30px;
            border: 1px solid #303039;
            border-radius: 12px;
            background: #19191f;
            color: #aaaab5;
            text-align: center;
        }

        .closing {
            margin: 20px 7% 55px;
            padding: 40px 25px;
            border: 1px solid #49202c;
            border-radius: 14px;
            background: linear-gradient(120deg, #401722, #202026);
            text-align: center;
        }

        .closing h2 {
            font-size: 27px;
            margin-bottom: 10px;
        }

        .closing p {
            color: #d0cbd0;
            margin-bottom: 20px;
        }

        footer {
            padding: 24px;
            border-top: 1px solid #303039;
            background: #17171c;
            color: #aaaab5;
            font-size: 12px;
            text-align: center;
        }

        footer strong {
            color: #ff5261;
        }

        @media (max-width: 1000px) {
            .hero {
                grid-template-columns: 1fr;
            }

            .hero-posters {
                max-width: 500px;
            }

            .movie-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 600px) {
            nav {
                padding: 18px 5%;
            }

            .menu {
                gap: 14px;
            }

            .hero,
            .section {
                padding: 35px 5%;
            }

            .hero-posters img {
                height: 190px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .movie-grid {
                grid-template-columns: 1fr;
            }

            .movie-card img,
            .poster-placeholder {
                height: 330px;
            }

            .button-outline {
                margin: 12px 0 0;
            }

            .closing {
                margin: 10px 5% 35px;
            }
        }
    </style>
</head>

<body>

<nav>
    <a href="{{ route('home') }}" class="brand">
        LAYAR NUSANTARA
        <small>JELAJAHI SINEMA INDONESIA</small>
    </a>

    <div class="menu">
        <a href="{{ route('home') }}" class="active">Home</a>
        <a href="{{ route('profil') }}">Profil</a>
        <a href="{{ route('movies.index') }}">Katalog Film</a>
        <a href="{{ route('genre') }}">Genre</a>
        <a href="{{ route('tentang') }}">Tentang</a>
    </div>
</nav>

@php
    use App\Models\Movie;

    $jumlahFilm = Movie::count();

    $filmUnggulan = Movie::query()
        ->orderByDesc('id')
        ->take(4)
        ->get();

    $namaPosterHome = [
        'Agak Laen' => 'aga laen.jpg',
        'Dilan 1990' => 'Dilan 1990.jpg',
        'Jumbo' => 'jumbo.jpg',
        'Keluarga Cemara' => 'keluarga cemara.jpg',
        'KKN di Desa Penari' => 'kkn.jpg',
        'Laskar Pelangi' => 'laskar pelangi.jpg',
        'Miracle in Cell No. 7' => 'miracle.jpg',
        'Pengabdi Setan 2: Communion' => 'pengabdi setan 2.jpg',
        'Sewu Dino' => 'sewu dino.jpg',
        'Petualangan Sherina 2' => 'sherina.jpg',
    ];
@endphp

<header class="hero">
    <div>
        <span class="label">SINEMA INDONESIA</span>

        <h1>
            Temukan Cerita,<br>
            <span class="highlight">Rasakan Emosinya.</span>
        </h1>

        <p>
            Jelajahi film-film Indonesia dari berbagai genre.
            Temukan kisah horor yang menegangkan, drama yang menyentuh,
            komedi yang menghibur, dan petualangan yang seru.
        </p>

        <a href="{{ route('movies.index') }}" class="button">
            Jelajahi Film &rarr;
        </a>

        <a href="{{ route('profil') }}" class="button-outline">
            Kenali Kami
        </a>
    </div>

    <div class="hero-posters">
        <img src="{{ asset('images/aga laen.jpg') }}"
             alt="Poster Agak Laen"
             onerror="this.onerror=null;this.src='{{ asset('images/Dilan 1990.jpg') }}';">

        <img src="{{ asset('images/jumbo.jpg') }}"
             alt="Poster Jumbo"
             onerror="this.onerror=null;this.src='{{ asset('images/keluarga cemara.jpg') }}';">
    </div>
</header>

<main class="section">

    <div class="section-heading">
        <div>
            <h2>Jelajahi Sinema Indonesia</h2>
            <p>Kenali film melalui informasi yang tersedia di katalog.</p>
        </div>
    </div>

        <div class="stat-card">
            <strong>Beragam</strong>
            <span>Pilihan genre film</span>
        </div>

        <div class="stat-card">
            <strong>Indonesia</strong>
            <span>Fokus katalog film</span>
        </div>
    </div>

    <div class="section-heading">
        <div>
            <h2>Film Terbaru Ditambahkan</h2>
            <p>Beberapa film yang tersedia di database kamu.</p>
        </div>

        <a href="{{ route('movies.index') }}">Lihat Semua &rarr;</a>
    </div>

    @if ($filmUnggulan->count() > 0)
        <div class="movie-grid">
            @foreach ($filmUnggulan as $movie)
                @php
                    $poster = $namaPosterHome[$movie->title]
                        ?? basename(str_replace('\\', '/', $movie->poster ?? ''));

                    $posterAda = $poster !== ''
                        && file_exists(public_path('images/' . $poster));
                @endphp

                <article class="movie-card">
                    @if ($posterAda)
                        <img
                            src="{{ asset('images/' . $poster) }}"
                            alt="Poster {{ $movie->title }}"
                            loading="lazy"
                        >
                    @else
                        <div class="poster-placeholder">
                            Poster {{ $movie->title }} belum tersedia.
                        </div>
                    @endif

                    <div class="movie-info">
                        <span class="badge">{{ $movie->genre }}</span>

                        <h3>{{ $movie->title }}</h3>

                        <p>
                            Tahun: {{ $movie->release_year }}
                            @if ($movie->duration)
                                &bull; {{ $movie->duration }} menit
                            @endif
                        </p>

                        <a
                            href="{{ route('movies.show', ['id' => $movie->id]) }}"
                            class="detail-link"
                        >
                            Lihat Detail &rarr;
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    @else
        <div class="empty">
            Belum ada data film. Tambahkan data film terlebih dahulu ke database.
        </div>
    @endif

</main>

<section class="closing">
    <h2>Temukan Film Favoritmu Berikutnya</h2>
    <p>
        Mulai jelajahi koleksi film Indonesia dan temukan cerita
        yang sesuai dengan seleramu.
    </p>
    <a href="{{ route('movies.index') }}" class="button">
        Buka Katalog Film &rarr;
    </a>
</section>

<footer>
    &copy; {{ date('Y') }}
    <strong>Layar Nusantara</strong>.
    Mengenal dan mengapresiasi film Indonesia.
</footer>

</body>
</html>