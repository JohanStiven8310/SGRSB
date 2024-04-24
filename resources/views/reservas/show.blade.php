@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Reserva</h1>
        <p><strong>Cliente:</strong> {{ $reserva->cliente->nombre }}</p>
        <p><strong>Servicio:</strong> {{ $reserva->servicio->nombre }}</p>
        <p><strong>Fecha:</strong> {{ $reserva->fecha_reserva }}</p>
        <p><strong>Hora:</strong> {{ $reserva->hora_reserva }}</p>
        <p><strong>Comentarios:</strong> {{ $reserva->comentarios }}</p>
    </div>
@endsection
