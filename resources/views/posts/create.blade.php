@extends('layouts.layouts')
@section('title','Simple Board')
@section('content')

    <h1>New Post</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/posts" method='POST' enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <textarea class="form-control" name="content" value="{{old('content')}}"></textarea>
        </div>
        <div class="form-group">
            <input type="file" id="image" name="image" value="{{old('image')}}">
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>

    <a href="../posts">Back</a>

@endsection