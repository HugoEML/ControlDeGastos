@extends('layouts.layout')

@section('title', 'Registro de Categoría de Ingresos')

@section('NavTitle', 'Registro de Categoría de Ingresos')

@section('contenido')
    <h2>Mes de septiembre
        <small class="text-muted">Registro de Nueva Categoria de Ingreso</small>
    </h2>
    @include('layouts.validation-errors')
    <div class="container">
        <form class="form-group" method="POST" action="{{ route('categoryincome.update', $category) }}">
            @method('PATCH')
            @include('categoryincome._form', ['btnText' => 'Actualizar']) 
        </form>
    </div>
@endsection