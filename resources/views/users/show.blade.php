@extends('layouts.app')


@section('content')
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
                <h1>{{$title}}</h1>
        </div>
        <hr>
        <div class="col-12">
    
            <li>{{$user->id}}</li>
            <li>{{$user->name}}</li>
            <a href="{{ route('users')}}">Regresar</a>
           
        </div>
    </div>
</div>
       
@stop