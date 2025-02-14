<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Property extends Model
{
    use HasFactory;

    function getPriceAsCurrency() {
        return Number::currency;
    }

    function getPriceAsSqurt() {
        return Number::currency;
    }
}
