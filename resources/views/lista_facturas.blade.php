<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Proveedor</th>
            <th scope="col">Cliente</th>
            <th scope="col">Monto</th>
            <th scope="col">Accíones</th>
        </tr>
        </thead>
        <tbody>
            @foreach($facturas as $Facturas)
        <tr>
            <td class="table-info">{{ $Facturas->Proveedor}}</td>
            <td class="table-info">{{ $Facturas->Cliente}}</td>
            <td class="table-info">{{ $Facturas->Monto}}</td>
            <td class="table-info"><a href="/facturas" class="btn btn-outline-success" >Ver Factura</a>
                <a class="btn btn-outline-success" >Archivar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="dashboard" class="btn btn-outline-success" >Volver</a>
    </div>
</body>
</html>