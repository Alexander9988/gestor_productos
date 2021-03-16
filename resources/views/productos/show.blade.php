@extends('layouts.plantilla')
@section('title', 'Productos')
@section('content')

<div class="container">

    <div class="titulo-padre">
        <h4 class="titulo">Producto: {{$producto->nombre}}</h4>
        <div class="linea-horizontal"></div>
    </div>

    <table class="tabla_resultados">
        <tr class="cabecera">
            <td>Nombre</td>
            <td>ID</td>
            <td>Almacen</td>
            <td>Categoria</td>
        </tr>    
            <tr>
                <td>
                    {{$producto->nombre}}
                </td>
                <td>
                    {{$producto->id}}
                </td>
                <td>
                    @foreach ($producto->almacens as $almacen)
                        {{$almacen->id}} -
                        {{$almacen->nombre}}
                    @endforeach
                    
                </td>
                <td>
                    {{$producto->categoria_id}} -
                    {{$producto->categoria->nombre}}
                </td>
                
            </tr>
        </table>

        <div class="centrado">

            <form action="{{$producto->id}}" method="post">
    
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <input type="submit" value="Eliminar producto">
                
            </form>
            
            <form action="{{$producto->id}}/edit" method="get">
                    {{ csrf_field() }}
                <input type="submit" value="Editar producto">
                
            </form>

        </div>
</div>

@endsection