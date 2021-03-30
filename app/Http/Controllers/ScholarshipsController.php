<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarships = Scholarship::latest()->get();

        return view('scholarships.index', ['scholarships' => $scholarships]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scholarships.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Scholarship::create(request()->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'open_date' => 'nullable|date',
            'close_date' => 'nullable|date',
            'offers' => 'nullable|json',
            'reqs' => 'nullable|json',
            'qualifications' => 'nullable|json',
            'link' => 'url|required',
            'contact' => 'nullable|json',
            'slug' => 'nullable|unique:scholarships|max:255'
        ]));

        return redirect('/scholarships');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function show(Scholarship $scholarship)
    {
        return view('scholarships.show', ['scholarship' => $scholarship]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function edit(Scholarship $scholarship)
    {
        return view('scholarships.edit', ['scholarship' => $scholarship]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scholarship $scholarship)
    {
        Scholarship::update(request()->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'open_date' => 'nullable|date',
            'close_date' => 'nullable|date',
            'offers' => 'nullable|json',
            'reqs' => 'nullable|json',
            'qualifications' => 'nullable|json',
            'link' => 'url|required',
            'contact' => 'nullable|json',
            'slug' => 'nullable|unique:scholarships|max:255'
        ]));

        return redirect('/scholarships/' . $scholarship->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scholarship $scholarship)
    {
        //
    }
}
