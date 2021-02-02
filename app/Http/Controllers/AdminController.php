<?php

namespace App\Http\Controllers;

use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use App\Book;
use App\Room;
use App\User;

class AdminController extends Controller
{
    public function index(){
        return view('/admin/home');
    }
    public function destroy(Room $rooms){
        Room::find($rooms->id)->delete();
        return redirect('/rooms/edit');

    }

    public function edit(Room $rooms){

        return view('/admin/edit' , array('rooms' => $rooms));

    }

    public function update(Request $request, $id){

        Room::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'head' => $request->input('head'),
                'price' => $request->input('price')
                ]);
        return redirect ()  $request->input('name');


    }

    public function list(){

        $rooms = Room::get();
        return view('admin/list', array('rooms' => $rooms));

    }
}
