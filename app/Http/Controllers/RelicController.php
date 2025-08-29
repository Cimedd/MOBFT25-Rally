<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelicController extends Controller
{
    public function index()
    {
        session_start();
        return view('displaycards');
    }

    public function findTheRelic()
    {
        session_start();
        $cardsA = [
            1 => [
                'code' => 'POHON',
                'question' => 'Apa kepanjangan dari UBAYA?',
                'options' => [
                    'A. Universitas Brawijaya',
                    'B. Universitas Negeri Surabaya',
                    'C. Universitas Surabaya',
                    'D. Universitas Banyuwangi'
                ],
                'answer' => 'C. Universitas Surabaya',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 1-01.jpg',
            ],
            2 => [
                'code' => 'RIMBA',
                'question' => 'Pulau Sulawesi terletak di antara dua pulau besar, yaitu ...',
                'options' => [
                    'A. Jawa dan Sumatra',
                    'B. Kalimantan dan Papua',
                    'C. Bali dan Lombok',
                    'D. Nusa Tenggara dan Maluku'
                ],
                'answer' => 'B. Kalimantan dan Papua',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 2-01.jpg',
            ],
            3 => [
                'code' => 'LIAR',
                'question' => 'Apa nama kampus UBAYA yang berada di pegunungan?',
                'options' => [
                    'A. Ubaya Ngagel',
                    'B. Ubaya Tenggilis',
                    'C. Ubaya Training Center',
                    'D. Kampus Fakultas Kedokteran'
                ],
                'answer' => 'C. Ubaya Training Center',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 3-01.jpg',
            ],
            4 => [
                'code' => 'ALAM',
                'question' => 'Rumah adat khas suku Toraja dikenal dengan nama ...',
                'options' => [
                    'A. Rumah Gadang',
                    'B. Tongkonan',
                    'C. Honai',
                    'D. Lamin'
                ],
                'answer' => 'B. Tongkonan',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 4-01.jpg',
            ],
            5 => [
                'code' => 'FLORA',
                'question' => 'Tahun berapa Universitas Surabaya didirikan?',
                'options' => ['A. 1955', 'B. 1968', 'C. 1974', 'D. 1982'],
                'answer' => 'B. 1968',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 5-01.jpg',
            ],
            6 => [
                'code' => 'FAUNA',
                'question' => 'Bahasa utama yang digunakan oleh masyarakat Bugis adalah ...',
                'options' => ['A. Bugis', 'B. Makassar', 'C. Mandar', 'D. Toraja'],
                'answer' => 'A. Bugis',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 6-01.jpg',
            ],
            7 => [
                'code' => 'KABUT',
                'question' => 'Fakultas apa yang tidak ada di Universitas Surabaya?',
                'options' => [
                    'A. Fakultas Hukum',
                    'B. Fakultas Kedoketeran',
                    'C. Fakultas Psikologi',
                    'D. Fakultas Ilmu Sosial dan Politik'
                ],
                'answer' => 'D. Fakultas Ilmu Sosial dan Politik',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 7-01.jpg',
            ],
            8 => [
                'code' => 'LUMUT',
                'question' => 'Suku yang terkenal dengan budaya pelayaran dan perantauan di Sulawesi adalah ...',
                'options' => ['A. Bugis', 'B. Toraja', 'C. Minahasa', 'D. Bajo'],
                'answer' => 'A. Bugis',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 8-01.jpg',
            ],
            9 => [
                'code' => 'TEDUH',
                'question' => 'Kelompok studi Mahasiswa yang menaungi kebanyakan mahasiswa teknik informatika adalah ...',
                'options' => ['A. KSM Teknik Informatika', 'B. KSM Informatika', 'C. KSM Teknik Kimia', 'D. KSM Teknik Elektro'],
                'answer' => 'B. KSM Informatika',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 9-01.jpg',
            ],
            10 => [
                'code' => 'BASAH',
                'question' => 'Sulawesi terdiri dari berapa provinsi?',
                'options' => ['A. 3', 'B. 4', 'C. 5', 'D. 6'],
                'answer' => 'D. 6',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 10-01.jpg',
            ],
            11 => [
                'code' => 'SUNYI',
                'question' => 'Dimanakah mahasiswa teknik Elektro bisa mengurus administrasi di jurusannya?',
                'options' => [
                    'A. PAJ Teknik Informatika',
                    'B. PAJ Teknik Elektro',
                    'C. TU Fakultas Teknik',
                    'D. PAJ Teknik Industri'
                ],
                'answer' => 'B. PAJ Teknik Elektro',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 11-01.jpg',
            ],
            12 => [
                'code' => 'ANGIN',
                'question' => 'Tana Toraja terkenal dengan tradisi menyimpan jenazah di ...',
                'options' => [
                    'A. Dalam tanah',
                    'B. Dalam rumah adat',
                    'C. Gua batu atau tebing',
                    'D. Sungai'
                ],
                'answer' => 'C. Gua batu atau tebing',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 12-01.jpg',
            ]
        ];

        $daftarKelompok = [
            'Semesta 1',
            'Semesta 2',
            'Semesta 3',
            'Semesta 4',
            'Semesta 5',
            'Semesta 6',
            'Semesta 7',
            'Semesta 8',
            'Semesta 9',
            'Semesta 10',
            'Semesta 11',
            'Semesta 12',
            'Semesta 13',
            'Semesta 14',
            'Semesta 15',
            'Semesta 16',
            'Semesta 17',
            'Semesta 18',
        ];
        
        $_SESSION['kartuA'] = $cardsA;
        return view('find-the-relic', compact('cardsA', 'daftarKelompok'));
    }

    public function inputKode(Request $request)
    {
        session_start();
        $kelompok = "A";
        $arr = $_SESSION['kartuA'];
        $_SESSION['player'] = ['kelompokA' => $request->kelompokA, "poin" => 0];
        $startTime = now()->toIso8601String();
        $_SESSION['waktuMulai'] = $startTime;
        $_SESSION['durasi'] = 7 * 60;
        $duration = $_SESSION['durasi'];
        $pemain = $_SESSION['player'];
        return view('displaycards', compact('pemain', 'kelompok', 'arr', 'startTime', 'duration'));
    }

    public function showRelic(Request $request)
    {
        session_start();
        $startTime = $_SESSION['waktuMulai'];
        $duration = $_SESSION['durasi'];
        $kelompok = $request->input('kelompok');
        $pemain = $_SESSION['player'];
        $arr = $_SESSION['kartuA'];

        return view('displaycards', compact('pemain', 'kelompok', 'arr', 'startTime', 'duration'));
    }


    public function masuk(Request $request)
    {
        session_start();
        $startTime = $_SESSION['waktuMulai'];
        $duration = $_SESSION['durasi'];
        $cek = false;
        $kode = $request->kode;
        $kelompok = $request->input('kelompok');
        $pemain = $_SESSION['player'];
        $arr = $_SESSION['kartuA'];

        for ($i = 1; $i <= count($arr); $i++) {
            if ($request->kode == $arr[$i]['code']) {
                $cek = true;
                $pertanyaan = $arr[$i]['question'];
                $pilgan = $arr[$i]['options'];
                $answer = $arr[$i]['answer'];
                $image = $arr[$i]['image'];
                $bool = $arr[$i]['answered'];
                break;
            }
        }
        //Pengecekan sudah dijawab atau belum dan kodenya benar atau tidak
        if (!$cek) {
            $err = "Kode tidak ditemukan!";
            return view('displaycards', compact('pemain', 'kelompok', 'arr', 'err', 'startTime', 'duration'));
        }

        if ($bool === true) {
            $err = "Pertanyaan ini sudah dijawab!";
            return view('displaycards', compact('pemain', 'kelompok', 'arr', 'err', 'startTime', 'duration'));
        }

        return view('pertanyaanrelic', compact('kode', 'kelompok', 'pertanyaan', 'pilgan', 'answer', 'image', 'startTime', 'duration'));
    }

    public function cekjawaban(Request $request)
    {
        session_start();
        $imgTerjawab = [
            1 => "img/Relic Anoa-01.jpg",
            "img/Relic Babi Rusa-01.jpg",
            "img/Relic Burung Serak-01.jpg",
            "img/Relic Burung Seriwang-01.jpg",
            "img/Relic Eboni-01.jpg",
            "img/Relic Kepiting Kelapa-01.jpg",
            "img/Relic Kuskus-01.jpg",
            "img/Relic Lontar-01.jpg",
            "img/Relic Maleo-01.jpg",
            "img/Relic Palem-01.jpg",
            "img/Relic Rangkong-01.jpg",
            "img/Relic Tarsius-01.jpg"
        ];
        $jawabanUser = $request->input('jawaban');
        $kode = $request->input('kode');
        $kelompok = $request->input('kelompok');
        $arr = $_SESSION['kartuA'];

        $jawabanBenar = null;
        for ($i = 1; $i <= count($arr); $i++) {
            if ($arr[$i]['code'] === $kode) {
                $jawabanBenar = $arr[$i]['answer'];
                $arr[$i]['answered'] = true;
                $arr[$i]['image'] = $imgTerjawab[$i];
                $isrelic = $arr[$i]['is_relic'];
                break;
            }
        }

        $_SESSION['kartuA'] = $arr;
        $message = "";
        if ($jawabanUser === $jawabanBenar) {
            $message = "";

            if ($isrelic) {
                $_SESSION['player']['poin'] += 1;
                $message .= "Kartu ini adalah Relic, +1 Poin!";
            } else {
                $message .= "Maaf kartu ini Zonk!";
            }
            return response()->json(['message' => $message]);
        } else {
            $message = "Jawaban Salah! ";

            if($isrelic) {
                $message .= "Kartu ini adalah Relic!";
            } else {
                $message .= "Maaf kartu ini Zonk!";
            }

            return response()->json(['message' => $message]);
        }
    }

    public function endrelic(Request $request)
    {
        session_start();
        if ($_SESSION['player']['poin'] >= 6) {
            $pesan = "Selamat!! kalian menang dengan " . $_SESSION['player']['poin'] . " poin!";
        } else {
            $pesan = "Yahh, kalian kekurangan ". ( 6 - $_SESSION['player']['poin'] ) ." relic!";
        }

        return view('relicselesai', compact('pesan'));
    }
}
