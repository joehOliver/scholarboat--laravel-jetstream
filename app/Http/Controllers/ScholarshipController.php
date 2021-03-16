<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;

class ScholarshipController extends Controller
{
    public function show($id)
    {
        $scholarship = 'test';
        returun view('scholarship', [
            'scholarship' => $scholarship
        ]);
    }
}
