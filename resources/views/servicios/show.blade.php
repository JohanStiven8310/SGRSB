@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles del Servicio</div>

                    <div class="card-body">
                        <p><strong>Nombre:</strong> {{ $servicio->nombre }}</p>
                        <p><strong>Descripción:</strong> {{ $servicio->descripcion }}</p>
                        <p><strong>Duración:</strong> {{ $servicio->duracion }}</p>
                        <p><strong>Precio:</strong> {{ $servicio->precio }}</p>
                        <!-- Agrega más detalles del servicio según sea necesario -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
