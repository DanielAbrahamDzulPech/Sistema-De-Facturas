<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!<br>
                    Tu nombre es: {{Auth::user()->name}}
                    <button type="button" class="btn btn-outline-primary">Registro de Factura</button>
                    <a href="Facturas" class="btn btn-outline-info">Lista</a>
                </div>
            </div>
        </div>
    </div>

    <div class="dvi max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form class="formulario__Proveedor" action={{ route('Facturas.store')}} method="Post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h1 class="Formulario__Titulo">Proveedor</h1><br>
                <label for="exampleInputEmail1">Nombre Del Proveedor:</label>
                <input type="text" class="form-control" name="Proveedor" value="{{ old('Proveedor') }}"
                    placeholder="Ingrese Un Proveedor" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
                <h1 class="Formulario__Titulo">Cliente</h1><br>
                <label for="exampleInputEmail1">Nombre Del Cliente:</label>
                <input type="text" class="form-control" name="Cliente" value="{{ old('Cliente') }}"
                    placeholder="Ingrese Un Nombre" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
                <h1 class="Formulario__Titulo">Monto</h1><br>
                <label for="exampleInputEmail1">Cantidad Total:</label>
                <input type="text" class="form-control" name="Monto" value="{{ old('Monto') }}"
                    placeholder="Ingrese Cantidad" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <h1>Factura</h1>
                <label for="formFile" class="form-label">Factura Archivo:</label>
                <input class="form-control" type="file" id="formFile" name="Factura" value="{{ old('Factura')}}">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-laptop-medical"></i>Registrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</x-app-layout>
