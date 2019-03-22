<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //
    public function index()
    {
      return view('employee');
    }

    //store
    public function store(Request $request)
    {
      $employee = new Employee();

      $employee->name = $request->input('name');
      $employee->email = $request->input('email');
      $employee->post = $request->input('post');

      if ($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/employee/', $filename);
        $employee->image = $filename;
      }else{
        return $request;
        $employee->image = '';
      }
      $employee->save();

      return view('employee')->with('employee', $employee);
    }

    //display
    public function display()
    {
      $employees = Employee::all();
      return view('welcome')->with('employees', $employees);
    }

    //edit
    public function edit($id)
    {
      $employees = Employee::find($id);
      return view('employeeupdateform')->with('employees', $employees);
    }

    public function update(Request $request, $id)
    {
      $employees = Employee::find($id);

      $employees->name = $request->input('name');
      $employees->email = $request->input('email');
      $employees->post = $request->input('post');

      if ($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/employee/', $filename);
        $employees->image = $filename;
      }else{
        return $request;
        $employee->image = '';
      }
      $employees->save();

      return redirect('/employeepage')->with('employees', $employees);
    }

    // delete
    public function delete($id)
    {
      $employees = Employee::find($id);
      $employees->delete();
      return redirect('/employeepage')->with('employees', $employees);
    }


}
