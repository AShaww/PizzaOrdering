@extends('layout.layout')

@section('content')
<div class="wrapper create-pizza"> 
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Maargarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="this & crispy">Veg Supreme</option>
            <option value="thick">thick</option>
        </select>
        <fieldset>
            <label>Extra Toppings:</label><br />
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="sweetcorn">sweetcorn<br />
            <input type="checkbox" name="toppings[]" value="chicken">chicken<br />
            <input type="checkbox" name="toppings[]" value="peppers">peppers<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
        </fieldset>
        <input type="submit" value="Order Pizza">
</form>
</div>     
@endsection