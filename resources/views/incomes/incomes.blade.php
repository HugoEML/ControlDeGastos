@extends('layouts.layout')

@section('title', 'Ingresos')

@section('NavTitle', 'Control de Ingresos')

@section('contenido')
    <h2>Mes de septiembre
        <small class="text-muted">Detalles de Ingresos</small>
    </h2>
    <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="/ingresos/create">Nuevo Ingreso</a></button>
    <div class="container"><br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Monto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($incomes as $income)
            <tr>
                <th scope="row">{{$income->id}}</th>
                <td>{{$income->description}}</td>
                <td>{{$income->amount}}</td>
                <td>{{$income->category}}</td>
                <td>{{$income->date}}</td>
            </tr>    
            @endforeach            
        </tbody>
    </table>
    </div>
@endsection