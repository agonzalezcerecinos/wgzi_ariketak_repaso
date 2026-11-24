<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }

    public function froga(string $n = "usuario")
    {

        $users = ['Jone' => 1, 'Alex' => 2];
        return view('home.froga', compact('n', 'users'));
    }
}
