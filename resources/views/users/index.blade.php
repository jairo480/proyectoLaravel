@extends('layout.master')
<div class="container nt-5">
  <div class="row justify-content-center">
    
      <div class="col-md-10">
          <h2 class="text-center mb-5">usuarios de administrador</h2>
          <a class="btn btn-success mb-5" href="{{url('/form')}}">agregar nuevo usuario</a>
          @if (session('usuarioEliminado'))
          <div class="alert alert-success">
          {{session ('usuarioEliminado')}}
          </div>   
          @endif
          <table class="table table-bordered table-striped table-dark text-center">
            <thead>
              <tr>
                <th>id</th>
                <th>nombre</th>
                <th>Equipo</th>
                <th>nacionalidad</th>
                <th>acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->nombre}}</td>
                <td>{{$user->equipo}}</td>
                <td>{{$user->nacionalidad}}</td>
                <td>
                  <a href="{{route('editform',$user->id)}}" class="btn btn-primary">
                    editar
                  <i class="fas fa-pencil-alt"></i>
                  </a>
                  <form action="{{route('delete', $user->id)}}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                      
                      eliminar
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      {{$users->links()}}
      </div>
    </div>
</div>