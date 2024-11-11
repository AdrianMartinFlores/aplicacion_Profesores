<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateCourseModel;

class CreateCourse extends Controller
{
    public function index(){
        $create = CreateCourseModel::all();
        return view('create.index', compact('create'));
    }

    public function creation(Request $request){
        CreateCourseModel::create($request->all());

        return redirect() -> route('courses.index');
    }
    public function edit(Edit $edit){
        return view('courses.edit', compact('edit'));
    }
}
