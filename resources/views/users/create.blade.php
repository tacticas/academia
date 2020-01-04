@extends('layouts.app')

@section('content')
<div class="container-fluid padding">
    <div class="row welcome ">
        <div class="col-12">
            <h1>Registrar Usuario</h1>
        </div>
        <hr>
        <div class="col-sm-12 col-md-6 ">
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
            <form method="POST" action="{{url("usuarios/")}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">*Correo Electrónico:</label>
                <input class="form-control" type="mail" name="correo_electronico" id="email" value="{{old('email')}}" >
                </div>
                <div class="form-group">
                    <label for="">*Contraseña:</label>
                    <input class="form-control"  type="password" name="password" id="">
                </div>
              
                <div class="form-group">
                    <label for="">*Nombre:</label>
                    <input class="form-control" type="text" name="nombre" id="" value="{{old('nombre')}}">
                </div>
                <div class="form-group">
                    <label for="">Segundo Nombre:</label>
                    <input class="form-control" type="text" name="name_2" placeholder="Opcional" id="" value="{{old('name_2')}}" >
                </div>
                <div class="form-group">
                    <label for="">*Primer Apellido:</label>
                    <input class="form-control" type="text" name="primer_apellido" id="" value="{{old('primer_apellido')}}" >
                </div>
                <div class="form-group">
                    <label for="">Segundo Apellido:</label>
                    <input class="form-control" type="text" name="ap2" placeholder="Opcional" id="" value="{{old('ap2')}}" >
                </div>
            </div>
            <div class="col-sm-12 col-md-6 ">
                <div class="form-group">
                    <label for="">*Nombre de Invocador:</label>
                    <input class="form-control" type="text" name="nombre_de_invocador" id="" value="{{old('nombre_de_invocador')}}" >
                </div>
                <div class="form-group">
                    <label for="">*Rol:</label>
                    <select class="form-control" name="role_id" id="" value="{{old('role_id')}}" >
                        @foreach ($roles as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">*Liga:</label>
                    <select class="form-control" name="league_id" id="" value="{{old('league_id')}} " >
                        @foreach ($leagues as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">*Servidor:</label>
                    <select class="form-control" name="server_id" id="" value="{{old('server_id')}}" >
                        @foreach ($servers as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
              
                <div class="row">
                    <div class="col-sm-6"><input class="btn btn-primary btn-block" type="submit" value="Editar"></div>
                    <div class="col-sm-6"><a href="{{ url()->previous() }}" class="btn btn-secondary btn-block">Regresar</a></div>
                </div>
                   
                
                
            </form>
           
            
        </div>
    </div>
</div>

@stop