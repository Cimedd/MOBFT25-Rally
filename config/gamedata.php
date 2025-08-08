<?php

return [

    'kelompoks' => array_map(function ($i) {
        return [
            'id' => $i,
            'nama' => "Kelompok $i",
        ];
    }, range(1, 10)),

    'subkelompoks' => collect(range(1, 10))->flatMap(function ($kelompokId) {
        return [
            [
                'id' => $kelompokId * 2 - 1,
                'kelompoks_id' => $kelompokId,
            ],
            [
                'id' => $kelompokId * 2,
                'kelompoks_id' => $kelompokId,
            ],
        ];
    })->values()->toArray(),

    'anggotas' => collect(range(1, 20))->flatMap(function ($subkelompokId) {
        return collect(range(1, 3))->map(function ($i) use ($subkelompokId) {
            $nrp = ($subkelompokId - 1) * 3 + $i;
            return [
                'nrp' => 1000 + $nrp,
                'nama' => "Anggota $nrp",
                'kelompoks_id' => ceil($subkelompokId / 2),
            ];
        });
    })->values()->toArray(),

    'gamesessions' => [
        [
            'id' => 1,
            'waktu_mulai' => '2025-05-19 09:00:00',
            'waktu_selesai' => '2025-05-19 10:00:00',
            'kelompoks_id_1' => 1,
            'kelompoks_id_2' => 2,
            'kelompoks_id_menang' => 1,
        ],
        [
            'id' => 2,
            'waktu_mulai' => '2025-05-19 10:30:00',
            'waktu_selesai' => '2025-05-19 11:30:00',
            'kelompoks_id_1' => 3,
            'kelompoks_id_2' => 4,
            'kelompoks_id_menang' => 4,
        ],
        [
            'id' => 3,
            'waktu_mulai' => '2025-05-19 12:00:00',
            'waktu_selesai' => '2025-05-19 13:00:00',
            'kelompoks_id_1' => 5,
            'kelompoks_id_2' => 6,
            'kelompoks_id_menang' => 5,
        ],
    ],

    'levels' => [
        [
            'id' => 1,
            'nama' => 'Level 1',
            'deskripsi' => 'Level awal',
        ],
        [
            'id' => 2,
            'nama' => 'Level 2',
            'deskripsi' => 'Level menengah',
        ],
    ],

    'levelresults' => [
        [
            'id' => 1,
            'gamesessions_id' => 1,
            'levels_id' => 1,
            'subkelompoks_id_1' => 1,
            'subkelompoks_id_2' => 2,
            'subkelompoks_id_menang' => 1,
        ],
        [
            'id' => 2,
            'gamesessions_id' => 2,
            'levels_id' => 1,
            'subkelompoks_id_1' => 5,
            'subkelompoks_id_2' => 6,
            'subkelompoks_id_menang' => 6,
        ],
        [
            'id' => 3,
            'gamesessions_id' => 3,
            'levels_id' => 2,
            'subkelompoks_id_1' => 9,
            'subkelompoks_id_2' => 10,
            'subkelompoks_id_menang' => 9,
        ],
    ],
];
