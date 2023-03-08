@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mt-1">CRUD Laravel 8 Computers</h2>
                <a href="create" class="btn btn-dark">Creaar Nueva Computadora</a>
                <hr>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Ram</th>
                            <th>Procesador</th>
                            <th>Disco Duro</th>
                            <th>Descripcion</th>
                            <th>imagen</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->marca}}</td>
                                <td>{{$item->modelo}}</td>
                                <td>{{$item->ram}}</td>
                                <td>{{$item->procesador}}</td>
                                <td>{{$item->discoDuro}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td><img src="{{$item->url}}" alt="" style="width: 100px"></td>
                                <td><a href="{{ route('edit',$item->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="{{route('show',$item->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
