<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YeniSayfaController extends Controller
{
    public function index()
    {
        return view('sevval');
    }
}