@extends('layouts.app')

@section('content')
<div class="container perfil">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ $coach->name}} You are logged in!
                    <a href="{{ route('coach.editar') }}" class="btn btn-primary">Editar Perfil</a>
                    <a href="{{ route('coach.logro') }}" class="btn btn-primary">Editar Logros</a>
                </div>
            </div>
        </div>
    </div>
    <div class="perfil-grid">
        <div class="pref text-center">
            <div class="card ">
                <img src="../{{$coach->league->img}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">{{ $coach->name}} <strong> {{ ' "'.$coach->nombre_de_invocador.'" '}} </strong> {{$coach->apellido}}</h4>
                    <div class="ec-stars-wrapper">
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
                    <br><br>                        
                    <p class="card-text">quorum commodo duis veniam illum doctrina singulis possumus amet varias</p>
                </div>
            </div>
        </div>
        <div class="card clases">
                <div class="card-header">Clases Pendientes</div>

                <div class="card-body">
                  
                </div>
        </div>
        <div class="card reseñas">
                <div class="card-header">Utimas Reseñas</div>

                <div class="card-body">
                  
                </div>
        </div>
        <div class="card ingresos">
                <div class="card-header">Ingresos</div>

                <div class="card-body">
                   <table class="table">
                       <tr>
                           <th>Ingresos Acumulado</th>
                           <td>$ 300 mxn</td>
                       </tr>
                       <tr>
                           <th>Ingresos Ultimo Mes</th>
                           <td>$ 600 mxn</td>
                       </tr>
                       <tr>
                           <th>Ingresos Totales</th>
                           <td>$ 1200 mxn</td>
                       </tr>
                       
                   </table>
                </div>
        </div>
    </div>
        
    
</div>
@endsection
