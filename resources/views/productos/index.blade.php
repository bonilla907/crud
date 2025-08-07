@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">PRODUCTOS REGISTRADOS</h1>

        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">Nombre</th>
                    <th class="border px-4 py-2">Precio</th>
                    <th class="border px-4 py-2">Stock</th>
                    <th class="border px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr class="text-center">
                        <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                        <td class="border px-4 py-2">${{ $producto->precio }}</td>
                        <td class="border px-4 py-2">{{ $producto->stock }}</td>
                        <td class="border px-4 py-2 space-x-2">
                            <a href="{{ route('productos.edit', $producto) }}">
                                <button class=" text-black font-bold py-1 px-3 rounded">
                                    Editar
                                </button>
                            </a>

                            <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white font-bold py-1 px-3 rounded"
                                        onclick="return confirm('¿Estás seguro de eliminar este producto?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-6">
            <a href="{{ route('productos.create') }}">
                <button type="submit" class=" text-black font-bold py-2 px-4 rounded">
                    Crear nuevo producto
                </button>
            </a>
        </div>
    </div>
@endsection
