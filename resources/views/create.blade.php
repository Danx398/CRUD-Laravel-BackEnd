@extends('layouts/main')
@section('contenido')
    <div class="container">
        <h2 class="text-center mt-1">Crear Nueva Computadora</h2>
        <div class="row justify-content-center">
            <div class="col-5">
                <form action="store" method="POST" autocomplete="off">
                        @csrf
                        @method('POST')
                        <div class="form-floating mb-1">
                            <input autofocus type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="name@example.com" required="">
                            <label for="paterno">Nombre</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="marca" name="marca" placeholder="Password"
                                required="">
                            <label for="nombre">Marca</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Password"
                                required="">
                            <label for="nombre">Modelo</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="ram" name="ram" placeholder="Password"
                                required="">
                            <label for="nombre">RAM</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="procesador" name="procesador" placeholder="Password"
                                required="">
                            <label for="nombre">Procesador</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="discoDuro" name="discoDuro" placeholder="Password"
                                required="">
                            <label for="nombre">Disco Duro</label>
                        </div>
                        <div class="form-floating mb-1">
                            <textarea type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="nombre">Descripcion</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="url" name="url" placeholder="Password">
                            <label for="nombre">URL de imagen</label>
                        </div>
                        <div class="row justify-content-center mb-5">
                            <div class="col-3 ">
                                <a href="/" class="btn btn-info mt-4 container-fluid">Volver</a>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-dark mt-4 container-fluid">Guardar</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
