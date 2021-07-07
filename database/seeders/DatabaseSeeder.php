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
        $path = database_path('scripts/data_capp.sql');
        DB::unprepared(file_get_contents($path));
        $this->command->info('App. contract table seeded!');

        $path = database_path('scripts/data_cpro.sql');
        DB::unprepared(file_get_contents($path));
        $this->command->info('Pro. contract table seeded!');
    }
}
