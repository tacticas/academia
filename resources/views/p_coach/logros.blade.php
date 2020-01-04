@extends('layouts.app')
@section('content')
<div class="container padding">
    <div class="row">
        <div class="col-sm-12">
            <h1>Mis Logros</h1>
        
        <hr>
        </div>
    </div>
       <div class="row">
           <div class="col-sm-6">
            
                @if ($errors->any())
                <div class="alert alert-danger">
                    <h4>Revisa tus datos:</h4>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul> 
                </div>
            @endif
        <form method="POST" action="{{url("/logros")}}">
            {{ csrf_field() }}
           
            <div class="form-group">
                <label for="">*Logro:</label>
                <textarea class="form-control" rows="4" cols="50" type="text" name="logro" id="" value="{{old('logro')}}"></textarea>
            </div>
             
            <div class="row">
                    <div class="col-sm-6"><button class="btn btn-primary btn-block" type="submit" >Guardar</button></div>
                    <div class="col-sm-6"><a href="{{ route('home') }}" class="btn btn-secondary btn-block">Regresar</a></div>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Mis Logros
                </div>
                <div class="card-body">
                        <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Logro</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($logros as $logro)
                                          <tr>
                                          <td>{{$logro->achievement}}</td>
                                            <td>
                                                <form action="{{ route('logro.destroy', $logro) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                </div>
            </div>
                
               
        </div>
            


         
        </div>       
        

 
</div>

@endsection