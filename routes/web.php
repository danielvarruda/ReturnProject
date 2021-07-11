<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   
    $name = "Daniel Arruda";
    $age = 19;

    $languages = ['PHP', 'JavaScript', 'MySQL'];
    $companies = ['Fazer Comunicação', 'WR Infoteam', 'BS Tecnologia'];
   
    return view('welcome', 
        [
            'name' => $name, 
            'age' => $age,
            'languages' => $languages,
            'companies' => $companies
        ]
    );
});

Route::get('/produtos', function () {
    return view('products');
});