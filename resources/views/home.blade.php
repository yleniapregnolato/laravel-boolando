@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-4">
                    @include('partials.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection