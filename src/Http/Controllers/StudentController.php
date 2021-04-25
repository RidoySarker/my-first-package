<?php


namespace Ridoy\Student\Http\Controllers;


use Illuminate\Http\Request;
use Ridoy\Student\Http\Requests\StudentFromRequest;
use Ridoy\Student\Models\Student;

class StudentController
{
    public function index()
    {
        $student = Student::all();
        return view('student::student',['student' => $student]);
    }

    public function store(StudentFromRequest $request)
    {

        Student::create($request->validated());
        return redirect(route('student'));
    }
}
