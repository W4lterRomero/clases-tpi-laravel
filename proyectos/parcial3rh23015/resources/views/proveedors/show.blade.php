@extends('layouts.layout')

@section('title', 'Detalle de Proveedor')

@section('header', 'Detalle de Proveedor')

@section('content')
<p><strong>ID:</strong> {{ $proveedor->id }}</p>

<p><strong>Nombre_proveedor:</strong> {{ $proveedor->nombre_proveedor }}</p>
<p><strong>Direccion:</strong> {{ $proveedor->direccion }}</p>
<p><strong>Codigo:</strong> {{ $proveedor->codigo }}</p>

<a href="{{ route('proveedors.edit', $proveedor->id) }}" class="btn btn-warning">Editar</a>
<a href="{{ route('proveedors.index') }}" class="btn btn-secondary">Volver</a>
@endsection
