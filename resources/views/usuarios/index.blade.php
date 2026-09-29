@extends('layouts.plantilla')
@section('title', 'Usuarios')

@section('content')
  <h2 class="text-2xl font-bold mb-4">Gestión de Usuarios</h2>

  <table class="min-w-full bg-white border">
    <thead>
      <tr class="bg-gray-100 uppercase text-sm text-left">
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">Nombre</th>
        <th class="px-4 py-2">Email</th>
        <th class="px-4 py-2">Registro</th>
      </tr>
    </thead>
    <tbody>
      @foreach($usuarios as $usuario)
        <tr class="border-b hover:bg-gray-50">
          <td class="px-4 py-2">{{ $usuario->id }}</td>
          <td class="px-4 py-2">{{ $usuario->name }}</td>
          <td class="px-4 py-2">{{ $usuario->email }}</td>
          <td class="px-4 py-2">{{ $usuario->created_at->format('d/m/Y H:i') }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
