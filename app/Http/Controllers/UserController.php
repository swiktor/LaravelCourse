<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use http\Message\Body;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    public function list(Request $request)
    {
//        dd($request);
        return view('user.list');
    }

    public function testShowOld(Request $request, int $id)
    {
        $uri = $request->path();
        $url = $request->url();
        $fullUrl = $request->fullUrl();

        $httpMetod = $request->method();

        $all = $request->all();

        $name = $request->input('name');
        $lastname = $request->input('lastName', 'Kowalski');

        $game = $request->input('games');
        $game = $request->input('games.1');
        $game = $request->input('games.1.name');

        $allQuery = $request->query();
        $name = $request->query('name');
        $name = $request->query('name', 'Nowak');

        $expired = $request->boolean('expired');

        $hasName = $request->has('name');
        $hasParams = $request->has(['name', 'nick']);
        $hasAnyParams = $request->hasAny(['name', 'nick1']);

        $cookies = $request->cookie('my_cookie');

        $input = $request->input();
        $query = $request->query();

//        $method = $request->method();
//
//
//        if($request->isMethod('GET'))
//        {
//            dump('To jest GET');
//        }
//        elseif ($request->isMethod('POST'))
//        {
//            dump('To jest POST');
//        }
//
//
//        dump($uri, $url, $fullUrl, $method);
//
//        $name = $request->input('name','AAA');
//        dump($name);
//
//        $game=$request->input('games.0');
//
//        dump($game);
//

        dd($all);
    }

    public function testStore(Request $request, int $id)
    {
        if ($request->isMethod('POST')) {
            dump('To jest POST');
        }
        $all = $request->all();

        dd($all);
    }

    public function testShow(Request $request, int $id)
    {
//        return "dadada: ".$id;

//        return response(['kto' => $id], 200, ['Content-Type' => 'text/json']);

//        return response("<h1> AAAA, co to jest $id </h1>")
//            ->setStatusCode(200)
//            ->header('Content-Type','Text/html')
//            ->header('Own-Header','SW');

//        return response("To ja: $id", 200)
//            ->header('Content-Type', 'Text/html')
//            ->cookie('i_am_hungry', 'cookies', 10);

//        return redirect('users');

//        return redirect()->route('get.users');

//        return redirect().route('get.user.address',['id'=>$id]);

//        return redirect()->action('UserController@list');

//        return redirect()->action('User\ShowAddress',['id'=>$id]);

        return view('user.show', [
            'id' => $id,
            'example' => 'Przykład'
        ]);

    }


}

