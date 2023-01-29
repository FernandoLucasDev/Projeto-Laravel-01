<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller {
    public function index(){

        $events = Event::all(); //chama todos os eventos do banco 
                                        // Faz um json com os dados ($events)
        return view('welcome', [
            'events'=>$events //Pega todos os registros
        ]);
    }

    public function products(){
        return view('products');
    }

    public function create(){
        return view('events.create');
    }
}
