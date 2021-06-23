<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use \App\Models\Player;

class playerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('players/index', ['players' => $players]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players = Player::all();
        return view('players/create', ['players' => $players]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' =>'required',
            'team_id' => 'required'
        ]);

        $player = Player::create([
            'voornaam' => $request->firstname,
            'achternaam' =>$request->lastname,
            'team_id' => $request->team_id
        ]);

        return redirect()->route('players.show', $player->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::findOrFail($id);
        $team = Team::all();
        return view('players.show', ['players' => $player], ['team' => $team]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::findOrFail($id);
        $teams = Team::all();
        return view('players.edit', ['player' => $player], ['teams' => $teams]);
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
        $player = Player::findOrFail($id);

        $request->validate([
            'firstname' => 'required',
            'lastname' =>'required',
            'team_id' =>'required'
        ]);

        $player->update([
            'voornaam' => $request->firstname,
            'achternaam' => $request->lastname,
            'team_id' => $request->team_id
        ]);

        return redirect()->route('players.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect()->route('players.index');
    }
}
