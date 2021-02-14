<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    public function index() {   

        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name','desc')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get(); // Better than typing in SQL queries.


        return view('pizzas.index', [
            'pizzas' => $pizzas
         ]);
    }

    public function show($id) { 
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {

        $pizza = new Pizza();   //New instance of the Pizza

        $pizza->name = request('name');
        $pizza->type = request('type');     //Setting attributes from Pizza to $pizza->...
        $pizza->base = request('base'); 
        $pizza->toppings = request('toppings');

        $pizza->save(); 
        // error_log(request('name'));  Line 36 instead of this
        // error_log(request('type'));
        // error_log(request('base'));
        // error_log($pizza);  //Outputs an object of selected items...
        return redirect('/pizzas')->with('mssg', 'Thanks for your order. Your order number is: '.$pizza->id);
    }
    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();#

        return redirect('/pizzas');

    }
}