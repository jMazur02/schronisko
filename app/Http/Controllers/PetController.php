<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet; // Importujemy Model

class PetController extends Controller
{
    public function index()
    {
     
        $zwierzaki = Pet::all();
   
        return view('zwierzaki', ['zwierzaki' => $zwierzaki]);
    }
}