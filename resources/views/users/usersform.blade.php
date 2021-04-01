@extends('layout.master')
<div class="container mt-5">
    <div class=" row justify-content-center">
        <div class="col-md-7 mt-5">
            @if (session('usuarioguardado'))
                <div class="alert alert-succes"></div>
                    {{session('usuarioguardado')}}
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
            </div>

                
            @endif

            
            <div class="card">
                <form action="{{route('save')}}" method="post">
                @csrf
                    <div class="card-header text-center">Agregar usuario</div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Nombre</label>
                                <input  type="text" name="nombre" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Equipo</label>
                                <input type="text" name="equipo" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">nacionalidad</label>
                                <input type="text" name="nacionalidad" class="form-control col-md-9">
                            </div>
                            <div class="row form-group mt-5">
<button type="submit" class="btn btn-success col-md-9 offset-2 btn-block" >
                                    Guardar
                                </button>
                                <a class="btn btn-success mb-5" href="{{url('/index')}}"></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
