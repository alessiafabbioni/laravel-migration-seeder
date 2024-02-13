<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class MainController extends Controller
{
    public function index() {
        $trains = Train :: all();
        return view('pages.index', compact ('trains'));
    }
}
