<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeControler extends Controller
{
    public function index() {
        return view('Customers.index');
    }

}
