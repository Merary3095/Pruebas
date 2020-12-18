@extends('layout.general')

@section('breadcumb')
<li class="breadcrumb-item" ><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="/Usuarios">Usuarios</a></li>
<li class="breadcrumb-item active" aria-current="page">Mostrar</li>
@endsection

@section('menu')
<li class="dropdown-item"><a href="/tablero">Dashboard</a></li>
<li class="dropdown-item"><a href="/Categorias">Categorias</a></li>
<li class="dropdown-item"><a class="text-success" href="/Usuarios">Usuarios</a></li>
<li class="dropdown-item"><a href="charts.html">Charts</a></li>
<li class="dropdown-item"><a href="elements.html">UI Elements</a></li>
<li><a href="panels.html">Panels</a></li>
<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
    <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
    </a>
    <ul class="children collapse" id="sub-item-1">
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
        </a></li>
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
        </a></li>
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
        </a></li>
    </ul>
</li>
<li><a href="login.html">Logout</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col">Nombre del usuario:</div>
    <div class="col bg-light">{{$usuario->nombre}}</div>
    <div class="col"></div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col">Apellido paterno:</div>
    <div class="col bg-light">{{$usuario->a_paterno}}</div>
    <div class="col"></div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col">Apellido materno:</div>
    <div class="col bg-light">{{$usuario->a_materno}}</div>
    <div class="col"></div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col">Imagen:</div>
    <div class="col bg-light"><img src="/fotos/{{$usuario->imagen}}" alt="" class="img-thumnail"></div>
    <div class="col"></div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col">Tipo de usuario:</div>
    <div class="col bg-light">{{$usuario->rol}}</div>
    <div class="col"></div>
    <div class="col"></div>
</div>
@endsection 