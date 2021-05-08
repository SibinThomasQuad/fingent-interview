<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Marks;
class Student_C extends Controller
{
    public static function create(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:50',
        'age' => 'required',
        'gender' => 'required',
        'teacher' => 'required'
    	]);
        $student = new Student;
        $student->name = $request->name;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->reporting_teacher=$request->teacher;
        $student->save(); 
        return redirect('/student/view');
    }
    public function student_view(Request $request)
    {
        $student=Student::paginate(20);
    	return view('student.list',array('students'=>$student));
    }
    public static function enter(Request $request)
    {
    	return view('student.register');
    }
    public static function edit($id)
    {
    	$student=Student::find($id);
    	return view('student.register',array('student'=>$student));
    }
    public static function update(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:50',
        'age' => 'required',
        'teacher' => 'required'
    	]);
    	$student = Student::find($request->ids);
    	$student->name = $request->name;
        $student->age = $request->age;
        $student->reporting_teacher=$request->teacher;
        $student->save(); 
        return redirect('/student/view');

    }
    public static function delete_user($id)
    {
        $marks=Marks::where('student',$id)->delete();
        $student = Student::find($id);
	$student->delete();
	return redirect('/student/view');
	
    }
}
