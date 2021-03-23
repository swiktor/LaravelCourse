<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Faker\Factory;
use Illuminate\Http\Request;

class ShowAddress extends Controller
{
    public function __invoke(int $id)
    {
        $faker = Factory::create();
        $address = [
            'postalCode' => $faker->postcode,
            'streetName' => $faker->streetName,
            'houseNumber' => $faker->numberBetween(1,100),
            'flatNumber' => $faker->numberBetween(1,100)
        ];
        return view('user.address', [
            'address' => $address
        ]);
    }
}
