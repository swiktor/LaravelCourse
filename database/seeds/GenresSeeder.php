<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->truncate();
        DB::table('genres')->insertOrIgnore(
            [
                ['name' => 'RPG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'MMO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'MMORPG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'FPS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'TPS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]
        );
    }
}
