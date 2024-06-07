<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AdviceController extends Controller
{
    public function index(): View
    {
        return view("index", []);
    }
}
