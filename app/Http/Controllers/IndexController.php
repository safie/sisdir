<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelSeksyen;

class IndexController extends Controller
{
    public function index()
    {
        $data = ModelSeksyen::all();
        //return dd($data);
        return view('index.landingpage',compact('data'));
        //return view('index.landingpage');
        
    }
}
