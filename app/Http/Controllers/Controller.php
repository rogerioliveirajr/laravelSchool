<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
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
}
