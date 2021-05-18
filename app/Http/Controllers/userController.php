<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


    class UserController extends Controller
{
    public function index()
    {
    	$users= ['Wesley', 'Matheus', 'Guilherme'];

    	return view('user.index', compact('users'));
    }

    public function show($id)
    {
    	return view('user.show', compact('id'));
    }

    public function create()
    {
    	return view('user.create');
    }

    public function post(Request $request) 
    {
    	//VALIDAR OS CAMPOS DO FORMULÁRIO
    	$this->validate($request, [
    		'name' => ['required'],
    		//seja required(obrigatorio) e do tipo email
    		'email' => ['required', 'email'],
    		'password' => ['required', 'confirmed', 'min:4']
    	]);
    }
}


