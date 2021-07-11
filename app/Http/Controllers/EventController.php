<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index() {
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
    }

    public function create() {
        return view('events.create');
    }
}