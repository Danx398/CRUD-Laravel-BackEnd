@extends('layouts/main')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <h2 class="text-center mt-1 mb-2">El producto a eliminar es:</h2>

            <div class="card text-bg-primary mb-3 mt-5">
                <div class="card-header">Información del producto</div>
                <div class="card-body">
                    <ul>
                        <li>Nombre: {{ $items->nombre }}</li>
                        <li>Marca: {{ $items->marca }}</li>
                        <li>Modelo: {{$items->modelo}}</li>
                        <li>Ram: {{$items->ram}}</li>
                        <li>Procesador: {{$items->procesador}}</li>
                        <li>Disco Duro: {{$items->discoDuro}}</li>
                        <li>descripcion: {{$items->descripcion}}</li>
                        <li><img src="{{$items->url}}" alt="" style="width: 60%"></li>
                    </ul>
                    <row>
                        <div class="col-12">
                            <form action="{{ route('destroy',$items->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-3 container-fluid">Eliminar Permanentemente</button>
                            </form>
                            <div class="col-12">
                                <a href="/" class="btn btn-info mt-1 container-fluid">Volver</a>
                            </div>
                        </div>
                    </row>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection