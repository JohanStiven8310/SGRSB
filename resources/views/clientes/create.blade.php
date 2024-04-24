<!-- resources/views/clientes/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Crear Cliente</div>

                    <div class="card-body">
                        <form action="{{ route('clientes.store') }}" method="POST">
                            @csrf

                            <!-- Aquí van los campos de creación del cliente -->
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <!-- Agrega más campos según los datos del cliente -->

                            <button type="submit" class="btn btn-primary">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
