@extends('educational.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Educational</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Educational Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('educationals.create') }}"> Create</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Grade Level</th>
            <th>School Year</th>
            <th>School Name</th>
            <th>Description</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($educationals as $educational)
        <tr>
            <td>{{ $educational->id }}</td>
            <td>{{ $educational->grade_level }}</td>
            <td>{{ $educational->school_year }}</td>
            <td>{{ $educational->school_name }}</td>
            <td>{{ $educational->description}}</td>
           
           
            <td>
                <form action="{{ route('educationals.destroy',$educational->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('educationals.edit',$educational->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>


</body>
</html>