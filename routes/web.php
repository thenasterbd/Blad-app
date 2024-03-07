<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', function () {
    $titel = "Hola mundo en Laravel";
    return view('data-today', array(
        'titel' =>$titel
    ));
});

Route::get('/movies/{titel?}/{year?}', function ($titel = 'No hay una pelicula', $year =2019) {
    return view('movies', array(
        'titel' =>$titel,
        'year' => $year
    ));
}) ->where(array(
    'titel' =>'[a-zA-z]+',
    'year' => '[0-9]+'
));

/*
Route::get('/listado-peliculas', function () {
    $titel = "Hola mundo en Laravel";
    return view('peliculas.listado', array(
        'titel' =>$titel
    ));
});

*/

Route::get('/listado-peliculas', function () {
    $titel = "Hola mundo en 4444 Laravel";
    $listado = array('batman','Spiderman','BNV');
    return view('peliculas.listado')
            ->with('titel', $titel)
            ->with('listado', $listado);
       
});

Route::get('/pagina-generica', function(){

    return view('pagina');

});

Route::get('/movies_two', 'App\Http\Controllers\MovieController@index');
Route::resource('/user','App\Http\Controllers\UserController');
Route::get('/detail', [
  'uses' => 'App\Http\Controllers\MovieController@detail',
  'as' =>'peliculas.detail'
]);

Route::get('/redirect', [
    'uses' => 'App\Http\Controllers\MovieController@detail',
    'as' =>'peliculas.detail'
  ]);