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
            <td>SERIE</td>
            <td>NUM CORRE</td>
            <td>FECH EMI</td>
            <td>IGV TOTAL</td>
            <td>SUB TOTAL</td>
            <td>TOTAL</td>
           
                       
        </tr>
        @foreach($dato7 as $value)
        <tr>
            <td>{{$value->idventa}}</td>
            <td>{{$value->serie}}</td>
            <td>{{$value->num_corre}}</td>
            <td>{{$value->fec_emi}}</td>
            <td>{{$value->igv_total}}</td>
            <td>{{$value->sub_total}}</td>
            <td>{{$value->total}}</td>
            
           
        </tr>
        @endforeach
    </table>
</body>
</html>