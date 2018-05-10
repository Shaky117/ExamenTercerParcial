@extends('layouts.default')

@section('content')
    <h1>Pedidos de usuario</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Numero Pedido</th>
                <th>Nombre Platillos</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($elementosPedidos as $elementosPedidos)
                <tr>
                    
                </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection