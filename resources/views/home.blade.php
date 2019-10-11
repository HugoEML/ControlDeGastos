@extends('layouts.layout')

@section('title', 'Inicio')

@section('NavTitle')

@section('contenido')
    <h1>Hola desde el home</h1>
    @auth
        <h2>Usuario: {{ auth()->user()->name }}</h2>    
    @endauth
@endsection