@extends('layouts.app')


@section('content')
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
                <h1>Ecuentra a tu Coach Ideal</h1>
        </div>
        <hr>
        <div class="row padding">
            @foreach ($coachs as $coach)
                <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                         <img src="{{$coach->league->img}}" alt="" class="card-img-top">
                                <div class="card-body">
                                <h4 class="card-title">{{ $coach->name}} <strong> {{ ' "'.$coach->nombre_de_invocador.'" '}} </strong> {{$coach->apellido}}</h4>
                                <div class="ec-stars-wrapper">
                                    <span class="up ec-stars-wrapper"  data-value="1" title="Votar con 1 estrellas">&#9733;</span>
                                    <span class="up" data-value="2" title="Votar con 2 estrellas">&#9733;</span>
                                    <span class="up" href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</span>
                                    <span class="up" data-value="4" title="Votar con 4 estrellas">&#9733;</span>
                                    <span  class="down" data-value="5" title="Votar con 5 estrellas">&#9733;</span>><span class="badge badge-light">4.5</span>
                                    <br>
                                    <span class="badge badge-pill badge-secondary">{{ $coach->role->name }}</span>
                                </div>
                                <br><br>
                                <p class="card-text">{{ substr( $coach->about, 0, 60).' . . .'}}</p>
                                <a href="{{route('coach.show',$coach)}}" class="btn btn-outline-secondary">Ver Perfil</a>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
       
@stop