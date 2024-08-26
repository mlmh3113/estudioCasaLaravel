<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra;
use Inertia\Inertia;

class ObraController extends Controller
{
    
    public function show($id){
        $obra = Obra::find($id);
        return Inertia::render('ObraView', ['obra' => $obra]);
    }
}
