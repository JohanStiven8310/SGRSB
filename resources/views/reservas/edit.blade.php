@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Reserva</div>

                    <div class="card-body">
                        <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="cliente_id">Cliente</label>
                                <select name="cliente_id" id="cliente_id" class="form-control">
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}" {{ $cliente->id == $reserva->cliente_id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="servicio_id">Servicio</label>
                                <select name="servicio_id" id="servicio_id" class="form-control">
                                    @foreach ($servicios as $servicio)
                                        <option value="{{ $servicio->id }}" {{ $servicio->id == $reserva->servicio_id ? 'selected' : '' }}>{{ $servicio->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fecha_reserva">Fecha de Reserva</label>
                                <input type="date" name="fecha_reserva" id="fecha_reserva" class="form-control" value="{{ $reserva->fecha_reserva }}">
                            </div>
                            <div class="form-group">
                                <label for="hora_reserva">Hora de Reserva</label>
                                <input type="time" name="hora_reserva" id="hora_reserva" class="form-control" value="{{ $reserva->hora_reserva }}">
                            </div>
                            <div class="form-group">
                                <label for="comentarios">Comentarios</label>
                                <textarea name="comentarios" id="comentarios" class="form-control" rows="3">{{ $reserva->comentarios }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar Reserva</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
