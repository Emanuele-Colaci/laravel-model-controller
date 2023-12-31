<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\comics;

class PageController extends Controller
{
    public function index(){

        $comics = comics::all();
        
        return view('home', compact('comics'));

    }

    public function show($id){

        $comic = comics::find($id);

        return view('/products/comic_show', compact('comic'));
    }
}
