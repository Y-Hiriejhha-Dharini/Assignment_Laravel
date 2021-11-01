<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();
        $companies = DB::table('companies')
        ->join('employees','companies.id','=','employees.company')
        ->get();
        return view('employee',['data'=>$data,$companies]);

    }

    public function create(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name' => 'required',
        ]);

        //$profileName = time().'-'.$request->name.'.'.$request->profile_photo->extension();

        $data = new Employee();
        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->company = $request->input('company');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        //$data->profile_photo = $request->profile_photo->move(public_path('public/application/storage/'),$profileName);
        $data->profile_photo = $request->file('profile_photo')->store('storage/application/'.'public');
        $data->save();
        $request->Session()->flash('status','Company Saved Successfully');
        return redirect('/employee');
        
    }

    public function edit($id)
    {
        $data = Employee::find($id);
        return view('editEmployee',['data'=>$data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name' => 'required',
         ]);
         
            //$profileName = time().'-'.$request->name.'.'.$request->profile_photo->extension();

            $data = Employee::find($request->id);
            $data->first_name = $request->first_name;
            $data->last_name = $request->last_name;
            $data->company = $request->company;
            $data->email = $request->email;
            $data->phone = $request->phone;
            //$data->profile_photo = $request->profile_photo->move(public_path('public/application/storage/'),$profileName);
            //$data->profile_photo = $request->file('profile_photo')->move('storage/application/public');
            //$old_file = $data->profile_photo;
            //$new_file = $request->profile_photo;
            //$data->profile_photo = $request->file('profile_photo')->move($old_file, $new_file);
            $data->save();
            return redirect('/employee');
    }

    public function destroy($id)
    {
        Employee::find($id)->delete();
        Session()->flash('status','Company Deleted Successfully');
        return redirect('/employee');
    }
}
