@extends('layouts.plantilla')
@section('title', 'Productos')
@section('content')

<div class="container">

    <form action="/productos" method="post" class="formulario">
    
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre"></td>
                {{ csrf_field()}}
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" id="">

                        @foreach ($categorias as $categoria)
                        
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>

                        @endforeach

                    </select>
                    {{ csrf_field() }}
                </td>
            </tr>
            <tr>
                <td>Almacen</td>
                <td>
                    <select name="almacen_id" id="">

                        @foreach ($almacenes as $almacen)
                        
                        <option value="{{$almacen->id}}">{{$almacen->nombre}}</option>

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