<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// masas
Route::get('masses', 'MassController@index', 'indexMasses');
Route::get('masses/{id}', 'MassController@show', 'showMass');
Route::post('masses', 'MassController@store', 'createMass');
Route::put('masses/{id}', 'MassController@update', 'updateMass');
Route::delete('masses/{id}', 'MassController@destroy', 'destroyMass');


//productos
Route::get('products', 'ProductController@index', 'indexProducts'); 
Route::get('products/{id}', 'ProductController@show', 'showProduct'); 
Route::post('products', 'ProductController@store', 'createProduct'); 
Route::put('products/{id}', 'ProductController@update', 'updateProduct'); 
Route::delete('products/{id}', 'ProductController@destroy', 'destroyProduct'); 

//History
Route::get('history', 'HistoryController@index', 'indexHistory'); 
Route::get('history/{id}', 'HistoryController@show', 'showHistory'); 
Route::post('history', 'HistoryController@store', 'createHistory'); 
Route::put('history/{id}', 'HistoryController@update', 'updateHistory'); 
Route::delete('history/{id}', 'HistoryController@destroy', 'destroyHistory'); 

//History_Product
Route::get('historyProduct', 'HistoryProductController@index', 'indexHistoryProduct'); 
Route::get('historyProduct/{id}', 'HistoryProductController@show', 'showHistoryProduct'); 
Route::post('historyProduct', 'HistoryProductController@store', 'CreateHistoryProduct'); 
Route::put('historyProduct/{id}', 'HistoryProductController@update', 'UpdateHistoryProduct'); 
Route::delete('historyProduct/{id}', 'HistoryProductController@destroy', 'DestroyHistoryProduct'); 

//Recipes
Route::get('recipe', 'RecipeController@index', 'indexRecipe'); 
Route::get('recipe/{id}', 'RecipeController@show', 'showRecipe'); 
Route::post('recipe', 'RecipeController@store', 'CreateRecipe'); 
Route::put('recipe/{id}', 'RecipeController@update', 'updateRecipe'); 
Route::delete('recipe/{id}', 'RecipeController@destroy', 'destroyRecipe'); 

//Ingredients
Route::get('ingredient', 'IngredientController@index', 'indexIngredient'); 
Route::get('ingredient/{id}', 'IngredientController@show', 'showIngredient'); 
Route::post('ingredient', 'IngredientController@store', 'createIngredient'); 
Route::put('ingredient/{id}', 'IngredientController@update', 'updateIngredient'); 
Route::delete('ingredient/{id}', 'IngredientController@destroy', 'deleteIngredient'); 

//Ingredient_Recipes
Route::get('ingredientRecipe', 'IngredientRecipeController@index', 'indexIngredientRecipe'); 
Route::get('ingredientRecipe/{id}', 'IngredientRecipeController@show', 'showIngredientRecipe'); 
Route::post('ingredientRecipe', 'IngredientRecipeController@store', 'CreateIngredientRecipe'); 
Route::put('ingredientRecipe/{id}', 'IngredientRecipeController@update', 'updateIngredientRecipe'); 
Route::delete('ingredientRecipe/{id}', 'IngredientRecipeController@destroy', 'destroyIngredientRecipe'); 

// Users
Route::get('user', 'UserController@index', 'indexUser'); 
Route::get('user/{id}', 'UserController@show', 'showUser'); 
Route::post('user', 'UserController@store', 'createUser'); 
Route::put('user/{id}', 'UserController@update', 'updateUser'); 
Route::delete('user{id}', 'UserController@destroy', 'destroyUser'); 
Route::post('userSesion', 'UserController@compare', 'compareUser'); 

