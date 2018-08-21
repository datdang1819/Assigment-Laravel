<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Category;
class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $list_obj = Game::paginate(4);
        return view('game.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Game();
        $obj->name = Input::get('name');
        $obj->price = Input::get('price');
        $obj->images = Input::get('images');
        $obj->categoryId = Input::get('categoryId');
        $obj->save();
        return redirect('/game/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Game::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('game.show')
            ->with('obj', $obj);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Game::find($id);
        if($obj == null){
            return view('404');
        }
        return view('game.edit')->with('obj',$obj);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Game::find($id);
        if ($obj == null){
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->price = Input::get('price');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/game');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Game::find($id);
        if ($obj == null) {
            return response('Game not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }
}
