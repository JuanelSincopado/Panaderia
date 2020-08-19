<?php

namespace App\Http\Controllers;

use App\Ingredient_Recipe;
use Illuminate\Http\Request;

class IngredientRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredientsRecipes = Ingredient_Recipe::all();
        return $ingredientsRecipes;
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
        $ingredientsRecipes = Ingredient_Recipe::create($request->all());
        return $ingredientsRecipes;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingredient_Recipe  $ingredient_Recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingredientsRecipes = Ingredient_Recipe::find($id);
        return $ingredientsRecipes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingredient_Recipe  $ingredient_Recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient_Recipe $ingredient_Recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingredient_Recipe  $ingredient_Recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ingredientsRecipes = Ingredient_Recipe::find($id);
        $ingredientsRecipes->fill($request->all())->save();
        return $ingredientsRecipes;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingredient_Recipe  $ingredient_Recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingredientsRecipes = Ingredient_Recipe::find($id);
        $ingredientsRecipes->delete();
        return $ingredientsRecipes;
    }
}
