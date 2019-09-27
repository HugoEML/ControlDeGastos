@extends('layouts.layout')

@section('title', 'Registro de Categoría de Gastos')

@section('NavTitle', 'Registro de Categoría de Gastos')

@section('contenido')
    <h2>Mes de septiembre
        <small class="text-muted">Registro de Nueva Categoria de Gasto</small>
    </h2>
    @include('layouts.validation-errors')
    <div class="container">
        <form class="form-group" method="POST" action="{{ route('categoryexpense.store') }}"> 
            @include('categoryexpense._form', ['btnText' => 'Guardar'])            
        </form>
    </div>
@endsection