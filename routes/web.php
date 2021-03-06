<?php

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

/*
Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
})->where('foo', '[0-9a-zA-Z]{3}');
*/
/*
Route::get('/', [
    'as' => 'home', 
    function(){
        return 'My name is "home".';
    }
]);

Route::get('/home', function(){
    return redirect(route('home'));
});

Route::get('/', function(){
    return view('welcome', [
        'name' => 'Foo',
        'greeting' => 'Hello?',
    ]);
});
*/

Route::get('/', function(){
    $items = ['apple', 'banana', 'tomato'];

    return view('welcome', ['items' => $items]);
});