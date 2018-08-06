<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('backend.EducationPhase.login');
});

Route::get('/dashboard', function () {
    return view('backend.EducationPhase.dashboard');
});

Route::get('/educationphase', function () {
    return view ('backend.EducationPhase.educationphase');
});



Route::get('/studyphase', function () {
    return view ('backend.EducationPhase.studyphase');
});

Route::get('/study', function () {
    return view ('backend.EducationPhase.addstudy');
});

Route::get('/year', function () {
    return view ('backend.EducationPhase.addyear');
});

Route::get('/login', function () {
    return view ('backend.EducationPhase.login');
});


Route::get('/add', function () {
    return view ('Add_Address');
});
Route::get('/addtypeto', function () {
    return view ('backend.EducationPhase.addtype');
});


Route::get('/addbook', 'BookedController@getAllBooked');

Route::prefix('studyType')->group(function() {
    Route::post('/addType', 'TypeofstudeyController@addtype');
    Route::get('/allTypes', 'TypeofstudeyController@getalltypes');
    Route::get('/delete/{id}', 'TypeofstudeyController@deletetype');
    Route::get('/edit/{id}', 'TypeofstudeyController@gettype');
    Route::post('/editStudyType/{id}', 'TypeofstudeyController@edittype');



});

Route::prefix('educationType')->group(function() {
    Route::post('/addType', 'TypeeducationController@addtype');
    Route::get('/allTypes', 'TypeeducationController@getalltypes');
    Route::get('/delete/{id}', 'TypeeducationController@deletetype');
    Route::get('/edit/{id}', 'TypeeducationController@gettype');
    Route::post('/editEducationType/{id}', 'TypeeducationController@edittype');

});

Route::prefix('study')->group(function() {
    Route::post('/addType', 'StudyController@addtype');
    Route::get('/allTypes', 'StudyController@getalltypes');
    Route::get('/delete/{id}', 'StudyController@deletetype');
    Route::get('/edit/{id}', 'StudyController@gettype');
    Route::post('/editstudy/{id}', 'StudyController@edittype');



});

Route::prefix('year')->group(function() {
    Route::post('/addType', 'EducationyeaController@addtype');
    Route::get('/allTypes', 'EducationyeaController@getalltypes');
    Route::get('/delete/{id}', 'EducationyeaController@deletetype');
    Route::get('/edit/{id}', 'EducationyeaController@gettype');
    Route::post('/edityear/{id}', 'EducationyeaController@edittype');



});

Route::prefix('Education')->group(function() {
    Route::get('/getAllEducation', 'EducationController@getAllEducation');
    Route::post('/addType', 'EducationController@addEducation');
    Route::get('/allTypes', 'EducationController@getAll');
    Route::get('/delete/{id}', 'EducationController@deletetype');
    Route::get('/edit/{id}', 'EducationController@gettype');
    Route::post('/editEducation{id}', 'EducationController@edittype');


});

Route::prefix('book')->group(function() {
    Route::get('/getAllBook', 'BookedController@getAllBook');
    Route::get('/getStudent', 'BookedController@getStudent');
    Route::post('/addType', 'BookedController@addBook');
    Route::get('/allTypes', 'BookedController@getAll');
    Route::get('/delete/{id}', 'BookedController@deleteBook');
    Route::get('/edit/{id}', 'BookedController@getBook');
    Route::post('/editEducation{id}', 'BookedController@editBook');


});

Route::get('/addstudy', function () {
    return view ('backend.EducationPhase.studyphase');
});

Route::get('/addEtucationType', function () {
    return view ('backend.EducationPhase.educationphase');
});


Route::post('/addAddress', 'AddressController@store');
Route::get('/adddata', 'EducationController@getAllEducation');

Route::post('/adminlogin', 'AdminController@validAdmin');



/*  Ahmed work */
Route::get('/subject', function () {
    return view ('backend.university.addsubject');
});



Route::get('/term', function () {
    return view ('backend.term.addterm');
});


Route::get('/student', function () {
    return view ('backend.student.addstudent');
});

Route::get('/slot', function () {
    return view ('backend.slot.addslot');
});

Route::get('/university', function () {
    return view ('backend.university.adduniversity');
});


Route::get('/teacher', function () {
    return view ('backend.teacher.addteacher');
});

Route::get('/faculty', function () {
    return view ('backend.university.addfaculty');
});
Route::prefix('study')->group(function() {
    Route::post('/addType', 'StudyController@addtype');
    Route::get('/allTypes', 'StudyController@getalltypes');
    Route::get('/delete/{id}', 'StudyController@deletetype');
    Route::get('/edit/{id}', 'StudyController@gettype');
    Route::post('/editstudy/{id}', 'StudyController@edittype');



});



Route::prefix('slot')->group(function() {
    Route::post('/addType', 'SlotController@addtype');
    Route::get('/allTypes', 'SlotController@getalltypes');
    Route::get('/delete/{id}', 'SlotController@deletetype');
    Route::get('/edit/{id}', 'SlotController@gettype');
    Route::post('/editslot/{id}', 'SlotController@edittype');



});
Route::prefix('university')->group(function() {
    Route::post('/addType', 'UniversityController@addtype');
    Route::get('/allTypes', 'UniversityController@getalltypes');
    Route::get('/delete/{id}', 'UniversityController@deletetype');
    Route::get('/edit/{id}', 'UniversityController@gettype');
    Route::post('/edituniversity/{id}', 'UniversityController@edittype');



});


Route::prefix('teacher')->group(function() {
    Route::post('/addType', 'TeacherController@addtype');
    Route::get('/allTypes', 'TeacherController@getalltypes');
    Route::get('/delete/{id}', 'TeacherController@deletetype');
    Route::get('/edit/{id}', 'TeacherController@gettype');
    Route::post('/editteacher/{id}', 'TeacherController@edittype');



});


Route::prefix('term')->group(function() {
    Route::post('/addType', 'TermController@addtype');
    Route::get('/allTypes', 'TermController@getalltypes');
    Route::get('/delete/{id}', 'TermController@deletetype');
    Route::get('/edit/{id}', 'TermController@gettype');
    Route::post('/editterm/{id}', 'TermController@edittype');



});

Route::prefix('student')->group(function() {
    Route::post('/addType', 'studentController@addtype');
    Route::get('/allTypes', 'studentController@getalltypes');
    Route::get('/delete/{id}', 'studentController@deletetype');
    Route::get('/edit/{id}', 'studentController@gettype');
    Route::post('/editstudent/{id}', 'studentController@edittype');



});


Route::prefix('subject')->group(function() {
    Route::post('/addType', 'SubjectController@addtype');
    Route::get('/allTypes', 'SubjectController@getalltypes');
    Route::get('/delete/{id}', 'SubjectController@deletetype');
    Route::get('/edit/{id}', 'SubjectController@gettype');
    Route::post('/editsubject/{id}', 'SubjectController@edittype');



});


Route::prefix('faculty')->group(function() {
    Route::post('/addType', 'FacultyController@addtype');
    Route::get('/allTypes', 'FacultyController@getalltypes');
    Route::get('/delete/{id}', 'FacultyController@deletetype');
    Route::get('/edit/{id}', 'FacultyController@gettype');
    Route::post('/editfaculty/{id}', 'FacultyController@edittype');



});


/*end Ahmed work */