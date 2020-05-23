@extends('layouts.layouts')
@section('title','Simple Board')
@section('content')

<h1>Editing Post</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="./" method="POST">
        {{ csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" value="{{old('title') == '' ? $post->title : old('title')}}">
        <input type="text" name="content" value="{{old('content') == '' ? $post->content : old('content')}}">
        <input type="submit">
    </form>

@endsection