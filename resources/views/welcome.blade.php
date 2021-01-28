@extends('layouts.app')
@unless(Auth::check())
<div class="container-fluid">
    <div class="jumbotron text-center bg-success">
        <h1 class="">SupEdSIS</h1>
        <p>Support Education School information management</p>
        <div><a href="{{route('login')}}">
        <button class="btn btn-primary">login</button></a>
        <a href="{{route('register')}}">
        <button class="btn btn-secondary">Register</button></a>
        </div>
    </div>
</div>
@endunless
