<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;


    protected $fillable = [
        'imie_zwierzecia',
        'czy_posiada_zwierzeta',
        'jakie_zwierzeta',
        'email',
        'telefon',
        'o_sobie',
    ];
}