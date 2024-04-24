<!-- resources/views/clientes/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Editar Cliente</div>

                    <div class="card-body">
                        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Aquí van los campos de edición del cliente -->
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $cliente->nombre }}">
                            </div>
                            <!-- Agrega más campos según los datos del cliente -->

                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
