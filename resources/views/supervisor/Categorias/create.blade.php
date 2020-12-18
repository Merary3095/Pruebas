@extends('layout.general')

@section('breadcumb')
<li class="breadcrumb-item" ><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="#">Categorias</a></li>
<li class="breadcrumb-item active" aria-current="page">Crear</li>
@endsection

@section('menu')
<li class="dropdown-item"><a href="/tablero">Dashboard</a></li>
<li class="dropdown-item active "><a class="text-warning" href="/Categorias">CATEGORIAS</a></li>
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

<form>
    <div class="form-group">
      <label for="formGroupExampleInput">Nombre de la sección:</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Descripcion de la sección: </label>
      <textarea class="form-control" rows="5"></textarea>
    </div>
  
    <button type="button" class="btn btn-primary">Enviar</button>
</form>

  

@endsection