<h1>Creando comprobante</h1>

<h1>N°:{{$venta->numero}}

    <h1>Cliente: {{$venta->idclientes->razon_social}}</h1>

    <table>
        <tr><td>N°</td>
            <td>Producto</td>
            <td>Cantidad</td>
            <td>Precio</td>
        </tr>

        @foreach ($detvent as $item)

        <tr>
            <td>{{ $item->idventadeta}}</td>
            <td>{{ $item->idproductos->nombre}}</td>
            <td>{{ $item->prec_unit}}</td>
            <td>{{ $item->cantidad}}</td>

        </tr>
            
        @endforeach
        

    </table>