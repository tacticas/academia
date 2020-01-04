@extends('layouts.app')


@section('content')
<div class="container">
   
        <div class="col-12 text-center mt-4">
                <h1 class="card-title">{{ $coach->name}} <strong> {{ ' "'.$coach->nombre_de_invocador.'" '}} </strong> {{$coach->apellido}}</h1>
        </div>
        <hr>
    <div class="grid">
        <!--<div class="img-profile">
           <img class="img-fluid border-r" src="{{$coach->img}}" alt="">
        </div>-->
        <div class="info text-center">
                <div class="card ">
                    <img src="../{{$coach->league->img}}" alt="" class="card-img-top">
                    <div class="card-body">
                    <div class="ec-stars-wrapper mb-3">
                        @for ($i = 1; $i <= 5 ; $i++)
                            
                              <span class="review-star-d">&#9733;</span>
                        @endfor
                        <span class="badge badge-light">S/N</span>
                        <br>
                        <span class="badge badge-pill badge-secondary">{{ $coach->role->name }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="logros">
            <div class="card">
                <div class="card-body">
                    <h4>Sobre Mí</h4>
                    <p>{{$coach->about}}</p>
                </div>
            </div>    
            <br>
            <div class="card">
                <div class="card-body">
                    <h4>Logros</h4>
                    <ul>
                        @foreach ($logros as $item)
                            <li>{{$item->achievement}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>    
        </div>
        <div class="precio text-center">
            <div class="card">
                <div class="card-body">
                    <h4>Precio por Hora</h4>
                    <h3>${{$coach->price}} USD</h3>
                    <a href="{{route('agendar',$coach)}}" class="btn btn-primary">Contratar</a>
                </div>
            </div>    
        </div>
       
            <h3>Este Coach aun no tiene reseñas, sé su primer Estudiante</h3>
    
        
      
        

    </div>
</div>
</div>
       
@stop