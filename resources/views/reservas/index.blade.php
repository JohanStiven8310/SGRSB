@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listado de Reservas</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Servicio</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservas as $reserva)
                                    <tr>
                                        <td>{{ $reserva->id }}</td>
                                        <td>{{ $reserva->cliente->nombre }}</td>
                                        <td>{{ $reserva->servicio->nombre }}</td>
                                        <td>{{ $reserva->fecha_reserva->format('d/m/Y') }}</td>
                                        <td>{{ $reserva->hora_reserva }}</td>
                                        <td>
                                            <!-- Botones de acción -->
                                            <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                            <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta reserva?')">Eliminar</button>
                                            </form>
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
