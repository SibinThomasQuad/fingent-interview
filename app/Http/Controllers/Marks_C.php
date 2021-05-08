<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marks;
use App\Models\Student;
class Marks_C extends Controller
{
    public static function mark_enter(Request $request)
    {
    	$students=Student::select('id','name')->get();
    	return view('mark.register',array('students'=>$students));
    }
    public static function create(Request $request)
    {
         $validated = $request->validate([
        'student' => 'required',
        'maths' => 'required',
        'science' => 'required',
        'history' => 'required',
        'term' => 'required'
    	]);
    	 $mark = new Marks;
         $mark->student = $request->student;
         $mark->maths = $request->maths;
         $mark->science = $request->science;
         $mark->history = $request->history;
         $mark->terms = $request->term;
         $mark->total=$request->maths + $request->science + $request->history;
         $mark->save(); 
         return redirect('/marks/view');
    }
    public static function marks(Request $request)
    {
    	$marks=Marks::paginate(20);
    	return view('mark.list',array('marks'=>$marks));
    	//return $marks->student_mark->name;
    }
    public static function delete_mark($id)
    {
    	$student = Marks::find($id);
	$student->delete();
	return redirect('/marks/view');
    }
    public static function edit($id)
    {
        $students=Student::select('id','name')->get();
    	$marks=Marks::find($id);
    	return view('mark.register',array('mark'=>$marks,'students'=>$students));
    }
    public static function update(Request $request)
    {
         $validated = $request->validate([
        'student' => 'required',
        'maths' => 'required',
        'science' => 'required',
        'history' => 'required',
        ]);
    	 $mark=Marks::find($request->ids);
         $mark->maths = $request->maths;
         $mark->science = $request->science;
         $mark->history = $request->history;
         $mark->total=$request->maths + $request->science + $request->history;
         $mark->save();
         return redirect('/marks/view');
    }
}
