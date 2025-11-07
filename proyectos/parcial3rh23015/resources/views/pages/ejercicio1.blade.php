@extends('layouts.layout')

@section('content')

@if ($errors->any())
    <h3>Por favor corrija los siguientes errores</h3>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form class ="form form-control" action="{{ route('ejercicio1') }}" method="get">

<label for="">capital</label>
<input type="text" name="capital">
<label for="">Intereses y mensaul</label>
<input type="text" name="tasa">
<label for="">Cuotas y plazos</label>
<input type="text" name="cuota">
<button class="btn btn-primary" type="submit">Enviar</button>
</form>
@endsection
