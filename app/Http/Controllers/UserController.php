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
        return view('admin.dashboard.index.index');
    }
    public function index_1()
    {
        return view('admin.dashboard.index-1.index');
    }
    public function index_2()
    {
        return view('admin.dashboard.index-2.index');
    }
    public function widgets()
    {
        return view('admin.dashboard.widgets.index');
    }
    public function analytics()
    {
        return view('admin.dashboard.analytics.index');
    }
    //rota para exibir o login 
    public function login()
    {
        return view('admin.auth.login.index');
    }
    /*------Rota para exibit os event-------*/
    public function events()
    {
        return view('admin.auth.events.index');
    }
    //Rota para exibir o all-professor
    public function all_professors()
    {
        return view('admin.professors.all-professors.index');
    }
    //Rota para exibir o add-professor
    public function add_professors()
    {
        return view('admin.professors.add-professor.index');
    }
    //Rota para exibir o edit-professor
    public function edit_professors()
    {
        return view('admin.professors.edit-professor.index');
    }
    public function profile_professors()
    {
        return view('admin.professors.professor-profile.index');
    }


    /*---------CONTROLADOR DOS ESTUDANTES------------*/
    public function all_students()
    {
        return view('admin.students.all-students.index');
    }
    public function add_students()
    {
        return view('admin.students.add-student.index');
    }
    public function edit_students()
    {
        return view('admin.students.edit-student.index');
    }
    public function profile_students()
    {
        return view('admin.students.student-profile.index');
    }
    /*----------CONTROLADORES DOS CURSOs---------------------*/
    public function all_courses()
    {
        return view('admin.courses.all-courses.index');
    }
    public function add_course()
    {
        return view('admin.courses.add-course.index');
    }
    public function edit_course()
    {
        return view('admin.courses.edit-course.index');
    }
    public function course_info()
    {
        return view('admin.courses.course-info.index');
    }
    public function course_payment()
    {
        return view('admin.courses.course-payment.index');
    }
    /*---------CONTROLARES DOS CORREIOS---------------*/
    public function mailbox_compose()
    {
        return view('admin.mailbox.mailbox-compose.index');
    }
    public function mailbox_view()
    {
        return view('admin.mailbox.mailbox-view.index');
    }
    public function mailbox()
    {
        return view('admin.mailbox.mailbox.index');
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
