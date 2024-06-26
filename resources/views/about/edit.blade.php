@extends('about.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    
<body>

<div class="container mt-4">

    <div class="row">
        <div class="col-lg-12">
            <h2 class="float-left">Edit</h2>
        </div>
    </div>

    @if(session('status'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    </div>
    @endif

    <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ $about->name }}" class="form-control" placeholder="Name">
                    @error('name')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="text" name="birthday" value="{{ $about->birthday }}" class="form-control" placeholder="Birthday">
                    @error('birthday')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="zipcode">Zipcode:</label>
                    <input type="number" name="zipcode" value="{{ $about->zipcode }}" class="form-control" placeholder="Zipcode">
                    @error('zipcode')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="profile">Profile:</label>
                    <input type="text" name="profile" value="{{ $about->profile }}" class="form-control" placeholder="Profile">
                    @error('profile')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" value="{{ $about->address }}" class="form-control" placeholder="Address">
                    @error('address')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ $about->email }}" class="form-control" placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="number" name="phone_number" value="{{ $about->phone }}" class="form-control" placeholder="Phone">
                    @error('phone')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-left">
                <a class="btn btn-danger btn-back" href="{{ route('abouts.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

</body>
</html>
@endsection