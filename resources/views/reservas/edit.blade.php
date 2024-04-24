@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Reserva</h1>
        <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Aquí van los campos del formulario para editar la reserva -->
        </form>
    </div>
@endsection
