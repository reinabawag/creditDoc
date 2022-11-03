<?php

namespace App\Http\Controllers;

use App\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifications = Classification::latest()->get();

        return view('classification.index')->with('classifications', $classifications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|min:8|unique:classifications',
        ]);

        $classification = new Classification;

        $classification->description = $request->description;

        $classification->save();

        return redirect()->route('classification.index')->with('status', 'Successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function show(Classification $classification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function edit(Classification $classification)
    {
        return view('classification.edit')->with('classification', $classification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classification $classification)
    {
        $request->validate([
            'description' => 'required|min:8|unique:classifications',
        ]);

        $classification->description = $request->description;

        $classification->save();

        return redirect()->route('classification.index')->with('status', 'Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classification $classification)
    {
        //
    }
}
