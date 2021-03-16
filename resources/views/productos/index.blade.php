@extends('layouts.plantilla')
@section('title', 'Productos')
@section('content')

    <div class="container">
        <h1 class="titulo wow fadeInDown" data-wow-delay="0.3s">Galería de productos</h1>
        <table class="tabla_resultados wow fadeInDown" data-wow-delay="0.5s">
            <tr class="cabecera">
                <td>Nombre</td>
                <td>ID</td>
                <td>Almacen</td>
                <td>Categoria</td>
                <td>Opciones</td>
            </tr>
            @foreach ($productos as $producto)

                <tr>
                    <td>
                       <a href="/productos/ {{ $producto->id }}"> {{ $producto->nombre }}</a>
                    </td>
                    <td>
                        {{ $producto->id }}
                    </td>
                    <td>
                        @foreach ($producto->almacens as $almacen)
                            {{ $almacen->id }} -
                            {{ $almacen->nombre }}
                        @endforeach
                    </td>
                    <td>
                        {{ $producto->categoria->id }} -
                        {{ $producto->categoria->nombre }}
                    </td>
                    <td class="centrado opciones">
                        <form action="productos/{{ $producto->id }}" method="post">

                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <input type="submit" value="Eliminar">

                        </form>

                        <form action="productos/{{ $producto->id }}/edit" method="get">
                            {{ csrf_field() }}
                            <input type="submit" value="Editar">

                        </form>
                    </td>

                </tr>

            @endforeach
        </table>

        <div class="separa50"></div>
        <a href="/productos/create" class="crear hvr-shutter-in-horizontal wow fadeInDown" data-wow-delay="1s">Crear nuevo producto</a>
    </div>


@endsection
