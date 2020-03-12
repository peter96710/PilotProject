@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Booking Rooms</div>

                    <div class="card-body">

                        @if(count($errors)>0)

                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </div>

                        @endif

                        <form method="GET" action="update/{{$rooms->id}}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$rooms->name}}" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$rooms->price}}" required autocomplete="price" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="head" class="col-md-4 col-form-label text-md-right">{{ __('Head') }}</label>

                                <div class="col-md-6">
                                    <input id="head" type="number" class="form-control @error('head') is-invalid @enderror" name="head" value="{{$rooms->head}}" required autocomplete="head" autofocus>
                                </div>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input col-md-9" value="1" id="party" name="party" @if($rooms->available) checked @endif>
                                <label class="form-check-label @error('party') is-invalid @enderror" for="party">Available</label>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
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
