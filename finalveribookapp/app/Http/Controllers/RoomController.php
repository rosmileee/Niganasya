<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        // Fetch data or perform some logic
        return view('room.index'); // Make sure this view exists
    }


    public function create(){
        return view ('room.create');
    }
}
