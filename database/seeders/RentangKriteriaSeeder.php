<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentangKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode' => 'C1',
                'rentang_min' => 0.0,
                'rentang_max' => 2.0,
                'nilai' => 6,
            ],
            [
                'kode' => 'C1',
                'rentang_min' => 2.1,
                'rentang_max' => 4.0,
                'nilai' => 5,
            ],
            [
                'kode' => 'C1',
                'rentang_min' => 4.1,
                'rentang_max' => 6.0,
                'nilai' => 4,
            ],
            [
                'kode' => 'C1',
                'rentang_min' => 6.1,
                'rentang_max' => 8.0,
                'nilai' => 3,
            ],
            [
                'kode' => 'C1',
                'rentang_min' => 8.1,
                'rentang_max' => 10.0,
                'nilai' => 2,
            ],
            [
                'kode' => 'C1',
                'rentang_min' => 10.1,
                'rentang_max' => 12.0,
                'nilai' => 1,
            ],
            [
                'kode' => 'C2',
                'rentang_min' => 0.0,
                'rentang_max' => 4.0,
                'nilai' => 6,
            ],
            [
                'kode' => 'C2',
                'rentang_min' => 4.1,
                'rentang_max' => 8.0,
                'nilai' => 5,
            ],
            [
                'kode' => 'C2',
                'rentang_min' => 8.1,
                'rentang_max' => 12.0,
                'nilai' => 4,
            ],
            [
                'kode' => 'C2',
                'rentang_min' => 12.1,
                'rentang_max' => 16.0,
                'nilai' => 3,
            ],
            [
                'kode' => 'C2',
                'rentang_min' => 16.1,
                'rentang_max' => 20.0,
                'nilai' => 2,
            ],
            [
                'kode' => 'C2',
                'rentang_min' => 20.1,
                'rentang_max' => 24.0,
                'nilai' => 1,
            ],
            [
                'kode' => 'C3',
                'rentang_min' => 0.0,
                'rentang_max' => 2.0,
                'nilai' => 6,
            ],
            [
                'kode' => 'C3',
                'rentang_min' => 2.1,
                'rentang_max' => 4.0,
                'nilai' => 5,
            ],
            [
                'kode' => 'C3',
                'rentang_min' => 4.1,
                'rentang_max' => 6.0,
                'nilai' => 4,
            ],
            [
                'kode' => 'C3',
                'rentang_min' => 6.1,
                'rentang_max' => 8.0,
                'nilai' => 3,
            ],
            [
                'kode' => 'C3',
                'rentang_min' => 8.1,
                'rentang_max' => 10.0,
                'nilai' => 2,
            ],
            [
                'kode' => 'C3',
                'rentang_min' => 10.1,
                'rentang_max' => 12.0,
                'nilai' => 1,
            ],
            [
                'kode' => 'C4',
                'rentang_min' => 0.0,
                'rentang_max' => 2.0,
                'nilai' => 6,
            ],
            [
                'kode' => 'C4',
                'rentang_min' => 2.1,
                'rentang_max' => 4.0,
                'nilai' => 5,
            ],
            [
                'kode' => 'C4',
                'rentang_min' => 4.1,
                'rentang_max' => 6.0,
                'nilai' => 4,
            ],
            [
                'kode' => 'C4',
                'rentang_min' => 6.1,
                'rentang_max' => 8.0,
                'nilai' => 3,
            ],
            [
                'kode' => 'C4',
                'rentang_min' => 8.1,
                'rentang_max' => 10.0,
                'nilai' => 2,
            ],
            [
                'kode' => 'C4',
                'rentang_min' => 10.1,
                'rentang_max' => 12.0,
                'nilai' => 1,
            ],
            [
                'kode' => 'C5',
                'rentang_min' => 51.0,
                'rentang_max' => 60.0,
                'nilai' => 1,
            ],
            [
                'kode' => 'C5',
                'rentang_min' => 41.0,
                'rentang_max' => 50.0,
                'nilai' => 2,
            ],
            [
                'kode' => 'C5',
                'rentang_min' => 31.0,
                'rentang_max' => 40.0,
                'nilai' => 3,
            ],
            [
                'kode' => 'C5',
                'rentang_min' => 21.0,
                'rentang_max' => 30.0,
                'nilai' => 4,
            ],
            [
                'kode' => 'C5',
                'rentang_min' => 11.0,
                'rentang_max' => 20.0,
                'nilai' => 5,
            ],
            [
                'kode' => 'C5',
                'rentang_min' => 0.0,
                'rentang_max' => 10.0,
                'nilai' => 6,
            ],
        ];

        DB::table('rentang_kriterias')->insert($data);
    }
}
