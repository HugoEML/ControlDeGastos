@extends('layouts.layout')

@section('title', 'Registro de Categoría de Gastos')

@section('NavTitle', 'Registro de Categoría de Gastos')

@section('contenido')
    <h2>Mes de septiembre
        <small class="text-muted">Registro de Nueva Categoria de Gasto</small>
    </h2>
    <div class="container">
        <form class="form-group" method="POST" action="/categoriagastos">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" placeholder="Nombre">
                </div>
            </div>    
            <div class="form-group row">
                <label for="date" class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-10">
                    <input name="date" type="date" class="form-control" placeholder="dd/mm/aaaa">
                </div>
            </div> 
            <button type="submit" class="btn btn-outline-primary">Guardar</button> 
        </form>
    </div>
@endsection