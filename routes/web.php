<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login', [
        'heading' => 'Login Panel',
        'login' => [
            [
                'id' => 1,
                'name' => 'login 1',
                'pw' => 'login1'
            ],
            [
                'id' => 2,
                'name' => 'login 2',
                'pw' => 'login2'
            ]
        ]
    ]);
});

//Route::get('/hello', function(){
//    return response('<h1>Hello world</h1>', 200)
//        ->header('Content-Type', 'Text/plain')
//        ->header('foo', 'bar');
//});
// -------------------------------- In case of reference is needed.
//Route::get('/posts/{id}', function($id){
//    return response('post '. $id);
//})->where('id', '[0-9]+');
//
//Route::get('/search', function(Request $request){
//    return $request->name . ' ' . $request->city;
//});
