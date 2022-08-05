<?php

namespace App\Http\Controllers;

use App\Models\laravelcrud1;
use Illuminate\Http\Request;

class Laravelcrud1Controller extends Controller
{

    public function index()
    {
        $student=laravelcrud1::all();
        return view('students.index')->with('student', $student);
    }

    
    public function create()
    {
        return view('students.create');
    }

    
    public function store(Request $request)
    {
        $input= $request->all();
        laravelcrud1::create($input);
        return redirect('home')->with('flash_message', 'student added');
    }

   
    public function show($id)
    {
        $input=laravelcrud1::find($id);
        return view('students.show')->with('shihab',$input);
    }

    public function edit($id)
    {
       $study = laravelcrud1::find($id);
       return view('students.edit')->with('data', $study);
    }

    
    public function update(Request $request,$id)
    {
       $student = laravelcrud1::find($id);
       $input = $request->all();
       $student->update($input);
       return redirect('home')->with('flash_message', 'student updates');
    }

    
    public function destroy($id)
    {
        laravelcrud1 :: destroy($id);
        return redirect('home')->with('flash_message', '$Student deleted!');
    }
}
