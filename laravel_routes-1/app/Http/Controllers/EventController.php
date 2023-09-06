<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index() {
        return view('/home');
    }
    
    public function eventos()
    {
        $nome = "Deivison";

        $arr = [1, 2, 3, 4, 5, 6, 7,];
        $id = 10;

        $nomes = [
            'Maria',
            'Mathues',
            'Deivison',
            'Otavio',
        ];

        return view('welcome', ['nome' => $nome, 'arr' => $arr, 'nomes' => $nomes]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function contato()
    {
        return view('events.contato');
    }
    public function login()
    {
        return view('events.login');
    }

    public function register() {
        return view('events.register');
    }
}
