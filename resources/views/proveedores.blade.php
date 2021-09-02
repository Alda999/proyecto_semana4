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
            <td>RUC</td>
            <td>IDDOCU</td>
            <td>NUMERO</td>
            <td>CELULAR</td>
            <td>DIRECCION</td>
                       
        </tr>
        @foreach($dato5 as $value)
        <tr>
            <td>{{$value->idproveedores}}</td>
            <td>{{$value->ruc}}</td>
            <td>{{$value->iddocu}}</td>
            <td>{{$value->numero}}</td>
            <td>{{$value->celular}}</td>
            <td>{{$value->direccion}}</td>
           
        </tr>
        @endforeach
    </table>
</body>
</html>