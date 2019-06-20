@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-primary">Go back</a>
    <h1>{{$post->title}}</h1>
    @if($post->cover_image !== "noimage.jpg")
        <img style="width:100%"  src="/storage/cover_images/{{$post->cover_image}}">
    @else
        <p class="text-center font-italic">No image to preview</p>
     @endif
    <hr>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small> 
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post ->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif
@endsection