<?php

namespace App\Http\Controllers;

use App\Room;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $rooms = Room::get();
        return view('rooms/index', array('user' => Auth::user(),'rooms' => $rooms));
    }
    public function store(Request $request){

        $this->validate($request, [

            'name' =>['required', 'string', 'max:191'],
            'available' =>['boolean'],
            'price' =>['required', 'integer' ,'max:30000'],
            'head' =>['required', 'integer' ,'max:20'],
        ]);

        Room::create($request->all());
        return redirect('/home');
    }
}
