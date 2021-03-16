@extends('layouts.plantilla')
@section('title', 'Almacenes')
@section('content')

<div class="container">
    <h1 class="titulo wow fadeInDown" data-wow-delay="0.3s">Galería de almacenes</h1>
    <table class="tabla_resultados wow fadeInDown" data-wow-delay="0.5s">
        <tr class="cabecera">
            <td>Nombre</td>
            <td>ID</td>
        </tr>
        @foreach ($almacenes as $almacen)
    
            <tr>
                <td>
                    {{$almacen->nombre}}
                </td>
                <td>
                    {{$almacen->id}}
                </td>
            </tr>
    
        @endforeach
        </table>
</div>


@endsection