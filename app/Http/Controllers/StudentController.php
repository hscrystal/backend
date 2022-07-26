<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'studentid' => 'required|min:9',
            'username' => 'required',
            'lastname' => 'required',
            'roomnumber' => 'required'
        ]);

        $data_student = array(
            'studentid' => $request->input('studentid'),
            'username' => $request->input('username'),
            'lastname' => $request->input('lastname'),
            'roomnumber' => $request->input('roomnumber'),
        );

        return Student::create($data_student);
    }

    public function show($id)
    {
        return Student::find($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'studentid' => 'required|min:9',
            'username' => 'required',
            'lastname' => 'required',
            'roomnumber' => 'required'
        ]);

        $data_student = array(
            'studentid' => $request->input('studentid'),
            'username' => $request->input('username'),
            'lastname' => $request->input('lastname'),
            'roomnumber' => $request->input('roomnumber'),
        );

        $student = Student::find($id);
            $student->update($data_student);

            return $student;
    }

    public function destroy($id)
    {
        return Student::destroy($id);
    }
}
