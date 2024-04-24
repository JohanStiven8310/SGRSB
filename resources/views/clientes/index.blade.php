<!-- resources/views/clientes/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Clientes</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->apellido }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>
                                        <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-primary btn-sm">Ver</a>
                                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <!-- Agrega más acciones según tus necesidades -->
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
