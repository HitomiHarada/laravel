@if(session('message'))
    {{session('message')}}
@endif

{{$post->title}}
{{$post->content}}

<a href="./{{$post->id}}/edit">Edit</a>
