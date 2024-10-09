{{-- Heredar la plantilla 1 --}}
@extends('layouts.plantilla1')

{{-- Dinamismo en el nombre de los titulos de las vistas --}}
@section('titulo', 'Componentes')


{{-- Dividir el contenido por secciones --}}
@section('contenido')

{{-- sintaxis para usar el componente -usando los valores del card.blade--}}
<x-Card encabezado="Componente " titulo="Dinamico" textoBoton="Enviar">
    Soy el texto del primer Componente
</x-Card>
<x-Card encabezado="Componente 2" titulo="Dinamico 2" textoBoton="No Enviar">
    Soy el texto del segundo Componente
</x-Card>

<x-Alert tipo="success">Verde </x-Alert>
<x-Alert tipo="primary">Azul </x-Alert>
<x-Alert tipo="danger">Rojo </x-Alert>




@endsection
