@extends('layouts.plantilla')
@section('title', 'Crear Persona')

@section('content')
  <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl">
    <h2 class="text-2xl font-bold mb-4">Registrar Nueva Persona</h2>

    <form action="{{ route('personas.store') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label for="nombre" class="block text-sm font-medium mb-1">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
               class="w-full border rounded px-3 py-2">
        @error('nombre') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <div class="mb-4">
        <label for="email" class="block text-sm font-medium mb-1">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required
               class="w-full border rounded px-3 py-2">
        @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <div class="mb-6">
        <label class="block text-sm font-medium mb-1">Intereses</label>
        <div class="grid grid-cols-2 gap-2">
          @foreach($intereses as $interes)
            <label>
              <input type="checkbox" name="intereses[]" value="{{ $interes->id }}">
              {{ $interes->nombre }}
            </label>
          @endforeach
        </div>
      </div>

      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Guardar Persona
      </button>
    </form>
  </div>
@endsection
