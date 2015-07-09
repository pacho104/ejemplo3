<div class="form-group">
    {!! Form::label('email_label', 'E-Mail Address') !!}
    {!!Form::email('email', null,['class'=>'form-control','placeholder'=>'email@ejemplo.com'])!!}
</div>
<div class="form-group">
    {!!Form::label('password_label', 'Contraseña') !!}
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'contraseña'])!!}
</div>
<div class="form-group">
    {!!Form::label('first_name_label', 'Primer Nombre') !!}
    {!!Form::text('first_name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
</div>
<div class="form-group">
    {!!Form::label('last_name_label', 'Apellido') !!}
    {!!Form::text('last_name',null,['class'=>'form-control','placeholder'=>'Ingrese el apellido'])!!}
</div>
<div class="form-group">
    {!!Form::label('type_label', 'Tipo de Usuario') !!}
    {!!Form::select('type',[''=>'Seleccione
    tipo','user'=>'Usuario','admin'=>'Administrador'],null,['class'=>'form-control'])!!}
</div>
<div class="g-recaptcha" data-sitekey="6Lc0fAkTAAAAAGclv31XAuJ8xe0ySZ854s0dwpkH" data-theme="light"></div>

<div class="form-group">

</div>