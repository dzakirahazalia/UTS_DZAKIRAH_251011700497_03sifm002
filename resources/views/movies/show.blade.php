<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->title }} | Layar Nusantara</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #111115;
            color: #f5f5f5;
            font-family: Arial, sans-serif;
            line-height: 1.7;
        }

        .navbar, footer {
            background: #19191e;
            border-color: #33333b !important;
        }

        .brand {
            color: #ff5261;
            font-size: 22px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-link {
            color: #dddde3;
            font-size: 14px;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #ff5261;
        }

        .detail-label {
            color: #ff6573;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .poster-box {
            background: #232329;
            border: 1px solid #373740;
            border-radius: 14px;
            overflow: hidden;
            min-height: 420px;
        }

        .poster {
            display: block;
            width: 100%;
            height: 520px;
            object-fit: contain;
            background: #232329;
        }

        .poster-placeholder {
            min-height: 420px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            color: #ff8791;
        }

        .panel {
            background: #222228;
            border: 1px solid #373740;
            border-radius: 12px;
            padding: 30px;
        }

        .genre-badge {
            display: inline-block;
            background: #49202c;
            color: #ff9ba4;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
        }

        .movie-description {
            color: #d0d0d8;
            white-space: pre-line;
        }

        .btn-danger {
            background: #e83d50;
            border-color: #e83d50;
        }

        .btn-danger:hover {
            background: #c92e40;
            border-color: #c92e40;
        }

        .back-button {
            color: #f5f5f5;
            border: 1px solid #555;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
        }

        .back-button:hover {
            background: #292930;
            color: #ff6573;
        }

        footer {
            color: #aaaab5;
            border-top: 1px solid #33333b;
        }

        @media (max-width: 767px) {
            .poster {
                height: 450px;
            }

            .panel {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark border-bottom">
        <div class="container py-2">

            <a class="brand" href="{{ route('home') }}">
                LAYAR NUSANTARA
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka menu navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <div class="navbar-nav ms-auto gap-lg-3">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    <a class="nav-link" href="{{ route('profil') }}">Profil</a>
                    <a class="nav-link" href="{{ route('movies.index') }}">Katalog Film</a>
                    <a class="nav-link" href="{{ route('genre') }}">Genre</a>
                    <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                </div>
            </div>

        </div>
    </nav>

    <!-- DETAIL FILM -->
    <main class="container py-5">

        <div class="mb-4">
            <a href="{{ route('movies.index') }}" class="back-button">
                &larr; Kembali ke Katalog
            </a>
        </div>

        <div class="row g-4 align-items-start">

            <!-- POSTER FILM -->
            <div class="col-md-4">
                <div class="poster-box">

                    @php
                        $namaPoster = trim(str_replace('\\', '/', $movie->poster ?? ''));
                        $namaPoster = basename($namaPoster);

                        // Jika nama poster tidak tersedia, coba cocokkan berdasarkan judul.
                        $posterAlternatif = [
                            'Agak Laen' => 'aga laen.jpg',
                            'Keluarga Cemara' => 'keluarga cemara.jpg',
                            'Pengabdi Setan 2: Communion' => 'pengabdi setan 2.jpg',
                            'Sewu Dino' => 'sewu dino.jpg',
                            'Dilan 1990' => 'Dilan 1990.jpg',
                            'Jumbo' => 'jumbo.jpg',
                            'KKN di Desa Penari' => 'kkn.jpg',
                            'Laskar Pelangi' => 'laskar pelangi.jpg',
                            'Miracle in Cell No. 7' => 'miracle.jpg',
                            'Petualangan Sherina 2' => 'sherina.jpg',
                        ];

                        if ($namaPoster === '' || !file_exists(public_path('images/' . $namaPoster))) {
                            $namaPoster = $posterAlternatif[$movie->title] ?? '';
                        }

                        $filePosterAda = $namaPoster !== ''
                            && file_exists(public_path('images/' . $namaPoster));
                    @endphp

                    @if($filePosterAda)
                        <img
                            src="{{ asset('images/' . $namaPoster) }}"
                            alt="Poster {{ $movie->title }}"
                            class="poster"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <div class="poster-placeholder" style="display:none;">
                            Poster tidak dapat dimuat. Periksa nama file gambar.
                        </div>
                    @else
                        <div class="poster-placeholder">
                            Poster {{ $movie->title }} belum ditemukan.
                            Periksa nama file di folder public/images.
                        </div>
                    @endif

                </div>
            </div>

            <!-- INFORMASI FILM -->
            <div class="col-md-8">
                <div class="panel">

                    <span class="detail-label">
                        DETAIL FILM INDONESIA
                    </span>

                    <h1 class="fw-bold mt-2 mb-3">
                        {{ $movie->title }}
                    </h1>

                    <span class="genre-badge">
                        {{ $movie->genre }}
                    </span>

                    <hr class="border-secondary my-4">

                    <p>
                        <strong>Tahun Rilis:</strong>
                        {{ $movie->release_year }}
                    </p>

                    <p>
                        <strong>Durasi:</strong>
                        {{ $movie->duration }} menit
                    </p>

                    <h5 class="mt-4 mb-2">Sinopsis Film</h5>

                    <p class="movie-description">{{ $movie->description }}</p>

                    <a href="{{ route('movies.index') }}"
                        class="btn btn-danger mt-3 px-4 py-2">
                        Kembali ke Daftar Film
                    </a>

                </div>
            </div>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="text-center py-4 mt-4">
        <small>
            &copy; {{ date('Y') }} Layar Nusantara.
            Apresiasi untuk perfilman Indonesia.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>