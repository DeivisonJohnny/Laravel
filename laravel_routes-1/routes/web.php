<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
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
});


Route::get('/contato', function() {
    return view('contato',);
});

Route::get('/produtos', function() {
    $busca = request('search');
    return view('products', ['busca' => $busca]);
});

#Parametros opcionais passados pela URL devem acompanhar o sinal de ? e passados pela função com um valor padrão caso não sejam inseridos dados 

Route::get('/produtos_test/{id?}', function($id = 0) {
    return view('product', ['id' => $id]);
});

Route::get('/main', function() {
    return view('main');
});