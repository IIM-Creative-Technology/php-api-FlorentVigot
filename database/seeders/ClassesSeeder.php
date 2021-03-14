<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert(
            [
                [
                    'name' => 'A2',
                    'year' => 2024
                ],
                [
                    'name' => 'A3',
                    'year' => 2023
                ],
                [
                    'name' => 'A4',
                    'year' => 2022
                ],
                [
                    'name' => 'A5',
                    'year' => 2021
                ]
            ]
        );
    }
}
