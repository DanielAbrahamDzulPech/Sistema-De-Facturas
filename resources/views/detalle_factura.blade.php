<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $Factura->Proveedor}}</title>
</head>
<body>
    <div>
        <h1>Proveedor:</h1>
        <h2>{{ $Factura->Proveedor}}</h2>
        <h1>Monto:</h1>
        <h2>{{ $Factura->Monto}}</h2>
        <a href="/{{$Factura->Factura}}" class="btn btn-outline-success" >Ver Factura</a>
        <a href="/dashboard" class="btn btn-outline-success" >Volver</a>
    </div>
</body>
</html>