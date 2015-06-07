@extends('app')

@section('content')
<div class="fb-root" id="fb-root">
<div id="wrapper">
    <div class="container-fluid no-padding" style="position: relative;                                                      ">
        <div id="header"></div>
        <div id="content">
            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 banda">
                    {{--Este es el formulario del final--}}
                    <div id="form-id-to-show" style="display: none">
                        <div class="form-api">
                            <div class="row">
                                <div class="white-bg-red-border">
                                    <div class="col-xs-12 text-center">
                                        <small class="hide" id="show-email-permission" style="color: red;">
                                            El email ya esta participando. Gracias.
                                        </small>
                                        <small class="hide" id="show-accept" style="color: red;">
                                            Debe aceptar los terminos para participar.
                                        </small>
                                        <br>

                                        {{--{!! Form::submit('Guardar', array('class' => 'btn btn-danger btn-xs')) !!}--}}
                                    </div>
                                    <small>
                                        {{--['data-remote'],--}}
                                        {!! Form::open(['data-remote'], array('route' => 'save/user'), array('class' => 'form-horizontal', 'remore' => true)) !!}
                                        {!! Form::label('name', 'NOMBRE:', ['class' => 'col-xs-3 control-label']) !!}
                                        <div class="col-xs-9">
                                            {!! Form::text('name',null, ['class'=>'form-control', 'required']) !!}
                                        </div>
                                        {!! Form::label('email', 'EMAIL:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                        <div class="col-xs-9">
                                            {!! Form::text('email',null, ['class'=>'form-control', 'required', 'id' => 'email-id-form']) !!}
                                        </div>
                                        {!! Form::label('region', 'REGIÓN:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                        <div class="col-xs-9">
                                            {!! Form::text('region',null, ['class'=>'form-control']) !!}
                                        </div>
                                        {!! Form::label('ciudad', 'CIUDAD:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                        <div class="col-xs-9">
                                            {!! Form::text('ciudad',null, ['class'=>'form-control', 'required']) !!}
                                        </div>
                                        {!! Form::label('birthday', 'FECHA NACIMIENTO:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                        <div class="col-xs-9">
                                            {!! Form::text('birthday', "06/06/2001", ['class'=>'form-control', 'id' => 'datepicker']) !!}
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <small>
                                                Al hacer click en Enviar acepta los terminos y condiciones.
                                            </small>
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <small class="hide" id="show-email-permission" style="color: red;">
                                                El email ya esta participando. Gracias.
                                            </small>
                                            <small class="hide" id="show-accept" style="color: red;">
                                                Debe aceptar los terminos para participar.
                                            </small>
                                            <br>

                                            {{--{!! Form::submit('Guardar', array('class' => 'btn btn-danger btn-xs')) !!}--}}
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <button type="submit" style="padding: 0px; margin: -6px; border: 0px"><img src="img/enviar-on-fixed.png"/></button>
                                        .</div>
                                        {!! Form::close() !!}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Fin de formulario--}}
                    <div class=" text-center user-name">
                        <p id="user-name-p"></p>
                    </div>
                    <div class="fb_api">
                        <img src="img/conectate-on.png", class="btn" id="boton-fb-on" />
                        <img src="img/compartir-on.png", class="btn" id="compartir-on" style="display: none"/>
                    </div>
                </div>

                    <div id="medallas" style="display: none"> <!-- sostiene las medallas de los amigos random y el avatar del user de fb  -->
                        <table style="width:100%" cellpadding="30" cellspacing="3"><!-- tabla que sostiene la grafica de las medallas -->
                            <tr>
                                <td style="padding-top:100px;"><div class="friend-frame">
                                        <div class="img-rounded tl-friend friend-photo"></div>
                                        <div class="text-center friend-name">
                                            <p id="tl-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="tl-check">
                                            <input type="checkbox" name="one" id="one" />
                                            <label for="one" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="friend-frame">
                                        <div class="tc-friend img-rounded friend-photo">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p id="tc-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="tc-check">
                                            <input type="checkbox" name="two" id="two" />
                                            <label for="two" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                                <td style="padding-top:100px;">
                                    <div class="friend-frame">
                                        <div class="tr-friend img-rounded friend-photo">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p id="tr-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="tr-check">
                                            <input type="checkbox" name="three" id="three" />
                                            <label for="three" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><div class="user-frame ">
                                        <div class="user-pic img-rounded">
                                        </div>

                                    </div></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:100px;">
                                    <div class="friend-frame">
                                        <div class="dl-friend img-rounded friend-photo">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p id="dl-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="dl-check">
                                            <input type="checkbox" name="four" id="four" />
                                            <label for="four" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="friend-frame">
                                        <div class="dc-friend img-rounded friend-photo">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p id="dc-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="dc-check">
                                            <input type="checkbox" name="five" id="five" />
                                            <label for="five" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                                <td style="padding-bottom:100px;">
                                    <div class="friend-frame">
                                        <div class="dr-friend img-rounded friend-photo">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p id="dr-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="dr-check">
                                            <input type="checkbox" name="six" id="six" />
                                            <label for="six" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </div>

            </div>
        </div>
        <div id="footer">
            <div class="row footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 costillas">
                    <ul>
                        <li><img src="img/carousel_big/1-costillita-barbecue-on.png" class="img-responsive inline-block"></li>
                        <li><img src="img/carousel_big/2-costillitas-chilenas-on.png" class="img-responsive inline-block"></li>
                        <li><img src="img/carousel_big/3-costillitas-ibericas-on.png" class="img-responsive inline-block"></li>
                        <li><img src="img/carousel_big/4-costillitas-mexicanas-on.png" class="img-responsive inline-block"></li>
                        <li><img src="img/carousel_big/5-costillitas-peruanas-on.png" class="img-responsive inline-block"></li>
                        <li><img src="img/carousel_big/6-costillar-barbecue-on.png" class="img-responsive inline-block"></li>
                        <li><img src="img/carousel_big/7-costillar-chileno-on.png" class="img-responsive inline-block"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection             