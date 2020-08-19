<?php

namespace App\Http\Controllers;

use App\Mass;
use Illuminate\Http\Request;

class MassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masses = Mass::all();
        return $masses;
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mass $mass)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masses = Mass::create($request->all());
        return $masses;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mass = Mass::find($id);
        return $mass;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function edit(Mass $mass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mass = Mass::find($id);
        $mass->fill($request->all())->save();
        return $mass;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mass  $mass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mass = Mass::find($id);
        $mass->delete();
        return $mass;
    }
}
