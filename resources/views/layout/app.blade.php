<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href={{ course(resource/css/estilo.css)}} rel="stylesheet">
    <title>Fruteria</title>
</head>
<body>

<nav id="nav" class="nav1">
    <div class="contenedor-nav">
        <div class="logo">
            <img src="../iconos/logomt.PNG" alt="facebook">
        </div>
        <div class="enlaces" id="enlaces">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="{{route('landing.index')}}" id="inicio" class="btn-header">Inicio</a>
            <li class="nav-item active"><a href="{{route('landing.acercade')}}" id="acercade" class="btn-header">Acerca de</a>
            <li class="nav-item active"><a href="{{route('landing.contacto')}}" id="contacto" class="btn-header">Contacto</a>
            <li class="nav-item active"><a href="{{route('landing.domicilios')}}" id="domicilios" class="btn-header">Domicilios</a>
            </ul>
        </div>
        <div class="icono" id="open">
            <span>&#9776;</span>
        </div>
    </div>
</nav>
@yield('content')
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
