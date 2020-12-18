@extends('layout.general')

@section('content')
@if (session('error'))
<div>
    {{ session('error') }}
</div>
<br>
@endif
<form action="/agregar" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre del usuario:</label>
        <input id="nombre" type="text" name="nombre" class="form-control">
    </div>
    <div class="form-group">
        <label for="a_paterno">Apellido paterno del usuario:</label>
        <input id="a_paterno" type="text" name="a_paterno" class="form-control">
    </div>
    <div class="form-group">
        <label for="a_materno">Apellido materno del usuario:</label>
        <input id="a_materno" type="text" name="a_materno" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Correo electronico:</label>
        <input id="email" type="text" name="email" class="form-control">
        <span id="error_email"></span>
    </div>
    <div class="form-group">
        <label for="imagen">Imagen del usuario:</label>
        <input type="file" name="imagen" id="imagen">
    </div>
    <div class="form-group">
        <label for="password">Password del usuario:</label>
        <input id="password" type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password2">Repita el password:</label>
        <input id="password2" type="password" name="password2" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Registrarse">
</form>

<script>
$(document).ready(function(){
$('#email').blur(function(){
    var error_email = '';
    var email = $('#email').val();
    var _token = $('input[name="_token"]').val();

    if($.trim(email).length > 0)
    {
        $.ajax({
            url:"{{ route('register.verificar')}}",
            method:"POST",
            data:{email:email, _token:_token},
            success:function(result)
            {
                if(result == 'unique')
                {
                    $('#error_email').html('<label class="bg-success text-whte"><i class="fas fa-check"></i> Correo Libre</label>');
                    $('#email').removeClass('has-error');
                    $('#register').attr('disable', false);
                }
                else
                {
                    $('#error_email').html('<label class="bg-danger text-whte"><i class="fas fa-check"></i> Correo En Uso</label>');
                    $('#email').addClass('has-error');
                    $('#register').attr('disable', 'disable');
                }
            }
        })
    }
});
});
</script>
@endsection