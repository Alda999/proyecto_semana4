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
            <td>MARCA</td>
            <td>MODELO</td>
            <td>DESCRIPCION</td>
            <td>STOCK</td>
            <td>PRECIO</td>
           
        </tr>
        @foreach($dato4 as $value)
        <tr>
            <td>{{$value->idproducto}}</td>
            <td>{{$value->marca}}</td>
            <td>{{$value->modelo}}</td>
            <td>{{$value->descripcion}}</td>
            <td>{{$value->stock}}</td>
            <td>{{$value->precio}}</td>
           
        </tr>
        @endforeach
    </table>
</body>
</html>