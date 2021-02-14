@extends('layouts.app')


@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <p class="toppings">Extra Toppings:</p>
    <ul>
       @foreach (explode(',', $pizza->toppings) as $topping)
        <li>       
            {{ trim($topping,'[]"') }}
        </li>
        @endforeach
    </ul>
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
    @csrf 
   <button>Complete Order</button>
    @method('DELETE')
    </form>
</div>
<a href="/pizzas" class="back"> <-- Back to all pizzas</a>
@endsection