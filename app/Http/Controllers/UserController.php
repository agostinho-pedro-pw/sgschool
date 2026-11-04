<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Rota para exibir a pagina de login
    public function index()
    {
        return view('index');
    }
    //rota para exibir o formulário 
    public function login()
    {
        return view('users.login');
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
