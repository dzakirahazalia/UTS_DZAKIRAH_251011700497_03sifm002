<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class MovieController extends Controller
{
    /**
     * Daftar film tambahan yang tidak berasal dari database.
     */
    private function filmTambahan(): array
    {
        return [
            [
                'id' => null,
                'slug' => 'keluarga-cemara',
                'title' => 'Keluarga Cemara',
                'genre' => 'Drama, Keluarga',
                'release_year' => 2019,
                'duration' => 110,
                'description' => 'Kisah keluarga yang belajar bertahan dan saling mendukung saat menghadapi perubahan hidup.',
                'poster' => 'keluarga cemara.jpg',
                'tipe' => 'tambahan',
            ],
            [
                'id' => null,
                'slug' => 'pengabdi-setan-2-communion',
                'title' => 'Pengabdi Setan 2: Communion',
                'genre' => 'Horor, Misteri',
                'release_year' => 2022,
                'duration' => 119,
                'description' => 'Sebuah keluarga menghadapi teror misterius setelah pindah ke rumah susun.',
                'poster' => 'pengabdi setan 2.jpg',
                'tipe' => 'tambahan',
            ],
            [
                'id' => null,
                'slug' => 'sewu-dino',
                'title' => 'Sewu Dino',
                'genre' => 'Horor, Misteri',
                'release_year' => 2023,
                'duration' => 121,
                'description' => 'Seorang perempuan terlibat dalam ritual misterius yang menyimpan bahaya.',
                'poster' => 'sewu dino.jpg',
                'tipe' => 'tambahan',
            ],
            [
                'id' => null,
                'slug' => 'dilan-1990',
                'title' => 'Dilan 1990',
                'genre' => 'Drama, Romantis',
                'release_year' => 2018,
                'duration' => 110,
                'description' => 'Kisah cinta Dilan dan Milea yang bermula di Bandung pada tahun 1990.',
                'poster' => 'Dilan 1990.jpg',
                'tipe' => 'tambahan',
            ],
            [
                'id' => null,
                'slug' => 'jumbo',
                'title' => 'Jumbo',
                'genre' => 'Animasi, Keluarga',
                'release_year' => 2025,
                'duration' => 102,
                'description' => 'Petualangan Don dan teman-temannya tentang persahabatan dan keberanian.',
                'poster' => 'jumbo.jpg',
                'tipe' => 'tambahan',
            ],
        ];
    }

    /**
     * Mengambil nama file poster dari data film.
     */
    private function namaPoster($poster): string
    {
        $poster = trim(str_replace('\\', '/', (string) $poster));

        return basename($poster);
    }

    /**
     * Menampilkan katalog film.
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Menampilkan detail film dari database.
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.show', compact('movie'));
    }

    /**
     * Menampilkan detail film tambahan.
     */
    public function detailTambahan($judul)
    {
        $film = collect($this->filmTambahan())
            ->firstWhere('slug', $judul);

        abort_if(!$film, 404);

        return view('movies.detail-tambahan', compact('film'));
    }

    /**
     * Menampilkan genre dan seluruh film yang sesuai.
     */
    public function genre(Request $request)
    {
        $filmDatabase = Movie::all()->map(function ($movie) {
            return [
                'id' => $movie->id,
                'slug' => null,
                'title' => $movie->title,
                'genre' => $movie->genre ?? '',
                'release_year' => $movie->release_year ?? null,
                'duration' => $movie->duration ?? null,
                'description' => $movie->description ?? '',
                'poster' => $movie->poster ?? '',
                'tipe' => 'database',
            ];
        });

        $filmTambahan = collect($this->filmTambahan());

        // Gabungkan film database dan film tambahan.
        $semuaFilm = $filmDatabase
            ->concat($filmTambahan)
            ->values();

        // Ambil semua nama genre, termasuk genre film tambahan.
        $genres = $semuaFilm
            ->flatMap(function ($film) {
                return array_map(
                    'trim',
                    explode(',', (string) $film['genre'])
                );
            })
            ->filter()
            ->unique()
            ->sort()
            ->values();

        $selectedGenre = trim((string) $request->query('genre', ''));

        // Jika genre dipilih, tampilkan film yang cocok.
        $movies = collect();

        if ($selectedGenre !== '' && $genres->contains($selectedGenre)) {
            $movies = $semuaFilm
                ->filter(function ($film) use ($selectedGenre) {
                    $daftarGenre = array_map(
                        'trim',
                        explode(',', (string) $film['genre'])
                    );

                    return in_array($selectedGenre, $daftarGenre, true);
                })
                ->map(function ($film) {
                    $film['poster'] = $this->namaPoster(
                        $film['poster'] ?? ''
                    );

                    $film['poster_url'] = $film['poster'] !== ''
                        ? asset('images/' . rawurlencode($film['poster']))
                        : null;

                    $film['poster_tersedia'] = $film['poster'] !== ''
                        && file_exists(
                            public_path('images/' . $film['poster'])
                        );

                    return $film;
                })
                ->values();
        }

        return view('movies.genre', [
            'genres' => $genres,
            'selectedGenre' => $selectedGenre,
            'movies' => $movies,
        ]);
    }
}
