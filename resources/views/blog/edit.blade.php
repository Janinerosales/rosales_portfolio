@extends('blog.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
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

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="Title">
                    @error('title')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" value="{{ $blog->image}}" class="form-control">
                    @error('image')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="content">Content:</label>
                    <input type="text" name="content" value="{{ $blog->content }}" class="form-control" placeholder="Content">
                    @error('content')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" name="date" value="{{ $blog->date }}" class="form-control">
                    @error('date')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-left">
                <a class="btn btn-danger btn-back" href="{{ route('blogs.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</body>
</html>
@endsection
