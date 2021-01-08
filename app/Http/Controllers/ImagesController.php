<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{

    public function index(){

        return view('create');
    }

    public function create(array $data){
    
        return Images::create([
            'name' => $data['name'],
            'email' => $data['email'],
            ]);
    }
}
