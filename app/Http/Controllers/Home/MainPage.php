<?php

declare(strict_types=1);

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class MainPage extends Controller
{
    public function __invoke()
    {
        // $config=config('app.locale');
        // dd($config);

        return view('home.main');

        DB::table('genres')->truncate();

        DB::table('genres')->delete();
        DB::table('genres')->insertOrIgnore([
            // [
            //     'name' => 'RPG',
            //     'created_at' => Carbon::now(),
            //     'updated_at' => null

            // ],
            [
                'name' => 'FPS',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ]

        ]);

        $id = DB::table('genres')->insertGetId(
            [
                'name' => 'RPG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        // dd($id);

        DB::table('genres')
            ->where('id', $id)
            ->update(['name' => 'MMORPG']);

        DB::table('genres')
            ->where('id', $id)
            ->delete();





    }
}
