@extends('layouts.layout')

@section('title', 'Gastos')

@section('NavTitle', 'Control de Gastos')

@section('contenido')
    <h2>Mes de septiembre
        <small class="text-muted">Detalles de Gastos</small>
    </h2>
    <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="/gastos/create">Nuevo Gasto</a></button>
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
            @foreach ($expenses as $expense)
            <tr>
            <th scope="row">{{$expense->id}}</th>
                <td>{{$expense->description}}</td>
                <td>{{$expense->amount}}</td>
                <td>{{$expense->category}}</td>
                <td>{{$expense->date}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection