@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-body bg-light">      
                <div class="row"> 
                    <div class="col-md-4 col-sm-4">
                        @if($post->cover_image !== "noimage.jpg")
                        <img style="width:100%"  src="/storage/cover_images/{{$post->cover_image}}">
                        @else
                        <p class="text-center font-italic">No image to preview</p>
                        @endif
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>        
            </div>   
        @endforeach
        {{-- {{$posts->links()}} linka stranice npr ako stranica ima vise od 10 postova koji se prikazuju dodaje novu str --}}
        {{$posts->links()}}
    @else
        <p>Nema postova</p>
    @endif
@endsection


