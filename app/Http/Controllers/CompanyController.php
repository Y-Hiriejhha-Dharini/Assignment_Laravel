<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\File;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $role = Auth::user();//->role;
        if($role->role=='admin'){
            $data = Company::all();
            return view('company',['data'=>$data]);  
        }else
        {
            return redirect('profile/'.$role->id);
        }

    }

    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required',
            'address'=> 'required',
            'logo_path'=>'mimes:jpg,png,jpeg|max:39.0625',
            'photo_path'=>'mimes:jpg,png,jpeg',
        ]);

        //$path = file('logo')->store('public/application/storage');
        //$logoName = time().'-'.$request->name.'.'.$request->logo->extension();
        //$photoName = time().'-'.$request->name.'.'.$request->photo->extension();

        
        $data = new Company();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->telephone = $request->input('phone');
        //$data->logo = $request->logo->move(public_path('public/application/storage/'),$logoName);
        //$data->photo = $request->photo->move(public_path('public/application/storage/'),$photoName);
        $data->logo_path = $request->file('logo_path')->store('public');
        $data->photo_path = $request->file('photo_path')->store('public');
        $data->website = $request->input('website');
        $data->address = $request->input('address');
        $data->save();
        $request->Session()->flash('status','Company Saved Successfully');
        return redirect('/company');
        
    }

    public function edit($id)
    {
        $data = Company::find($id);
        return view('editcompany',['data'=>$data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required',
            'address'=> 'required',
         ]);

            //$logoName = time().'-'.$request->name.'.'.$request->logo->extension(); 
            //$photoName = time().'-'.$request->name.'.'.$request->photo->extension();
            
            $data = Company::find($request->id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->telephone = $request->phone;
            //$data->logo = $request->logo->move(public_path('public/application/storage/'),$logoName);
            //$data->photo = $request->photo->move(public_path('public/application/storage/'),$photoName);
            //$data->logo_path = $request->move($data->logo_path,$request->logo_path);
            //$data->photo_path = $request->move($data->photo_path,$request->photo_path);
            $old_file = $data->logo_path;
            $new_file = $request->logo_path;
            $data->logo_path = $request->file('logo_path')->move('storage/application/'.$old_file, $new_file);
            $old_file2 = $data->photo_path;
            $new_file2 = $request->photo_path;
            $data->photo_path = $request->file('photo_path')->move('storage/application/'.$old_file2, $new_file2);
            //$data->photo_path = $request->file('photo_path')->move('storage/application/public');
            $data->website = $request->website;
            $data->address = $request->address;
            $data->save();
            return redirect('/company');
    }

    public function destroy($id)
    {
        Company::find($id)->delete();
        Session()->flash('status','Company Deleted Successfully');
        return redirect('/company');
    }
}
