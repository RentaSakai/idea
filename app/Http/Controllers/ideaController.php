<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ideaController extends Controller
{
    // public function __construct()
    // {

    // }
    public function index()
    {
        return view('idea.index');
    }

    public function store(Request $rquest)
    {
        return view('idea.index');
    }
}
