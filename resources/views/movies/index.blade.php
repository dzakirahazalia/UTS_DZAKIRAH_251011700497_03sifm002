<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Film | Layar Nusantara</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #111115;
            color: #f7f7f8;
            line-height: 1.6;
        }

        .navbar {
            background: #19191e;
            padding: 20px 7%;
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
            text-decoration: none;
        }

        .brand small {
            display: block;
            color: #c0c0c7;
            font-size: 10px;
            letter-spacing: 2px;
        }

        nav {
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        nav a {
            color: #d0d0d6;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        nav a:hover,
        nav a.active {
            color: #ff5261;
        }

        .hero {
            padding: 65px 7%;
            background:
                radial-gradient(ellipse at 15% 50%, #551724 0%, transparent 60%),
                linear-gradient(120deg, #211218, #151519 75%);
        }

        .badge {
            display: inline-block;
            background: #e83d50;
            color: white;
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .hero h1 {
            font-size: clamp(32px, 5vw, 48px);
            margin-bottom: 12px;
        }

        .accent {
            color: #ff5261;
        }

        .hero p {
            color: #d1cbd0;
            max-width: 650px;
        }

        .container {
            max-width: 1500px;
            margin: auto;
            padding: 55px 7%;
        }

        .heading {
            margin-bottom: 28px;
        }

        .heading h2 {
            font-size: 29px;
            border-left: 4px solid #ff5261;
            padding-left: 14px;
            margin-bottom: 8px;
        }

        .heading p {
            color: #9999a5;
            font-size: 14px;
        }

        .movie-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 22px;
        }

        .movie-card {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            background: #232329;
            border: 1px solid #33333b;
            border-radius: 12px;
            transition: .25s;
        }

        .movie-card:hover {
            transform: translateY(-5px);
            border-color: #ff5261;
        }

        .poster,
        .poster-placeholder {
            width: 100%;
            height: 300px;
            object-fit: cover;
            background: #30252d;
        }

        .poster-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 20px;
            text-align: center;
            background: linear-gradient(145deg, #49202c, #25252d);
            color: #ff8791;
            font-weight: bold;
        }

        .film-icon {
            font-size: 45px;
        }

        .movie-content {
            padding: 18px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .genre {
            align-self: flex-start;
            background: #49202c;
            color: #ff9ba4;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11px;
            margin-bottom: 10px;
        }

        .movie-content h3 {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .meta {
            color: #aaaab5;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .description {
            color: #c4c4cd;
            font-size: 13px;
            margin-bottom: 18px;
            flex: 1;
        }

        .movie-button {
            display: block;
            text-align: center;
            padding: 11px;
            background: #e83d50;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            margin-top: auto;
        }

        .movie-button:hover {
            background: #c92c3e;
        }

        .empty {
            padding: 35px;
            text-align: center;
            background: #232329;
            border-radius: 10px;
            color: #c4c4cd;
        }

        .footer {
            background: #19191e;
            border-top: 1px solid #303036;
            padding: 25px 7%;
            text-align: center;
            color: #aaaab5;
            font-size: 13px;
        }

        .footer strong {
            color: #ff5261;
        }

        @media (max-width: 1100px) {
            .movie-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 850px) {
            .movie-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 650px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .movie-grid {
                grid-template-columns: 1fr;
            }

            .container {
                padding: 40px 6%;
            }
        }
    </style>
</head>

<body>

<header class="navbar">
    <a href="{{ route('home') }}" class="brand">
        LAYAR NUSANTARA
        <small>JELAJAHI SINEMA INDONESIA</small>
    </a>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('profil') }}">Profil</a>
        <a href="{{ route('movies.index') }}" class="active">Katalog Film</a>
        <a href="{{ route('genre') }}">Genre</a>
        <a href="{{ route('tentang') }}">Tentang</a>
    </nav>
</header>

<section class="hero">
    <span class="badge">KOLEKSI SINEMA INDONESIA</span>
    <h1>Katalog <span class="accent">Film Indonesia.</span></h1>
    <p>
        Temukan film Indonesia dari berbagai genre,
        mulai dari horor, drama, komedi, hingga petualangan.
    </p>
</section>

<main class="container">

    <div class="heading">
        <h2>Semua Film</h2>
        <p>Koleksi film yang tersedia di Layar Nusantara.</p>
    </div>

    @php
        $filmTambahan = [
            [
                'title' => 'Keluarga Cemara',
                'genre' => 'Drama, Keluarga',
                'release_year' => 2019,
                'duration' => 110,
                'description' => 'Kisah keluarga yang belajar bertahan dan saling mendukung saat menghadapi perubahan hidup.',
                'poster' => 'keluarga cemara.jpg',
                'slug' => 'keluarga-cemara',
            ],
            [
                'title' => 'Pengabdi Setan 2: Communion',
                'genre' => 'Horor, Misteri',
                'release_year' => 2022,
                'duration' => 119,
                'description' => 'Sebuah keluarga menghadapi teror misterius setelah pindah ke rumah susun.',
                'poster' => 'pengabdi setan 2.jpg',
                'slug' => 'pengabdi-setan-2-communion',
            ],
            [
                'title' => 'Sewu Dino',
                'genre' => 'Horor, Misteri',
                'release_year' => 2023,
                'duration' => 121,
                'description' => 'Seorang perempuan terlibat dalam ritual misterius yang menyimpan bahaya.',
                'poster' => 'sewu dino.jpg',
                'slug' => 'sewu-dino',
            ],
            [
                'title' => 'Dilan 1990',
                'genre' => 'Drama, Romantis',
                'release_year' => 2018,
                'duration' => 110,
                'description' => 'Kisah cinta Dilan dan Milea yang bermula di Bandung.',
                'poster' => 'Dilan 1990.jpg',
                'slug' => 'dilan-1990',
            ],
            [
                'title' => 'Jumbo',
                'genre' => 'Animasi, Keluarga',
                'release_year' => 2025,
                'duration' => 102,
                'description' => 'Petualangan Don dan teman-temannya tentang persahabatan dan keberanian.',
                'poster' => 'jumbo.jpg',
                'slug' => 'jumbo',
            ],
        ];

        $posterAlternatif = [
            'Agak Laen' => 'aga laen.jpg',
            'KKN di Desa Penari' => 'kkn.jpg',
            'Laskar Pelangi' => 'laskar pelangi.jpg',
            'Miracle in Cell No. 7' => 'miracle.jpg',
            'Petualangan Sherina 2' => 'sherina.jpg',
            'Keluarga Cemara' => 'keluarga cemara.jpg',
            'Pengabdi Setan 2: Communion' => 'pengabdi setan 2.jpg',
            'Sewu Dino' => 'sewu dino.jpg',
            'Dilan 1990' => 'Dilan 1990.jpg',
            'Jumbo' => 'jumbo.jpg',
        ];

        $judulDatabase = $movies->pluck('title')
            ->map(fn($judul) => strtolower(trim($judul)))
            ->all();

        $tambahanUnik = collect($filmTambahan)->reject(
            fn($film) => in_array(
                strtolower(trim($film['title'])),
                $judulDatabase
            )
        );

        $filmDariDatabase = $movies->map(fn($movie) => [
            'id' => $movie->id,
            'title' => $movie->title,
            'genre' => $movie->genre,
            'release_year' => $movie->release_year,
            'duration' => $movie->duration,
            'description' => $movie->description,
            'poster' => $movie->poster,
            'slug' => null,
            'dariDatabase' => true,
        ]);

        $filmDariTambahan = $tambahanUnik->map(fn($film) => array_merge(
            $film,
            [
                'id' => null,
                'dariDatabase' => false,
            ]
        ));

        $filmTampil = $filmDariDatabase->concat($filmDariTambahan);
    @endphp

    @if($filmTampil->count() > 0)

        <div class="movie-grid">

            @foreach($filmTampil as $film)

                @php
                    $posterFile = $posterAlternatif[$film['title']]
                        ?? basename(str_replace('\\', '/', $film['poster'] ?? ''));

                    $posterPath = public_path('images/' . $posterFile);

                    $posterAda = $posterFile !== ''
                        && file_exists($posterPath);
                @endphp

                <article class="movie-card">

                    @if($posterAda)
                        <img
                            class="poster"
                            src="{{ asset('images/' . rawurlencode($posterFile)) }}"
                            alt="Poster {{ $film['title'] }}"
                            loading="lazy"
                        >
                    @else
                        <div class="poster-placeholder">
                            <span class="film-icon">&#127916;</span>
                            <span>{{ $film['title'] }}</span>
                        </div>
                    @endif

                    <div class="movie-content">

                        <span class="genre">
                            {{ $film['genre'] ?? 'Genre belum tersedia' }}
                        </span>

                        <h3>{{ $film['title'] }}</h3>

                        <p class="meta">
                            Tahun: {{ $film['release_year'] ?? '-' }}
                            &bull;
                            {{ $film['duration'] ?? '-' }} menit
                        </p>

                        <p class="description">
                            {{ $film['description'] ?? 'Belum ada deskripsi film.' }}
                        </p>

                        @if($film['dariDatabase'])
                            <a
                                href="{{ route('movies.show', $film['id']) }}"
                                class="movie-button"
                            >
                                Lihat Detail &rarr;
                            </a>
                        @else
                            <a
                                href="{{ url('/film-tambahan/' . $film['slug']) }}"
                                class="movie-button"
                            >
                                Lihat Detail &rarr;
                            </a>
                        @endif

                    </div>
                </article>

            @endforeach

        </div>

    @else

        <div class="empty">
            <h3>Belum Ada Film</h3>
            <p>Data film belum tersedia di database.</p>
        </div>

    @endif

</main>

<footer class="footer">
    &copy; {{ date('Y') }}
    <strong>Layar Nusantara</strong>.
    Mengenal dan mengapresiasi film Indonesia.
</footer>

</body>
</html>