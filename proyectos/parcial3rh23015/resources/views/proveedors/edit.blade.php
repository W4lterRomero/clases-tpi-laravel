@extends('layouts.layout')

@section('title', 'Editar Proveedor')

@section('header', 'Editar Proveedor')

@section('content')
<form action="{{ route('proveedors.update', $proveedor->id) }}" method="POST">
    @csrf
    @method('PUT')

            <div class="mb-3">
                <label for="nombre_proveedor" class="form-label">Nombre_proveedor</label>
                <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" value="{{ $proveedor->nombre_proveedor }}" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $proveedor->direccion }}" required>
            </div>
            <div class="mb-3">
                <label for="codigo" class="form-label">Codigo</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $proveedor->codigo }}" required>
            </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="{{ route('proveedors.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
