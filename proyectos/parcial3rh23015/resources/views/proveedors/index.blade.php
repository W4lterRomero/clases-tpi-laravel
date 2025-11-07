@extends('layouts.layout')

@section('title', 'Listado de Proveedors')

@section('header', 'Listado de Proveedors')

@section('content')
<a href="{{ route('proveedors.create') }}" class="btn btn-primary">Crear Nuevo</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
                    <th>Nombre_proveedor</th>
                    <th>Direccion</th>
                    <th>Codigo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proveedors as $proveedor)
        <tr>
            <td>{{ $proveedor->id }}</td>
                    <td>{{ $proveedor->nombre_proveedor }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->codigo }}</td>
            <td>
                <a href="{{ route('proveedors.show', $proveedor->id) }}" class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('proveedors.edit', $proveedor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('proveedors.destroy', $proveedor->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
