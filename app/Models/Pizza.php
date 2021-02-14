<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{ 
    /**
     * Set the pizza's toppings.
     *
     * @param  string  $value
     * @return void
     */
    public function setToppingsAttribute($value)
    {
        $this->attributes['toppings'] = json_encode($value);
    }
    
    protected $cast = [
        'toppings' => 'array',
    ];  
    use HasFactory;
}
