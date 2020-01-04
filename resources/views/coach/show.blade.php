@extends('layouts.app')


@section('content')
<div class="container">
   
        <div class="col-12 text-center mt-4">
                <h1 class="card-title">{{ $coach->name}} <strong> {{ ' "'.$coach->nombre_de_invocador.'" '}} </strong> {{$coach->apellido}}</h1>
        </div>
        <hr>
    <div class="grid">
       
        <div class="info text-center">
                <div class="card ">
                    <img src="../{{$coach->league->img}}" alt="" class="card-img-top">
                    <div class="card-body">
                    <div class="ec-stars-wrapper mb-3">
                        @for ($i = 1; $i <= 5 ; $i++)
                            @if ( $star_prom >= $i)
                               <span class="review-star-u">&#9733;</span>
                            @else
                              <span class="review-star-d">&#9733;</span>
                            @endif
                        @endfor
                        <span class="badge badge-light">{{$star_prom}}</span>
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
                <div class="reviews-b">
                    <h3>{{$best->stud->name}}</h3>
                    <span>{{$best->created_at}}</span><br>
                    @for ($i = 1; $i <= 5 ; $i++)
                        @if ( $best->star >= $i)
                        <span class="review-star-u">&#9733;</span>
                        @else
                        <span class="review-star-d">&#9733;</span>
                        @endif
                    @endfor
                    <span class="cal">({{$best->star}})</span>
                    <p>{{$best->text}}</p>
            </div>

            @foreach ($reviews as $item)
            <div class="reviews">
                    <h3>{{$item->stud->name}}</h3>
                    <span>{{$item->created_at}}</span><br>
                    @for ($i = 1; $i <= 5 ; $i++)
                        @if ( $item->star >= $i)
                        <span class="review-star-u">&#9733;</span>
                        @else
                        <span class="review-star-d">&#9733;</span>
                        @endif
                    @endfor
                    <span class="cal">({{$item->star}})</span>
                    <p>{{$item->text}}</p>
                </div>
            @endforeach
      
        
      
        

    </div>
</div>
</div>
       
@stop