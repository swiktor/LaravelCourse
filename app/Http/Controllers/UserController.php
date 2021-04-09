<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(Request $request)
    {
        $users = [];

        $faker = Factory::create('pl_PL');
        $count = $faker->numberBetween(3, 15);
        for ($i = 0; $i < $count; $i++) {
            $users[] = [
                'id' => $faker->numberBetween(1, 1000),
                'name' => $faker->firstName
            ];
        }


        $session = $request->session();

        $session->put('prevAction', __METHOD__ . ': ' . time());

        $session->flash('klucz','wartosc');


        return view('user.list', [
            'users' => $users
        ]);
    }

    public function show(Request $request, int $userId)
    {
        $faker = Factory::create('pl_PL');

        // $prevAction = $request->session()->get('prevAction','foo'); //pobieranie

        // $request->session()->put('test_tt', null); // ustawiwanie

        // $request->session()->forget('test_tt'); // czyszczenie

        // $request->session()->flush(); //zerowanie

        // dump($request->session()->has('test_tt')); //wartosc
        // dump($request->session()->exists('test_tt')); //istnienie

        dump($request->session()->get('klucz'));




        $user = [
            'id' => $userId,
            'name' => $faker->name,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'city' => $faker->city,
            'age' => $faker->numberBetween(12, 25),
            'html' => '<script>alert("XSS")</script>'
        ];

        return view('user.show', [
            'user' => $user,
            'nick' => true
        ]);
    }
}
