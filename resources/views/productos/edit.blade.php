@extends('layouts.plantilla')
@section('title', 'Productos')
@section('content')

<link rel="stylesheet" href="/css/estilos.css">
<div class="container">

    <div class="titulo-padre">
        <h4 class="titulo">Editando producto: {{$producto->nombre}}</h4>
        <div class="linea-horizontal"></div>

    </div>

    <form action="/productos/{{$producto->id}}" method="post" class="formulario">
    
        {{-- Especificamos el método --}}
        <input type="hidden" name="_method" value="PUT">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" value="{{$producto->nombre}}"></td>
                {{ csrf_field()}}
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" id="">

                        {{-- Recorremos todas las categorias y marcamos "selected"
                        la que está definida en el producto  --}}
                        @foreach ($categorias as $categoria)

                        @if ($categoria->id == $producto->categoria_id)
                        
                        <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>

                        @else
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                        @endif

                        @endforeach

                    </select>
                    {{ csrf_field() }}
                </td>
            </tr>
            <tr>
                <td>Almacen</td>
                <td>
                    <select name="almacen_id" id="">

                        {{-- Lo mismo que para las categorias --}}
                        @foreach ($almacenes as $almacen)

                            @if ($almacen->id == $producto->almacen_id)

                                <option value="{{$almacen->id}}" selected>{{$almacen->nombre}}</option>
                                
                            @else
                            
                                <option value="{{$almacen->id}}">{{$almacen->nombre}}</option>
                            

                            @endif
                        

                        @endforeach

                    </select>

                    {{ csrf_field() }}
                </td>
            </tr>
        </table>

        <input type="submit" value="Enviar" class="btn-crear">

    </form>

</div>

@endsection