<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{



     public function index()
{
     $data = Employee::all();

 return view('employees.employee',['datas'=>$data]);
}       
     public function index1()
{
     //$data=Employee::find(3);
      $data=Employee::where('position','assistant')->first();
     //dd($data);
 return view('employees.employee_detail',['datas'=>$data]);
}
public function index2()
{
     //$data=Employee::where('position', 'manager')->get();
   // $data=Employee::orderBy('id', 'desc')->get();
     $data=(Employee::pluck('position'));

 return view('employees.employee_by_position',['datas'=>$data]);
}

     public function create()
     {
     $employee = Employee::create([
          'name' => 'New may',
          'email' => 'may@gmail.com',
          'position' => 'assistant'
     ]);
     return "created successfully";
    // dd($employee);
     }

     public function update()
    {
     $data=Employee::where('position', 'assistant')->first();
     $data->update(['email' => '123@gmail.com']);


        return "updated successfully!";
     }
      public function delete()
    {
   Employee::where('position', 'student')->delete();
     

        return "deleted successfully!";
     }

     public function createEmployee()
     {
     return view('employees.create_employee');
     }

    public function store(Request $request)
  {
//       Employee::create([
//           'name' => $request->name,
//           'email' => $request->email,
//           'position' => $request->position,
//       ]);

//       return redirect('/employee_create');
  //}
  // Validate form data
    $validated = $request->validate([
    'name' => 'required|string|min:3|max:255',
    'email' => 'required|email:rfc,dns|max:255',
    'position' => 'required|string|min:3|max:255',
]);


    // Save to database
    Employee::create($validated);

    // Redirect back to create page
    return redirect('/employee_create')->with('success', 'new employee created successfully!');
}
     public function employee_list()
{
    $employees = Employee::all();
    return view('Employees.employee_list', compact('employees'));
}
     public function edit($id)
{
    $emp = Employee::findOrFail($id);
    return view('employees.edit', compact('emp'));
}
 public function update_employee(Request $request, $id)
  {
      $emp = Employee::findOrFail($id);

      $emp->update([
          'name' => $request->name,
          'email' => $request->email,
          'position' => $request->position,
      ]);

      return redirect('/employee_list');
  }
     public function destroy($id)
{
    $emp = Employee::findOrFail($id);
    $emp->delete();

    return redirect('/employee_list');
}
}