@extends('layouts.plantilla1')

@section('titulo','Componentes Blade')

@section('contenido')

    <x-Card encabezado="componente1" titulo="titulo 1" textoBoton="Guardar">
    contenido de tarjeta 1
    </x-Card>

    <x-Card encabezado="componente2" titulo="titulo 2" textoBoton="No Guardar">
        contenido de tarjeta 2
        </x-Card>
    
@endsection