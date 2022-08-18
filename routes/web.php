<?php


use App\Http\Controllers\StudentInfoController;
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
    return view('welcome');
});
// Route::get('/create', function () {
//     return view('/student/info/create');
// });
Route::view('/create', 'student.info.create');
Route::view('/index', 'student.info.index');
Route::resource ('student_infos', StudentInfoController::class);