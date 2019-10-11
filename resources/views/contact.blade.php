@extends('layouts.layout')

@section('title', 'Contacto')

@section('NavTitle')    

@section('contenido')
    <h1>Contacto</h1><br>
    <div class="container">
        @if($errors->any())
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul><br>
        @endif
    </div>
    <div class="container">

        </div>
        <div class="container">
            <form class="form-group" method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="E-mail..." value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="content" placeholder="Mensaje...">{{ old('content') }}</textarea>                
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
@endsection