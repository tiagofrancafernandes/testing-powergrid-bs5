<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteContoller extends Controller
{
    public function index(Request $request)
    {
        return view('notes.index');
    }
}
