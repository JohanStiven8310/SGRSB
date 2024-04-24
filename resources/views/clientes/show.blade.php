<!-- resources/views/clientes/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detalles del Cliente</div>

                    <div class="card-body">
                        <h5>Nombre: {{ $cliente->nombre }}</h5>
                        <!-- Agrega más detalles del cliente según tus necesidades -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

