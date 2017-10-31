<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
    	return view('form.index');
    }
    public function store(Request $request){

    	$validatedData = $request->validate([
        'name' => 'required|max:6',
        'lname' => 'required',
        'age' => 'digits:2',
    	]);
    	$user = new Form;
    	$user->firstname = $request->name;
    	$user->lastname = $request->lname;
    	$user->age = $request->age;
    	$user->save();

    	return 'Success';
    }
}
