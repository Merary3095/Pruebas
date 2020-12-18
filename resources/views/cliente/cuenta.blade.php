@extends('layout.general')
@section('breadcumb')
<li class="active">Cuenta</li>    
@endsection
@section('menu')
    <li class="active">
        <a href="#"><em class="fa fa-dashboard">&nbsp;</em>Sucesos</a>
    </li>
    <li><a href="#"><em class="fa fa-calendar">&nbsp;</em>Propuestas</a></li>
    <li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em>Preguntas</a></li>
    <li><a href="#"><em class="fa fa-toggle-off">&nbsp;</em>Estado de cuenta</a></li>
    <li><a href="#"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

@endsection
@section('content')
    aqui ponemos el HTML del contenido....
@endsection