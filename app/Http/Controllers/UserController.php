<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Rota para exibir a main-dashboard
    public function index()
    {
        return view('dashboard.index');
    }
    //rota para exibir o login 
    public function login()
    {
        return view('auth.login');
    }
    /*------Rota para exibit os event-------*/
    public function events()
    {
        return view('auth.events');
    }
    //Rota para exibir o all-professor
    public function all_professors()
    {
        return view('professors.all-professors');
    }
    //Rota para exibir o add-professor
    public function add_professors()
    {
        return view('professors.add-professor');
    }
    //Rota para exibir o edit-professor
    public function edit_professors()
    {
        return view('professors.edit-professor');
    }


    /*---------CONTROLADOR DOS ESTUDANTES------------*/
    public function all_students()
    {
        return view('students.all-students');
    }
    public function add_students()
    {
        return view('students.add-student');
    }
    public function edit_students()
    {
        return view('students.edit-student');
    }
    public function student_profile()
    {
        return view('students.student-profile');
    }
    /*----------CONTROLADORES DOS CURSOs---------------------*/
    public function all_courses()
    {
        return view('courses.all-courses');
    }
    public function add_course()
    {
        return view('courses.add-course');
    }
    public function edit_course()
    {
        return view('courses.edit-course');
    }
    public function course_info()
    {
        return view('courses.course-info');
    }
    public function course_payment()
    {
        return view('courses.course-payment');
    }
    /*---------CONTROLARES DOS CORREIOS---------------*/
    public function mailbox_compose()
    {
        return view('mailbox.mailbox-compose');
    }
    public function mailbox_view()
    {
        return view('mailbox.mailbox-view');
    }
    public function mailbox()
    {
        return view('mailbox.mailbox');
    }
    //rota para armazenar os dados do usuario no banco de dados
    public function store(Request $request)
    {
        //usado pra criar excepcções
        try {
            //dd($request->all());
            User::create([
                'username' => $request->username,
                'password' => $request->password,
            ]);
            return redirect()->route('dashboard');
        } catch (Exception $e) {
            return back()->withInput();
        }
    }
}
