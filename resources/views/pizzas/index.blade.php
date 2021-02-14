@extends('layout.layout')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-white-100  sm:items-center sm:pt-0">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md text-">
                    Pizza Shop
                </div>

                @foreach($pizzas as $pizza)
                <div>
                {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }};
                </div>
                @endforeach   
        </div>              
    </div>
@endsection