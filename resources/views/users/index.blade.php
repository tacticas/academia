@extends('layouts.app')


@section('content')
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
                <h1>{{$title}}</h1>
        </div>
        <hr>
        <div class="col-12">
            @foreach ($users as $user)
            <li>{{$user->name}}</li>
            <a class="btn btn-primary" href="{{ route('user.show', $user)}}">ver detalles</a>
            <a class="btn btn-warning" href="{{ route('user.edit', $user)}}">Editar</a>
            <form action="{{ route('user.destroy', $user) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" value="Eliminar">
            </form>
            @endforeach
        </div>
    </div>
</div>
       
@stop