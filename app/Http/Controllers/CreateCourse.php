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
}