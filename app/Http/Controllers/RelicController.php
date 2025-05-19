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
                'options' => ['A. Universitas Brawijaya', 'B. Universitas Negeri Surabaya', 
                                'C. Universitas Surabaya', 'D. Universitas Banyuwangi'],
                'answer' => 'C. Universitas Surabaya',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 1-01.jpg',
            ],
            2 => [
                'code' => 'RIMBA',
                'question' => 'Pulau Sulawesi terletak di antara dua pulau besar, yaitu ...',
                'options' => ['A. Jawa dan Sumatra', 'B. Kalimantan dan Papua', 
                                'C. Bali dan Lombok', 'D. Nusa Tenggara dan Maluku'],
                'answer' => 'B. Kalimantan dan Papua',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 2-01.jpg',
            ],
            3 => [
                'code' => 'LIAR',
                'question' => 'Apa nama kampus UBAYA yang berada di pegunungan?',
                'options' => ['A. Ubaya Ngagel', 'B. Ubaya Tenggilis', 
                                'C. Ubaya Training Center', 'D. Kampus Fakultas Kedokteran'],
                'answer' => 'C. Ubaya Training Center',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 3-01.jpg',
            ],
            4 => [
                'code' => 'ALAM',
                'question' => 'Rumah adat khas suku Toraja dikenal dengan nama ...',
                'options' => ['A. Rumah Gadang', 'B. Tongkonan', 
                                'C. Honai', 'D. Lamin'],
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
                'options' => ['A. Fakultas Hukum', 'B. Fakultas Kedoketeran', 
                                'C. Fakultas Psikologi', 'D. Fakultas Ilmu Sosial dan Politik'],
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
                'options' => ['A. PAJ Teknik Informatika', 'B. PAJ Teknik Elektro', 
                                'C. TU Fakultas Teknik', 'D. PAJ Teknik Industri'],
                'answer' => 'B. PAJ Teknik Elektro',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 11-01.jpg',
            ],
            12 => [
                'code' => 'ANGIN',
                'question' => 'Tana Toraja terkenal dengan tradisi menyimpan jenazah di ...',
                'options' => ['A. Dalam tanah', 'B. Dalam rumah adat', 
                                'C. Gua batu atau tebing', 'D. Sungai'],
                'answer' => 'C. Gua batu atau tebing',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 12-01.jpg',
            ]
        ];
        $cardsB = [
            1 => [
                'code' => 'GUA',
                'question' => 'Dimanakah lokasi kampus utama Universitas Surabaya?',
                'options' => ['A. Surabaya Barat', 'B. Surabaya Timur', 
                                'C. Trawas, Mojokerto', 'D. Tenggilis, Surabaya'],
                'answer' => 'D. Tenggilis, Surabaya',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 1-01.jpg',
            ],
            2 => [
                'code' => 'TEBING',
                'question' => 'Suku asli yang mendiami daerah Toraja di Sulawesi Selatan adalah ...',
                'options' => ['A. Bugis', 'B. Makassar', 'C. Mandar', 'D. Toraja'],
                'answer' => 'D. Toraja',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 2-01.jpg',
            ],
            3 => [
                'code' => 'SEMAK',
                'question' => 'Motto dari Universitas Surabaya adalah ...',
                'options' => ['A. Unggul dan Terdepan', 'B. To be the first University in Heart and Mind', 
                                'C. Bridging Education to the World', 'D. To be the Best University'],
                'answer' => 'B. To be the first University in Heart and Mind',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 3-01.jpg',
            ],
            4 => [
                'code' => 'BELANTARA',
                'question' => 'Salah satu ritual pemakaman yang terkenal di Tana Toraja adalah ...',
                'options' => ['A. Rambu Solo', 'B. Ngaben', 'C. Sekaten', 'D. Mapasilaga Tedong'],
                'answer' => 'A. Rambu Solo',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 4-01.jpg',
            ],
            5 => [
                'code' => 'HIJAU',
                'question' => 'Siapakah rektor Universitas Surabaya?',
                'options' => ['A. Prof. Dr.rer.nat. Maria Goretti Marianti Purwanto', 'B. Djuwari, S.T., Ph.D.', 
                                'C. Dr. Ir. Benny Lianto, MMBAT.', 'D. Dr. Novianty Kresna Darmasetiawan, S.Psi., M.Si.'],
                'answer' => 'C. Dr. Ir. Benny Lianto, MMBAT.',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 5-01.jpg',
            ],
            6 => [
                'code' => 'RANTING',
                'question' => 'Ibukota provinsi Sulawesi Selatan adalah ...',
                'options' => ['A. Kendari', 'B. Palu', 'C. Makassar', 'D. Manado'],
                'answer' => 'C. Makassar',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 6-01.jpg',
            ],
            7 => [
                'code' => 'AKAR',
                'question' => 'Universitas Surabaya dulunya bernama: ',
                'options' => ['A. Universitas Indonesia Timur', 'B. Universitas Trisakti', 
                                'C. Universitas Trisakti Surabaya', 'D. Universitas Nasional Surabaya'],
                'answer' => 'C. Universitas Trisakti Surabaya',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 7-01.jpg',
            ],
            8 => [
                'code' => 'ANOA',
                'question' => 'Alat musik tradisional Sulawesi Selatan yang dimainkan dengan cara dipukul adalah ...',
                'options' => ['A. Sasando', 'B. Gamelan', 'C. Gandrang', 'D. Saluang'],
                'answer' => 'C. Gandrang',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 8-01.jpg',
            ],
            9 => [
                'code' => 'SUNGAI',
                'question' => 'Apa nama titik kumpul mahasiswa Teknik selama MOB FT 2025?',
                'options' => ['A. Kantin', 'B. Gazebo Teknik', 'C. Boulevard', 'D. Indomaret Point'],
                'answer' => 'C. Boulevard',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 9-01.jpg',
            ],
            10 => [
                'code' => 'EMBUN',
                'question' => 'Suku Minahasa mayoritas menganut agama ...',
                'options' => ['A. Islam', 'B. Kristen Protestan', 'C. Katolik', 'D. Hindu'],
                'answer' => 'B. Kristen Protestan',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 10-01.jpg',
            ],
            11 => [
                'code' => 'TARSIUS',
                'question' => 'Organisasi yang ada di Fakultas Teknik Universitas Surabaya, kecuali ...',
                'options' => ['A. Badan Eksekutif Mahasiswa Fakultas Teknik', 'B. Dewan Perwakilan Mahasiswa Fakultas Teknik', 
                                'C. Kelompok Studi Mahasiswa Teknik Mesin dan Manufaktur', 'D. Kelompok Studi Mahasiswa Teknik Sipil'],
                'answer' => 'D. Kelompok Studi Mahasiswa Teknik Sipil',
                'is_relic' => true,
                'answered' => false,
                'image' => 'img/Angka 11-01.jpg',
            ],
            12 => [
                'code' => 'DANAU',
                'question' => 'Festival budaya besar yang diadakan di Toraja sebagai bagian dari ritual kematian adalah ...',
                'options' => ['A. Rambu Solo', 'B. Cap Go Meh', 'C. Panen Raya', 'D. Pesta Laut'],
                'answer' => 'A. Rambu Solo',
                'is_relic' => false,
                'answered' => false,
                'image' => 'img/Angka 12-01.jpg',
            ]
        ];
        $daftarKelompok = [
            'Kelompok 1',
            'Kelompok 2',
            'Kelompok 3',
            'Kelompok 4',
            'Kelompok 5',
            'Kelompok 6',
            'Kelompok 7',
            'Kelompok 8',
            'Kelompok 9',
            'Kelompok 10',
            'Kelompok 11',
            'Kelompok 12',
            'Kelompok 13',
            'Kelompok 14',
            'Kelompok 15',
            'Kelompok 16',
            'Kelompok 17',
            'Kelompok 18',
        ];
        $_SESSION['kartuA'] = $cardsA;
        $_SESSION['kartuB'] = $cardsB;
        return view('find-the-relic', compact('cardsA', 'cardsB', 'daftarKelompok'));
    }

    public function inputKode(Request $request)
    {
        session_start();
        $kelompok = "A";
        $arr = $_SESSION['kartuA'];
        $_SESSION['player'] = [['kelompokA' => $request->kelompokA, "poin" => 0], ['kelompokB' => $request->kelompokB, "poin" => 0]];
        $startTime = now()->toIso8601String(); 
        $_SESSION['waktuMulai'] = $startTime;
        $duration = 7 * 60;
        return view('displaycards', compact('kelompok', 'arr', 'startTime', 'duration'));
    }

    public function showRelic(Request $request)
    {
        session_start();
        $startTime = $_SESSION['waktuMulai'];
        $duration = 7 * 60;
        $kelompok = $request->input('kelompok');
        if ($kelompok == 'A') {
            $arr = $_SESSION['kartuA'];
        } else {
            $arr = $_SESSION['kartuB'];
        }

        return view('displaycards', compact('kelompok', 'arr', 'startTime', 'duration'));
    }


    public function masuk(Request $request)
    {
        session_start();
        $startTime = $_SESSION['waktuMulai'];
        $duration = 7 * 60;
        $cek = false;
        $kode = $request->kode;
        $kelompok = $request->input('kelompok');
        if ($request->input('kelompok') == "A") {
            $arr = $_SESSION['kartuA'];
        } else {
            $arr = $_SESSION['kartuB'];
        }
        for ($i = 1; $i < count($arr); $i++) {
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
            return view('displaycards', compact('kelompok', 'arr', 'err', 'startTime', 'duration'));
        }

        if ($bool === true) {
            $err = "Pertanyaan ini sudah dijawab!";
            return view('displaycards', compact('kelompok', 'arr', 'err', 'startTime', 'duration'));
        }

        return view('pertanyaanrelic', compact('kode', 'kelompok', 'pertanyaan', 'pilgan', 'answer', 'image', 'startTime', 'duration'));
    }

    public function cekjawaban(Request $request)
    {
        session_start();
        $imgTerjawab = [
            1 => "img/Relic Tarsius-01.jpg",
            "img/Relic Eboni-01.jpg",
            "img/Relic Anoa-01.jpg",
            "img/Relic Burung Serak-01.jpg",
            "img/Relic Kuskus-01.jpg",
            "img/Relic Lontar-01.jpg",
            "img/Relic Palem-01.jpg",
            "img/Relic Rangkong-01.jpg",
            "img/Relic Maleo-01.jpg",
            "img/Relic Kepiting Kelapa-01.jpg",
            "img/Relic Babi Rusa-01.jpg",
            "img/Relic Burung Seriwang-01.jpg"
        ];
        $jawabanUser = $request->input('jawaban');
        $kode = $request->input('kode');
        $kelompok = $request->input('kelompok');

        if ($kelompok == "A") {
            $arr = $_SESSION['kartuA'];
        } else {
            $arr = $_SESSION['kartuB'];
        }

        $jawabanBenar = null;
        for ($i = 1; $i <= count($arr); $i++) {
            if ($arr[$i]['code'] === $kode) {
                $jawabanBenar = $arr[$i]['answer'];
                $arr[$i]['answered'] = true;
                $arr[$i]['image'] = $imgTerjawab[$i];
                break;
            }
        }

        if ($kelompok == "A") {
            $_SESSION['kartuA'] = $arr;
        } else {
            $_SESSION['kartuB'] = $arr;
        }
        
        $message = "";
        if ($jawabanUser === $jawabanBenar) {
            if ($kelompok == "A") {
                $_SESSION['player'][0]['poin'] += 1;
            } else {
                $_SESSION['player'][1]['poin'] += 1;
            }
            $message = "Jawaban Benar!";
            return response()->json(['message' => $message]);
        } else {
            $message = "Jawaban Salah!";
            return response()->json(['message' => $message]);
        }
    }

    public function endrelic(Request $request) {
        session_start();
        if($_SESSION['player'][0]['poin'] > $_SESSION['player'][1]['poin']) {
            $pemenang = $_SESSION['player'][0]['kelompokA'];
            $pesan = $pemenang." menang dengan ".$_SESSION['player'][0]['poin']." poin!";
        } else if($_SESSION['player'][0]['poin'] < $_SESSION['player'][1]['poin']) {
            $pemenang = $_SESSION['player'][1]['kelompokB'];
            $pesan = $pemenang." menang dengan ".$_SESSION['player'][1]['poin']." poin!";
        } else {
            $pesan = "Silahkan mencari 1 kartu fisik tambahan lagi untuk kedua tim!";
        }

        return view('relicselesai', compact('pesan'));
    }
}
