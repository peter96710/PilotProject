<?php

namespace App\Http\Controllers;

use App\Book;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BooksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $rooms = Room::where('available','1')->get();
        return view('books/index', array('user' => Auth::user(),'rooms' => $rooms));
    }

    public function listing(){
        $books = Book::with('room')->where('user_id',Auth::user()->id)->get();
        return view('books/listing', array('user' => Auth::user(),'books' => $books));
    }

    public function store(Request $request){
        //return $request->all();

        $request->request->add(['user_id'=>Auth::user()->id]);
        Book::create($request->all());
        return redirect('/home');
    }

    /*public function deletebook(Request $request){
        Book::find(1)->deleted();
    }*/

    public function destroy(Book $books)
    {
        Book::find($books->id)->delete();
        return redirect('/books/listing');
    }
}
