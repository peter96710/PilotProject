@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Booking Rooms</div>

                    <div class="card-body">


                        <form method="GET" action="store">
                            @csrf

                            <div class="form-group row">
                                <label for="room_id" class="col-md-4 col-form-label text-md-right">Szabaduló Szoba</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="room_id" name="room_id">
                                        @foreach($rooms as $room)
                                            <option  value="{{ $room->id }}">{{ $room->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zip" class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>

                                <div class="col-md-6">
                                    <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{$user->zip}}" required autocomplete="zip" autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$user->city}}" required autocomplete="city" autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                                <div class="col-md-6">
                                    <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{$user->street}}" required autocomplete="zip" autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{$user->phone_number}}" required autocomplete="zip" autofocus>


                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="pay" class="col-md-4 col-form-label text-md-right">Example select</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="pay" name="pay">
                                        <option value="KP">Készpénz</option>
                                        <option value="Kártya">Kártya</option>
                                        <option value="Szép">Szép Kártya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="head" class="col-md-4 col-form-label text-md-right">{{ __('Head') }}</label>
                                <div class="col-md-6">
                                    <input id="head" type="number" class="form-control @error('head') is-invalid @enderror" name="head" value="1" max="15" required autocomplete="head" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
                                    <div class="col-md-6">
                                        <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="0" required autocomplete="age" autofocus>
                                    </div>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input col-md-9" value="1" id="party" name="party">
                                <label class="form-check-label" for="party">Szülinapi csomag</label>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Booking') }}
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
