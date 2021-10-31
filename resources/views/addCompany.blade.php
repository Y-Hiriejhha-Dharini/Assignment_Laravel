@extends('master')
@section('content')
    <section>
        <div class="container">
        <div class="row">
            <h1 class="text-center p-2">Create New Company</h1>
            <div class="col">
                <form action="createcompany" method="POST" enctype="multipart/form-data">
                @csrf
                    <a href="/company" class="btn btn-primary">Back</a>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                        <span>@error('name'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                        <span>@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telephone</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                        <span>@error('phone'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="logo_path" class="form-label">Logo</label>
                        <input type="file" name="logo_path" class="form-control" id="logo_path">
                        <span>@error('logo_path'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="photo_path" class="form-label">Photo</label>
                        <input type="file" name="photo_path" class="form-control" id="photo_path">
                        <span>@error('photo_path'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" name="website" class="form-control" id="website">
                        <span>@error('website'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address">
                        <span>@error('address'){{$message}}@enderror</span>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection