@extends('layouts.plantilla')
@section('title', 'Crear Interés')

@section('content')
  <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl">
    <h2 class="text-2xl font-bold mb-4">Registrar Nuevo Interés</h2>

    <form action="{{ route('intereses.store') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label for="nombre" class="block text-sm font-medium mb-1">Nombre del Interés</label>
        <input type="text" name="nombre" id="nombre"
               value="{{ old('nombre') }}" required
               class="w-full border rounded px-3 py-2">
        @error('nombre') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <div class="mb-6">
        <label for="descripcion" class="block text-sm font-medium mb-1">Descripción</label>
        <textarea name="descripcion" id="descripcion" rows="3"
                  class="w-full border rounded px-3 py-2">{{ old('descripcion') }}</textarea>
      </div>

      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Guardar Interés
      </button>
    </form>
  </div>
@endsection
