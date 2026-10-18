<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film | Layar Nusantara</title>

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
            line-height: 1.7;
        }

        header {
            background: #19191e;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
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
            color: #aaaab5;
            font-size: 10px;
            letter-spacing: 2px;
        }

        nav {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav a {
            color: #dddde3;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        nav a:hover {
            color: #ff5261;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 25px 70px;
        }

        .back {
            display: inline-block;
            color: white;
            border: 1px solid #555;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            margin-bottom: 25px;
        }

        .back:hover {
            background: #333;
        }

        .detail {
            display: grid;
            grid-template-columns: 350px minmax(0, 1fr);
            gap: 30px;
            align-items: start;
        }

        .poster-box {
            background: #232329;
            border: 1px solid #34343c;
            border-radius: 14px;
            overflow: hidden;
        }

        .poster {
            display: block;
            width: 100%;
            height: 500px;
            object-fit: contain;
            background: #232329;
        }

        .poster-placeholder {
            min-height: 350px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #ff8791;
        }

        .info {
            background: #232329;
            border: 1px solid #34343c;
            border-radius: 14px;
            padding: 30px;
        }

        .label {
            color: #ff5261;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        h1 {
            font-size: clamp(28px, 4vw, 42px);
            line-height: 1.2;
            margin: 12px 0 18px;
        }

        .genre {
            display: inline-block;
            background: #49202c;
            color: #ff9ba4;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .meta {
            border-top: 1px solid #393940;
            padding-top: 18px;
            margin-bottom: 12px;
        }

        h2 {
            font-size: 21px;
            margin: 25px 0 10px;
        }

        .description {
            color: #d0d0d8;
            white-space: pre-line;
        }

        .button {
            display: inline-block;
            background: #e83d50;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 7px;
            margin-top: 25px;
            font-weight: bold;
        }

        .button:hover {
            background: #c92c3e;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: #19191e;
            border-top: 1px solid #303036;
            color: #aaaab5;
            font-size: 13px;
        }

        footer strong {
            color: #ff5261;
        }

        @media (max-width: 750px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            .detail {
                grid-template-columns: 1fr;
            }

            .poster-box {
                max-width: 350px;
                width: 100%;
                margin: auto;
            }

            .poster {
                height: 450px;
            }

            .info {
                padding: 22px;
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
        <a href="{{ route('genre') }}">Genre</a>
        <a href="{{ route('tentang') }}">Tentang</a>
    </nav>
</header>

<main class="container">

    <a href="{{ route('movies.index') }}" class="back">
        &larr; Kembali ke Katalog
    </a>

    <div class="detail">

        <div class="poster-box">
            @php
                $posterPath = 'images/' . $film['poster'];
            @endphp

            @if (file_exists(public_path($posterPath)))
                <img
                    class="poster"
                    src="{{ asset($posterPath) }}"
                    alt="Poster {{ $film['title'] }}"
                >
            @else
                <div class="poster-placeholder">
                    Poster {{ $film['title'] }} belum ditemukan.
                    Periksa nama file di folder public/images.
                </div>
            @endif
        </div>

        <section class="info">

            <div class="label">DETAIL FILM INDONESIA</div>

            <h1>{{ $film['title'] }}</h1>

            <span class="genre">{{ $film['genre'] }}</span>

            <div class="meta">
                <p>
                    <strong>Tahun Rilis:</strong>
                    {{ $film['year'] ?? $film['release_year'] ?? '-' }}
                </p>

                <p>
                    <strong>Durasi:</strong>
                    {{ $film['duration'] ?? '-' }} menit
                </p>
            </div>

            <h2>Sinopsis Film</h2>

            <p class="description">
                {{ $film['description'] ?? 'Sinopsis belum tersedia.' }}
            </p>

            <a href="{{ route('movies.index') }}" class="button">
                Kembali ke Daftar Film
            </a>

        </section>

    </div>

</main>

<footer>
    &copy; {{ date('Y') }}
    <strong>Layar Nusantara</strong>.
    Mengenal dan mengapresiasi film Indonesia.
</footer>

</body>
</html>