@extends('layouts.layout')

@section('content')

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
