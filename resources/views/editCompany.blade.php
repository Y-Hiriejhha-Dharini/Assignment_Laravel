@extends('master')
@section('content')
    <section>
        <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center p-2">Edit Company</h1>
                <form action="/editcompany" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <a href="/company" class="btn btn-primary">Back</a>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{$data->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telephone</label>
                        <input type="text" name="phone" class="form-control" id="phone" value="{{$data->telephone}}">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo" value="{{$data->logo_path}}">
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo" value="{{$data->photo_path}}">
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" name="website" class="form-control" id="website" value="{{$data->website}}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address" value="{{$data->address}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection