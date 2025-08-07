
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Producto</h1>
        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="nombre" value="{{ $producto->nombre }}" required><br>
            <textarea name="descripcion">{{ $producto->descripcion }}</textarea><br>
            <input type="number" name="precio" step="0.01" value="{{ $producto->precio }}" required><br>
            <input type="number" name="stock" value="{{ $producto->stock }}" required><br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
@endsection
