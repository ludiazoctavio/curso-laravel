<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
		//*dd($request->input('title', 'Hola Laravel'));
    	return view('test', [
    		'title' => $request->input('title', 'Hola Laravel')
    	]);
    }
}
