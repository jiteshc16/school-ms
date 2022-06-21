<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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
    return view('welcome');
});


//Routes to redirect to homepage//

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);


//Routes to add teachers by admin//

Route::get('/add_teachers_view',[AdminController::class,'addview']);

Route::post('/upload_teacher',[AdminController::class,'upload']);


//Routes to make request by teachers and can be approved or canceled by admin//

Route::get('/teachers_profile_update',[AdminController::class,'teachersprofileupdate']);

Route::get('/make_request_teacher',[HomeController::class,'makerequestteacher']);

Route::post('/make_request_teacher',[HomeController::class,'makerequestbyteacher']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);


//Routes to delete or update teacher by admin//

Route::get('/showteachers',[AdminController::class,'showteachers']);

Route::get('/deleteteacher/{id}',[AdminController::class,'deleteteacher']);

Route::get('/updateteacher/{id}',[AdminController::class,'updateteacher']);

Route::post('/edit-teacher/{id}',[AdminController::class,'editteacher']);


//Routes to fill form for admission by students//

Route::post('/admission-form',[HomeController::class,'form']);


//Routes to add student details by admin//

Route::get('/add_student_view',[AdminController::class,'addstudent']);

Route::post('/upload_student',[AdminController::class,'uploadstudent']);


//Routes to delete or update student details by admin//

Route::get('/showstudents',[AdminController::class,'showstudent']);

Route::get('/deletestudent/{id}',[AdminController::class,'deletestudent']);

Route::get('/updatestudent/{id}',[AdminController::class,'updatestudent']);

Route::post('/edit-student/{id}',[AdminController::class,'editstudent']);


//Route by which teacher can delete their request//

Route::get('/deleterequest/{id}',[AdminController::class,'deleterequest']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
