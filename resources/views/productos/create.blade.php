
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Producto</h1>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre" required><br>
            <textarea name="descripcion" placeholder="Descripción"></textarea><br>
            <input type="number" name="precio" step="0.01" placeholder="Precio" required><br>
            <input type="number" name="stock" placeholder="Stock" required><br>
            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
