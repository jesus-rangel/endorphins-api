<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    public function yoda()
    {
        return view('languages/yoda');
    }
}
