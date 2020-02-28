@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                        <table class="table">
                            <thead class="thead-dark">

                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Room</th>
                                <th scope="col">Postal_code</th>
                                <th scope="col">City</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Age</th>
                                <th scope="col">Price</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>{{$book->name}}</td>
                                <td>{{$book->room->name}}</td>
                                <td>{{$book->zip}}</td>
                                <td>{{$book->city}}</td>
                                <td>{{$book->street}}</td>
                                <td>{{$book->phone_number}}</td>
                                <td>@if($book->party) Yes @else No @endif</td>
                                <td>{{$book->pay}}</td>
                                <td>{{$book->age}}</td>
                                <td>{{$book->room->price*$book->head}}</td>
                                <td> <a href="/books/destroy/{{$book->id}}" class="btn btn-danger"><span class="left ion-close">Delete</span></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>




            </div>
        </div>
    </div>
@endsection
