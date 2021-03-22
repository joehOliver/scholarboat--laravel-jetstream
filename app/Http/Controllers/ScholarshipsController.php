<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;

class ScholarshipsController extends Controller
{
    public function show($id)
    {
        $scholarship = Scholarship::find($id);
        
        return view('scholarships.show', ['scholarship' => $scholarship]);
    }

    public function index() {
        $scholarships = Scholarship::latest()->get();
        
        return view('scholarships.index', ['scholarships' => $scholarships]);
    }
}
