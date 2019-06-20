@extends('layouts.app')
    @section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1> 
        {{-- moze i sa echo--}}
        <p>Laravel app from "Laravel from Scratch" YouTube series </p>
        <p><a class="btn btn-outline-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-sucess btn-lg" href="/register" role="buton">Register</a></p> 
    </div>
    <hr>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/?v=EU7PRmCpx-0&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-" allowfullscreen></iframe>
    </div>
   
    @endsection