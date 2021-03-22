<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institution;

class InstitutionsController extends Controller
{
    public function show($id)
    {
        $institution = Institution::find($id);
        
        return view('institutions.show', ['institution' => $institution]);
    }

    public function index() {
        $institutions = Institution::all();
        
        return view('institutions.index', ['institutions' => $institutions]);
    }
}
