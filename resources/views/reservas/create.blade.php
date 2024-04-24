@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nueva Reserva</h1>
        <form action="{{ route('reservas.store') }}" method="POST">
            @csrf
            <!-- Aquí van los campos del formulario para crear una nueva reserva -->
        </form>
    </div>
@endsection
