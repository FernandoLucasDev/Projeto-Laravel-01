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

    public function store(request $request){ //request recebe todos os dados do form
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        //image upload

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientoriginalName() . strtotime('now') . "." . $extension);

            $request->image->move(public_path('/img/events'), $imageName);

            $event->image = $imageName;

        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('events.show', ['event'=>$event]);
    }
}
