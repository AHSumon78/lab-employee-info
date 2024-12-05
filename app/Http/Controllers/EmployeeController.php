<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
        return view("employees.create");
    }
    public function store(Request $request){
        $rules=[
           "name"=> "required|max:255",
           "email"=> "required|email:rfc,dns",
           "address"=>"required|max:255",
           "phone"=> "required|digits_between:11,15",
           "post"=> "required",
        ];
        $request->validate($rules);
        dd($request->all());
    }
}
