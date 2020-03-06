@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <table class="table">
                    <thead class="thead-dark">

                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Available</th>
                        <th scope="col">Max Head</th>
                        <th scope="col">Price/Head</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{$room->name}}</td>
                            <td> @if ($room->available) Yes @else No @endif</td>
                            <td>{{$room->head}}</td>
                            <td>{{$room->price}}</td>
                            <td> <a href="/admin/edit/{{$room->id}}" class="btn btn-warning"><span class="left ion-close">Edit</span></a></td>
                            <td> <a href="/admin/destroy/{{$room->id}}" class="btn btn-danger"><span class="left ion-close">Delete</span></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>




            </div>
        </div>
    </div>
@endsection
