<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/address', function () {
    return view ('backend.address');
});

Route::get('/login', function () {
    return view ('backend.login');
});


Route::get('/add', function () {
    return view ('Add_Address');
});

Route::post('/addAddress', 'AddressController@store');
