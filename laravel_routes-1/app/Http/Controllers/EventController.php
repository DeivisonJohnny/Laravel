<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Deivison";

        $arr = [1,2,3,4,5,6,7,];
        $id = 10;
    
        $nomes = [
            'Maria',
            'Mathues',
            'Deivison', 
            'Otavio',
        ];
    
        return view('welcome', ['nome' => $nome, 'arr' => $arr, 'nomes' => $nomes]);
    }

    public function create($id = 0) {
        return view('events.create');
    }
}
