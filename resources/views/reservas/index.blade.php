@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Reservas</h1>
        <a href="{{ route('reservas.create') }}" class="btn btn-primary mb-3">Crear Nueva Reserva</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Servicio</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Comentarios</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->cliente->nombre }}</td>
                    <td>{{ $reserva->servicio->nombre }}</td>
                    <td>{{ $reserva->fecha_reserva }}</td>
                    <td>{{ $reserva->hora_reserva }}</td>
                    <td>{{ $reserva->comentarios }}</td>
                    <td>
                        <a href="{{ route('reservas.show', $reserva->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-success">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
