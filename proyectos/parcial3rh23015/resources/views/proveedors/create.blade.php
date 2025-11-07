@extends('layouts.layout')

@section('title', 'Crear Proveedor')

@section('header', 'Crear Proveedor')

@section('content')
<form action="{{ route('proveedors.store') }}" method="POST">
    @csrf
    
            <div class="mb-3">
                <label for="nombre_proveedor" class="form-label">Nombre_proveedor</label>
                <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="mb-3">
                <label for="codigo" class="form-label">Codigo</label>
                <input type="text" class="form-control" id="codigo" name="codigo" required>
            </div>

    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('proveedors.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection