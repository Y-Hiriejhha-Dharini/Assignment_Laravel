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
    <h1 class="text-center p-2">Company List</h1>
    <a href="createcompany" class="btn btn-primary create-btn">Create a Company</a>
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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Website</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($data as $company)
                    <th>{{$company->id}}</th>
                    <td>{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{$company->telephone}}</td>
                    <!--<td><img src="{{asset($company->logo_path)}}" width="70px" height="70px" alt=""></td>
                    <td><img src="{{asset($company->photo_path)}}" width="70px" height="70px" alt=""></td>-->
                    <td><img width="70px" height="70px" src="{{$company->logo_path}}"></td>
                    <td><img width="70px" height="70px" src="{{$company['photo_path']}}"></td>
                    <td>{{$company->website}}</td>
                    <td>{{$company->address}}</td>
                    <td><a href="/editcompany/{{$company->id}}" class="btn btn-success">Edit</a>
                        <a href="company/{{$company->id}}" class="btn btn-danger">Delete</a>
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