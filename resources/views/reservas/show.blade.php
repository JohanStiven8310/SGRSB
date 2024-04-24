@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles de la Reserva</div>

                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $reserva->id }}</p>
                        <p><strong>Cliente:</strong> {{ $reserva->cliente->nombre }}</p>
                        <p><strong>Servicio:</strong> {{ $reserva->servicio->nombre }}</p>
                        <p><strong>Fecha de Reserva:</strong> {{ $reserva->fecha_reserva->format('d/m/Y') }}</p>
                        <p><strong>Hora de Reserva:</strong> {{ $reserva->hora_reserva }}</p>
                        <p><strong>Comentarios:</strong> {{ $reserva->comentarios ?: 'N/A' }}</p>
                        <a href="{{ route('reservas.index') }}" class="btn btn-primary">Volver al Listado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
