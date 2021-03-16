@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')

    <div class="container home">

        <p class="guia wow fadeInDown" data-wow-delay="0.3s">*Haga click en el <b>producto</b> que desee para obtener más información</p>
        
        <div class="row">

            <div class="col">

                <h4 class="wow fadeInDown" data-wow-delay="0.3s">Productos</h4>

                <table class="tabla_resultados wow fadeInDown" data-wow-delay="0.6s">
                    <tr class="cabecera">
                        <td>Nombre</td>
                    </tr>
                    @foreach ($productos as $producto)
                
                        <tr>
                            <td>
                                <a href="/productos/{{$producto->id}}">{{$producto->nombre}}</a>
                            </td>                            
                        </tr>
                
                    @endforeach
                    </table>
            </div>

            <div class="col">
                <h4 class="wow fadeInDown" data-wow-delay="0.3s">Almacenes</h4>

                <table class="tabla_resultados wow fadeInDown" data-wow-delay="0.8s">
                    <tr class="cabecera">
                        <td>Nombre</td>
                    </tr>
                    @foreach ($almacenes as $almacen)
                
                        <tr>
                            <td>
                               {{$almacen->nombre}}
                            </td>                          
                        </tr>
                
                    @endforeach
                    </table>
            </div>
            
            <div class="col">
                <h4 class="wow fadeInDown" data-wow-delay="0.3s">Categorias</h4>

                <table class="tabla_resultados wow fadeInDown" data-wow-delay="1s">
                    <tr class="cabecera">
                        <td>Nombre</td>
                    </tr>
                    @foreach ($categorias as $categoria)
                
                        <tr>
                            <td>
                               {{$categoria->nombre}}
                            </td>                          
                        </tr>
                
                    @endforeach
                    </table>
            </div>

        </div>

    </div>
@endsection