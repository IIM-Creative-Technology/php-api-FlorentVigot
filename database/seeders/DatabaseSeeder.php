<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call([ClassesSeeder::class]);
        $this->call([StudentSeeder::class]);
        $this->call([ParticipantSeeder::class]);
        $this->call([SubjectSeeder::class]);
        $this->call([MarkSeeder::class]);
        $this->call([UserSeeder::class]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
