<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'  => 'alexis',
                    'email' => 'alexis.iim@admin.com',
                    'password' => 'password'
                ],
                [
                    'email' => 'nicolas.iim@admin.com',
                    'password' => 'password'
                ],
                [
                    'email' => 'karine.iim@admin.com',
                    'password' => 'password'
                ]
            ]
        );
    }
}
