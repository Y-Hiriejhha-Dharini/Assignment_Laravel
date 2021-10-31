<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
@extends('master')
@section('content')
<section>
<h1 class="text-center p-2">Employee List</h1>
    <a href="createemployee" class="btn btn-primary create-btn">Create a Company</a>
    @if(Session::get('status'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <script>
        $(document).ready( function () {
        $('#datatable').DataTable();
        } );
    </script>
    <div class="container company_list">
        <div class="row">
            <div class="col">
            <table class="table table-striped" id="datatable">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Profile Photo</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($data as $employee)
                    <th scope="row">{{$employee->id}}</th>
                    <td>{{$employee->first_name}}</td>
                    <td>{{$employee->last_name}}</td>
                    <td>{{$employee->company}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->phone}}</td>
                    <td><img src="{{asset('$employee->profile_photo')}}" width="70px" height="70px" alt=""></td>-->
                    <!--<td><img width="70px" height="70px" src="{{$employee['profile_photo']}}"></td>-->
                    <td><a href="/editEmployee/{{$employee->id}}" class="btn btn-success">Edit</a>
                        <a href="employee/{{$employee->id}}" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection