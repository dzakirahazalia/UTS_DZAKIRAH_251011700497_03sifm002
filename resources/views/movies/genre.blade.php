<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre Film | Layar Nusantara</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #080808;
            color: #f5f5f7;
            font-family: Arial, sans-serif;
        }

        header {
            padding: 20px 7%;
            background: #111114;
            border-bottom: 1px solid #29292e;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
        }

        .brand {
            color: #ff4358;
            font-size: 24px;
            font-weight: 900;
            text-decoration: none;
        }

        .brand small {
            display: block;
            margin-top: 4px;
            color: #aaaab5;
            font-size: 10px;
            font-weight: normal;
            letter-spacing: 2px;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 22px;
        }

        nav a {
            color: #e0e0e5;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }

        nav a:hover,
        nav a.active {
            color: #ff4358;
        }

        main {
            flex: 1;
            width: 100%;
            max-width: 1500px;
            margin: 0 auto;
            padding: 42px 7% 60px;
        }

        .heading {
            margin-bottom: 26px;
        }

        .heading h1 {
            margin-bottom: 8px;
            font-size: 32px;
        }

        .heading p,
        .result-heading p {
            color: #a1a1ad;
            font-size: 14px;
            line-height: 1.6;
        }

        .genre-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
        }

        .genre-card {
            min-height: 78px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            border: 1px solid #29292e;
            border-radius: 13px;
            background: #101010;
            color: #e0e0e5;
            font-size: 16px;
            text-decoration: none;
            transition: .2s;
        }

        .genre-card:hover,
        .genre-card.selected {
            background: #28151b;
            border-color: #ff4358;
            color: white;
        }

        .arrow {
            color: #ff4358;
            font-size: 22px;
        }

        .results {
            margin-top: 42px;
            scroll-margin-top: 20px;
        }

        .result-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 22px;
        }

        .result-heading h2 {
            font-size: 25px;
        }

        .highlight {
            color: #ff4358;
        }

        .movie-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .movie-card {
            overflow: hidden;
            background: #19191e;
            border: 1px solid #303037;
            border-radius: 13px;
            transition: .2s;
        }

        .movie-card:hover {
            transform: translateY(-4px);
            border-color: #ff4358;
        }

        .poster,
        .poster-placeholder {
            display: block;
            width: 100%;
            height: 285px;
            background: #292930;
        }

        .poster {
            object-fit: cover;
            object-position: center;
        }

        .poster-placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            text-align: center;
            color: #ff7c8b;
            background: linear-gradient(145deg, #40202a, #17171b);
            line-height: 1.6;
        }

        .movie-info {
            padding: 17px;
        }

        .movie-info h3 {
            margin-bottom: 10px;
            font-size: 17px;
            line-height: 1.4;
        }

        .badge {
            display: inline-block;
            margin-bottom: 12px;
            padding: 6px 11px;
            border-radius: 20px;
            background: #49202c;
            color: #ff9ba4;
            font-size: 12px;
        }

        .movie-info p {
            margin-bottom: 12px;
            color: #aaaab5;
            font-size: 13px;
            line-height: 1.6;
        }

        .description {
            min-height: 60px;
        }

        .detail-link {
            display: block;
            padding: 12px;
            border: none;
            border-radius: 7px;
            background: #e83d50;
            color: white;
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }

        .detail-link:hover {
            background: #c92e40;
        }

        .empty {
            padding: 32px 20px;
            border: 1px solid #29292e;
            border-radius: 12px;
            background: #111114;
            color: #aaaab5;
            text-align: center;
        }

        .empty h3 {
            margin-bottom: 8px;
            color: white;
        }

        footer {
            margin-top: auto;
            padding: 25px 15px;
            border-top: 1px solid #29292e;
            background: #111114;
            color: #92929c;
            font-size: 12px;
            text-align: center;
        }

        footer strong {
            color: #ff4358;
        }

        @media (max-width: 1050px) {
            .genre-grid,
            .movie-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 750px) {
            header {
                padding: 20px;
            }

            nav {
                gap: 14px;
            }

            main {
                padding: 30px 20px 45px;
            }

            .genre-grid,
            .movie-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 12px;
            }

            .poster,
            .poster-placeholder {
                height: 220px;
            }
        }

        @media (max-width: 430px) {
            .genre-grid,
            .movie-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header>
    <a href="{{ route('home') }}" class="brand">
        LAYAR NUSANTARA
        <small>JELAJAHI SINEMA INDONESIA</small>
    </a>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('profil') }}">Profil</a>
        <a href="{{ route('movies.index') }}">Katalog Film</a>
        <a href="{{ route('genre') }}" class="active">Genre</a>
        <a href="{{ route('tentang') }}">Tentang</a>
    </nav>
</header>

<main>
    <section class="heading">
        <h1>Genre Film</h1>
        <p>Pilih genre untuk melihat film yang sesuai dengan kategorinya.</p>
    </section>

    <section class="genre-grid">
        @foreach ($genres as $genre)
            <a
                href="{{ route('genre', ['genre' => $genre]) }}#hasil"
                class="genre-card {{ isset($selectedGenre) && strcasecmp($selectedGenre, $genre) === 0 ? 'selected' : '' }}"
            >
                <span>{{ $genre }}</span>
                <span class="arrow">&rsaquo;</span>
            </a>
        @endforeach
    </section>

    @if (!empty($selectedGenre))
        <section class="results" id="hasil">
            <div class="result-heading">
                <h2>
                    Film <span class="highlight">{{ $selectedGenre }}</span>
                </h2>
                <p>{{ $movies->count() }} film ditemukan</p>
            </div>

            @if ($movies->count() > 0)
                <div class="movie-grid">
                    @foreach ($movies as $movie)
                        @php
                            $dataFilm = is_array($movie)
                                ? $movie
                                : $movie->toArray();

                            $judul = $dataFilm['title'] ?? 'Film';
                            $genreFilm = $dataFilm['genre'] ?? '-';

                            $tahun = $dataFilm['release_year']
                                ?? $dataFilm['year']
                                ?? '-';

                            $durasi = $dataFilm['duration'] ?? null;
                            $deskripsi = $dataFilm['description'] ?? '';

                            /*
                             * Nama poster disesuaikan dengan file
                             * yang ada di folder public/images.
                             */
                            $posterSesuai = [
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

                            $poster = $posterSesuai[$judul] ?? '';

                            /*
                             * Jika judul tidak ada di daftar di atas,
                             * coba gunakan nama poster dari database.
                             */
                            if ($poster === '') {
                                $posterDatabase = $dataFilm['poster'] ?? '';

                                $posterDatabase = str_replace(
                                    '\\',
                                    '/',
                                    (string) $posterDatabase
                                );

                                $poster = basename($posterDatabase);
                            }

                            $posterPath = public_path('images/' . $poster);

                            $posterTersedia = $poster !== ''
                                && file_exists($posterPath);

                            $filmTambahan = ($dataFilm['tipe'] ?? '') === 'tambahan'
                                || !empty($dataFilm['is_extra']);

                            $slug = $dataFilm['slug'] ?? null;
                            $idFilm = $dataFilm['id'] ?? null;
                        @endphp

                        <article class="movie-card">
                            @if ($posterTersedia)
                                <img
                                    src="{{ asset('images/' . $poster) }}"
                                    alt="Poster {{ $judul }}"
                                    class="poster"
                                    loading="lazy"
                                >
                            @else
                                <div class="poster-placeholder">
                                    Poster {{ $judul }} belum ditemukan.
                                    Periksa nama file di folder public/images.
                                </div>
                            @endif

                            <div class="movie-info">
                                <span class="badge">{{ $genreFilm }}</span>

                                <h3>{{ $judul }}</h3>

                                <p>
                                    Tahun: {{ $tahun }}
                                    @if (!empty($durasi))
                                        &bull; {{ $durasi }} menit
                                    @endif
                                </p>

                                <p class="description">
                                    {{ $deskripsi }}
                                </p>

                                @if ($filmTambahan && !empty($slug))
                                    <a
                                        class="detail-link"
                                        href="{{ route('movies.detail-tambahan', ['judul' => $slug]) }}"
                                    >
                                        Lihat Detail &rarr;
                                    </a>
                                @elseif (!empty($idFilm))
                                    <a
                                        class="detail-link"
                                        href="{{ route('movies.show', ['id' => $idFilm]) }}"
                                    >
                                        Lihat Detail &rarr;
                                    </a>
                                @else
                                    <span class="detail-link">
                                        Detail belum tersedia
                                    </span>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="empty">
                    <h3>Belum ada film dalam genre ini</h3>
                    <p>Coba pilih genre lain.</p>
                </div>
            @endif
        </section>
    @else
        <section class="results">
            <div class="empty">
                <h3>Pilih genre film</h3>
                <p>Tekan salah satu kategori di atas untuk melihat daftar film.</p>
            </div>
        </section>
    @endif
</main>

<footer>
    &copy; {{ date('Y') }} <strong>Layar Nusantara</strong>.
    Jelajahi dan apresiasi sinema Indonesia.
</footer>

</body>
</html>