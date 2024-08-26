<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Obra;

class HomeController extends Controller
{
    public function index()
    {
        $obras = Obra::all();
        return Inertia::render('HomeView', ['obras' => $obras]);
    }

    public function contact()
    {
        return Inertia::render('ContactView');
    }

}
