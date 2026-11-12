<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// definisd as rotas do sistema
/*
Route::get(
    '/login',
    'UserController@login'
)->name('login');
Route::get(
    '/',
    'UserController@index'
)->name('index');

Route::post(
    '/create-user',
    'UserController@store'
)->name('create-user');*/

/*
|--------------------------------------------------------------------------
| Autenticação
|--------------------------------------------------------------------------
*/

Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/create-user', [UserController::class, 'store'])->name('create-user');

/*
|--------------------------------------------------------------------------
| Dashboards
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('/dashboard-1', [UserController::class, 'index_1'])->name('dashboard-1');
Route::get('/dashboard-2', [UserController::class, 'index_2'])->name('dashboard-2');
Route::get('/widgets', [UserController::class, 'widgets'])->name('widgets');
Route::get('/analytics', [UserController::class, 'analytics'])->name('analytics');

/*
|--------------------------------------------------------------------------
| Eventos
|--------------------------------------------------------------------------
*/

Route::get('/events', [UserController::class, 'events'])->name('eventos');

/*
|--------------------------------------------------------------------------
| Professores
|--------------------------------------------------------------------------
*/

Route::get('/all-professors', [UserController::class, 'all_professors'])->name('all-professors');
Route::get('/add-professors', [UserController::class, 'add_professors'])->name('add-professors');
Route::get('/edit-professors', [UserController::class, 'edit_professors'])->name('edit-professors');
Route::get('/profile-professors', [UserController::class, 'profile_professors'])->name('profile-professors');

/*
|--------------------------------------------------------------------------
| Estudantes
|--------------------------------------------------------------------------
*/

Route::get('/all-students', [UserController::class, 'all_students'])->name('all-students');
Route::get('/add-students', [UserController::class, 'add_students'])->name('add-students');
Route::get('/edit-students', [UserController::class, 'edit_students'])->name('edit-students');
Route::get('/profile-students', [UserController::class, 'profile_students'])->name('profile-students');

/*
|--------------------------------------------------------------------------
| Cursos
|--------------------------------------------------------------------------
*/

Route::get('/all-course', [UserController::class, 'all_courses'])->name('all-course');
Route::get('/add-courses', [UserController::class, 'add_course'])->name('add-courses');
Route::get('/edit-course', [UserController::class, 'edit_course'])->name('edit-course');
Route::get('/course-info', [UserController::class, 'course_info'])->name('course-info');
Route::get('/course-payment', [UserController::class, 'course_payment'])->name('course-payment');

/*
|--------------------------------------------------------------------------
| Correio
|--------------------------------------------------------------------------
*/

Route::get('/mailbox-compose', [UserController::class, 'mailbox_compose'])->name('mailbox-compose');
Route::get('/mailbox-view', [UserController::class, 'mailbox_view'])->name('mailbox-view');
Route::get('/mailbox', [UserController::class, 'mailbox'])->name('mailbox');

/*
|--------------------------------------------------------------------------
| Departamento
|--------------------------------------------------------------------------
*/
Route::get('/add-department', [UserController::class, 'add_department'])->name('add-department');
Route::get('/edit-department', [UserController::class, 'edit_department'])->name('edit-department');
Route::get('/department', [UserController::class, 'department'])->name('department');
