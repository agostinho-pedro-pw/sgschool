<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*|definindo as rotas do sistema| */
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
/*------->>Rotas principais da sgSchool-------*/
/*-------Rota-login-----------*/

Route::get('/', [UserController::class, 'login'])->name('login');
/*-------Rota-dashboard--------*/
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
/*-------Rota-create------------*/
Route::post('/create-user', [UserController::class, 'store'])->name('create-user');
/*-------Rota-eventos-----------*/
Route::get('/events', [UserController::class, 'events'])->name('eventos');
/*-------Rota--all-professores-------*/
Route::get('/all-professors', [UserController::class, 'all_professors'])->name('all-professors');
/*-------Rota--add-professers----*/
Route::get('/add-professors', [UserController::class, 'add_professors'])->name('add-professors');
/*-------Rota--edit-professors----*/
Route::get('/edit-professors', [UserController::class, 'edit_professors'])->name('edit-professors');
/*-------Rota--profile-professors---*/
Route::get('/profile-professors', [UserController::class, 'profile_professors'])->name('profile-professors');


/*-------///-----/ROTAS ESTUDANTES/------///-------*/
/*-------Rota--all-students-------*/
Route::get('/all-students', [UserController::class, 'all_students'])->name('all-students');
/*-------Rota--add-students----*/
Route::get('/add-students', [UserController::class, 'add_students'])->name('add-students');
/*-------Rota--edit-students----*/
Route::get('/edit-students', [UserController::class, 'edit_students'])->name('edit-students');
/*-------Rota--profile-students---*/
Route::get('/profile-students', [UserController::class, 'profile_students'])->name('profile-students');


/*-------///-----/ROTAS CURSOS/------///-------*/
/*-------Rota--all-students-------*/
Route::get('/all-course', [UserController::class, 'all_courses'])->name('all-course');
/*-------Rota--add-students----*/
Route::get('/add-courses', [UserController::class, 'add_course'])->name('add-courses');
/*-------Rota--edit-students----*/
Route::get('/edit-course', [UserController::class, 'edit_course'])->name('edit-course');
/*-------Rota--profile-students---*/
Route::get('/course-info', [UserController::class, 'course_info'])->name('course-info');
Route::get('/course-payment', [UserController::class, 'course_payment'])->name('course-payment');
/*-------///-----/ROTAS CORREIOS/------///-------*/
Route::get('/mailbox-compose', [UserController::class, 'mailbox_compose'])->name('mailbox-compose');
Route::get('/mailbox-view', [UserController::class, 'mailbox_view'])->name('mailbox-view');
Route::get('/mailbox', [UserController::class, 'mailbox'])->name('mailbox');
