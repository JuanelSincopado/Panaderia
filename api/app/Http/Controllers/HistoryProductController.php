<?php

namespace App\Http\Controllers;

use App\History_Product;
use Illuminate\Http\Request;

class HistoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historyProduct = History_Product::all();
        return $historyProduct;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historyProduct = History_Product::create($request->all());
        return $historyProduct;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\History_Product  $history_Product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historyProduct = History_Product::find($id);
        return $historyProduct;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\History_Product  $history_Product
     * @return \Illuminate\Http\Response
     */
    public function edit(History_Product $history_Product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\History_Product  $history_Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $historyProduct = History_Product::find($id);
        $historyProduct->fill($request->all())->save();
        return $historyProduct;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\History_Product  $history_Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historyProduct = History_Product::find($id);
        $historyProduct->delete();
        return $historyProduct;
    }
}
