<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('backend.login');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/educationphase', function () {
    return view ('backend.educationphase');
});



Route::get('/studyphase', function () {
    return view ('backend.studyphase');
});



Route::get('/login', function () {
    return view ('backend.login');
});


Route::get('/add', function () {
    return view ('Add_Address');
});
Route::get('/addtypeto', function () {
    return view ('backend.addtype');
});

Route::prefix('studyType')->group(function() {
    Route::post('/addType', 'TypeofstudeyController@addtype');
    Route::get('/allTypes', 'TypeofstudeyController@getalltypes');

});

Route::prefix('educationType')->group(function() {
    Route::post('/addType', 'TypeofstudeyController@addtype');
    Route::get('/allTypes', 'TypeofstudeyController@getalltypes');

});

Route::get('/addstudy', function () {
    return view ('backend.studyphase');
});

Route::get('/addEtucationType', function () {
    return view ('backend.educationphase');
});

Route::post('/addAddress', 'AddressController@store');


Route::post('/adminlogin', 'AdminController@validAdmin');