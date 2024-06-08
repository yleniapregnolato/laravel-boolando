@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-4 mb-5">
                    @include('partials.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection