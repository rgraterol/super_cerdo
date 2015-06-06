@extends('app')

@section('content')
<div id="wrapper">
    <div class="container-fluid no-padding" style="position: relative;                                                      ">
        <div id="header"></div>
        <div id="content">
            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 banda">
                    {{--Este es el formulario del final--}}
                    <div id="form-id-to-show" class="hide">
                        <div class="form-api">
                            <div class="row">
                                <div class="white-bg-red-border" style="padding-top: 5px">
                                    <small>
                                        {{--['data-remote'],--}}
                                        {!! Form::open(['data-remote'], array('route' => 'save/user'), array('class' => 'form-horizontal', 'remore' => true)) !!}
                                            {!! Form::label('name', 'Nombre:', ['class' => 'col-xs-3 control-label']) !!}
                                            <div class="col-xs-9">
                                                {!! Form::text('name',null, ['class'=>'form-control', 'required']) !!}
                                            </div>
                                            {!! Form::label('email', 'Email:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                            <div class="col-xs-9">
                                                {!! Form::text('email',null, ['class'=>'form-control', 'required', 'id' => 'email-id-form']) !!}
                                            </div>
                                            {!! Form::label('region', 'Region:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                            <div class="col-xs-9">
                                                {!! Form::text('region',null, ['class'=>'form-control', 'required']) !!}
                                            </div>
                                            {!! Form::label('ciudad', 'Ciudad:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                            <div class="col-xs-9">
                                                {!! Form::text('ciudad',null, ['class'=>'form-control', 'required']) !!}
                                            </div>
                                            {!! Form::label('birthday', 'Fecha nacimiento:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                            <div class="col-xs-9">
                                                {!! Form::text('birthday', null, ['class'=>'form-control', 'id' => 'datepicker']) !!}
                                            </div>
                                        <div class="col-xs-12 text-center">
                                            <small class="hide" id="show-email-permission" style="color: red;">
                                                El email ya esta participando. Gracias
                                            </small>
                                            <br>
                                            {!! Form::submit('Guardar', array('class' => 'btn btn-danger btn-xs')) !!}
                                        </div>
                                        .
                                        {!! Form::close() !!}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Fin de formulario--}}
                    <div class="fb_api">
                        <img src="img/conectate-on.png", class="btn", id="boton-fb-on" />
                    </div>
                </div>
                <div id="medallas"> <!-- sostiene las medallas de los amigos random y el avatar del user de fb  -->
                    <table style="width:100%" cellpadding="30" cellspacing="3"><!-- tabla que sostiene la grafica de las medallas -->
                        <tr>
                            <td style="padding-top:100px;"><div class="friend-frame">
                                    <div class="lf-friend">

                                    </div>
                                </div></td>
                            <td><div class="friend-frame"></div></td>
                            <td style="padding-top:100px;"><div class="friend-frame"></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div class="user-frame"></div></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="padding-bottom:100px;"><div class="friend-frame"></div></td>
                            <td><div class="friend-frame"></div></td>
                            <td style="padding-bottom:100px;"><div class="friend-frame"></div></td>
                        </tr>
                    </table>

                </div>

            </div>
        </div>
        <div id="footer">
            <div class="row footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 costillas">
                    <ul>
                        <li><img src="img/producto-1-normal.png" class="img-responsive inline-block"></li>
                        <li><img src="img/producto-2-normal.png" class="img-responsive inline-block"></li>
                        <li><img src="img/producto-3-normal.png" class="img-responsive inline-block"></li>
                        <li><img src="img/producto-4-normal.png" class="img-responsive inline-block"></li>
                        <li><img src="img/producto-5-normal.png" class="img-responsive inline-block"></li>
                        <li><img src="img/producto-6-normal.png" class="img-responsive inline-block"></li>
                        <li><img src="img/producto-7-normal.png" class="img-responsive inline-block"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection             