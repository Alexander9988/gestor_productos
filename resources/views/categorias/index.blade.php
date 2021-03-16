@extends('layouts.plantilla')
@section('title', 'Categorías')
@section('content')

<div class="container">
    <h1 class="titulo wow fadeInDown" data-wow-delay="0.3s">Galería de categorias</h1>
    <table class="tabla_resultados wow fadeInDown" data-wow-delay="0.5s">
        <tr class="cabecera">
            <td>Nombre</td>
            <td>ID</td>
        </tr>
        @foreach ($categorias as $categoria)
    
            <tr>
                <td>
                    {{$categoria->nombre}}
                </td>
                <td>
                    {{$categoria->id}}
                </td>
            </tr>
    
        @endforeach
        </table>
</div>


@endsection