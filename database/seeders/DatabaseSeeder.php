<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // 1. Buat 10 Kelompok
        for ($i = 1; $i <= 10; $i++) {
            DB::table('kelompoks')->insert([
                'id' => $i,
                'nama' => 'Kelompok ' . $i,
            ]);
        }

        // 2. Buat 3 Subkelompok per Kelompok (total 30)
        $subId = 1;
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                DB::table('subkelompoks')->insert([
                    'id' => $subId++,
                    'kelompoks_id' => $i,
                ]);
            }
        }

        // 3. Buat 9 Anggota per Kelompok (total 90)
        $nrp = 22213001;
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 9; $j++) {
                DB::table('anggotas')->insert([
                    'nrp' => $nrp++,
                    'nama' => 'Anggota_' . Str::random(4),
                    'kelompoks_id' => $i,
                ]);
            }
        }

        // 4. Buat 3 Level
        DB::table('levels')->insert([
            ['id' => 1, 'nama' => 'Level 1', 'deskripsi' => 'Mudah'],
            ['id' => 2, 'nama' => 'Level 2', 'deskripsi' => 'Sedang'],
            ['id' => 3, 'nama' => 'Level 3', 'deskripsi' => 'Sulit'],
        ]);

        // 5. Buat 3 GameSessions
        for ($i = 1; $i <= 3; $i++) {
            $team1 = rand(1, 10);
            do {
                $team2 = rand(1, 10);
            } while ($team2 == $team1);

            $winner = rand(0, 1) ? $team1 : $team2;

            DB::table('gamesessions')->insert([
                'id' => $i,
                'waktu_mulai' => Carbon::now()->subHours($i),
                'waktu_selesai' => Carbon::now()->subHours($i - 1),
                'kelompoks_id_1' => $team1,
                'kelompoks_id_2' => $team2,
                'kelompoks_id_menang' => $winner,
            ]);
        }

        // 6. Buat 2 LevelResult per GameSession
        $lrId = 1;
        for ($gs = 1; $gs <= 3; $gs++) {
            for ($lvl = 1; $lvl <= 2; $lvl++) {
                $sub1 = rand(1, 30);
                do {
                    $sub2 = rand(1, 30);
                } while ($sub2 == $sub1);

                $winner = rand(0, 1) ? $sub1 : $sub2;

                DB::table('levelresults')->insert([
                    'id' => $lrId++,
                    'gamesessions_id' => $gs,
                    'levels_id' => $lvl,
                    'subkelompoks_id_1' => $sub1,
                    'subkelompoks_id_2' => $sub2,
                    'subkelompoks_id_menang' => $winner,
                ]);
            }
        }
    }
}
