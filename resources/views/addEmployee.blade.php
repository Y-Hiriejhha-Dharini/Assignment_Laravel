@extends('master')
@section('content')
    <section>
        <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="text-center p-2">Create New Employee</h1>
            <div class="col">
                <form action="/createemployee" method="POST" enctype="multipart/form-data">
                @csrf
                    <a href="/employee" class="btn btn-primary">Back</a>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="first_name">
                        <span>@error('first_name'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="last_name">
                        <span>@error('last_name'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company</label>
                        <input type="text" name="company" class="form-control" id="company">
                        <span>@error('company'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                        <span>@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                        <span>@error('phone'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="profile_photo" class="form-label">Profile Photo</label>
                        <input type="file" name="profile_photo" class="form-control" id="profile_photo">
                        <span>@error('profile_photo'){{$message}}@enderror</span>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection