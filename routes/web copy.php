<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response('<h1>Hello World</h1>')
        ->header('Content-Type', 'text/plain')
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id) {
   //dd($id);
    return response('Post' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    //dd($request);
    //dd($request->name . ' ' . $request->city);
    return $request->name . ' ' . $request->city;
});