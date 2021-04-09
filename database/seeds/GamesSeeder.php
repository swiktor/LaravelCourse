<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->truncate();
        $faker = Factory::create();

        $games = [];
        for ($i = 0; $i < 10; $i++) {
            $games[] =
                [
                    'title' => $faker->words($faker->numberBetween(1, 3), true),
                    'description' => $faker->sentence(),
                    'publisher' => $faker->randomElement(['EA', 'STEAM', 'ORIGIN', 'EPIC']),
                    'genre_id' => $faker->numberBetween(1, 5),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
        }
        DB::table('games')->insertOrIgnore($games);


        // for ($i = 0; $i < 1000; $i++) {
        //     DB::table('games')->insertOrIgnore(
        //         [
        //             'title' => $faker->words($faker->numberBetween(1, 3), true),
        //             'description' => $faker->sentence(),
        //             'publisher' => $faker->randomElement(['EA', 'STEAM', 'ORIGIN', 'EPIC']),
        //             'genre_id' => $faker->numberBetween(1, 5),
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now()
        //         ]
        //     );
        // }
    }
}
