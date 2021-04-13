<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;



class GameController extends Controller
{
    // CRUD
    // C - create
    // R - read
    // U - update
    // D - delete

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index(): View
    {
        $games = DB::table('games')
            ->join('genres', 'games.genre_id', '=', 'genres.id', 'inner')
            ->select('games.id', 'title', 'score', 'name')
            ->paginate(10);
        return view('games.list', [
            'games' => $games
        ]);
    }



    public function dashboard(): View
    {
        $bestGames = DB::table('games')
            ->join('genres', 'games.genre_id', '=', 'genres.id', 'inner')
            ->select('games.id', 'title', 'score', 'name')
            ->where('score', '>', '9')
            ->get();

        $stats = [
            'max' => DB::table('games')->max('score'),
            'min' => DB::table('games')->min('score'),
            'avg' => DB::table('games')->average('score'),
            'count' => DB::table('games')->count(),
            'countScoreGtSeven' => DB::table('games')->where('score', '>', 7)->count()
        ];

        return view('games.dashboard', [
            'stats' => $stats,
            'bestGames' => $bestGames
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $game
     * @return \Illuminate\Http\Response
     */
    public function show(int $gameId): View
    {
        $game = DB::table('games')
            ->where("id", $gameId)
            ->first();
        return view('games.show', ['game' => $game]);
    }



    /**
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
