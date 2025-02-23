<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{

    public function show()
    {
        $message = Home::create(['content' => 'Hello World!']);
        return view('hello', compact('message'));
    }
}