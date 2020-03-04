<?php

namespace App\Http\Controllers;

use App\Book;
use App\Room;
use FontLib\Table\Type\name;
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

        $variable = Room::value('head');

        $this->validate($request, [

            'name' =>['required', 'string', 'max:191'],
            'zip' =>['required', 'string', 'max:10'],
            'city' =>['required', 'string', 'max:168'],
            'street' =>['required', 'string', 'max:191'],
            'phone_number' =>['required', 'string', 'max:30', 'regex:/^[0-9]+$/'],
            'party' =>[ 'boolean', ],
            'pay' =>['required', 'string', 'max:30'],
            'age' =>['required', 'integer' , 'min:0'],
            'head' =>['required', 'integer', "max:$variable" , 'min:1'],
        ]);


        $request->request->add(['user_id'=>Auth::user()->id]);
        Book::create($request->all());
        /*Book::create([
            'name'=> $request->input('name'),
        ]);*/
        return redirect('/home');
    }

    public function destroy(Book $books)
    {
        Book::find($books->id)->delete();
        return redirect('/books/listing');
    }
}
