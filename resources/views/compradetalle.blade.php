<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <td>CODIGO</td>
            <td>CODIGO COMPRA</td>
            <td>CODIGO PRODUCTO</td>
            <td>DESCRIPCION</td>
            <td>PRECIO</td>
            <td>CANTIDAD</td>
            <td>TOTAL</td>
        </tr>
        @foreach($dato3 as $value)
        <tr>
            <td>{{$value->idcompradetalle}}</td>
            <td>{{$value->idcompra}}</td>
            <td>{{$value->idproducto}}</td>
            <td>{{$value->descripcion}}</td>
            <td>{{$value->precio}}</td>
            <td>{{$value->cant}}</td>
            <td>{{$value->total}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>