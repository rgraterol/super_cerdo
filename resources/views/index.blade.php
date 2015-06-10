@extends('app')

@section('content')
<div class="fb-root" id="fb-root">
<div id="wrapper">
    <div class="container-fluid no-padding" style="position: relative;">
        <div id="header"></div>
        <div id="content">
            <div class="row first-page-mobile">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 banda">
                    {{--Este es el formulario del final--}}
                    <div id="form-id-to-show" style="display: none">
                        <div class="form-api">
                            <div class="row">
                                <div class="white-bg-red-border">
                                    {{--['data-remote'],--}}
                                    {!! Form::open(['data-remote'], array('route' => 'save/user'), array('class' => 'form-horizontal', 'remore' => true)) !!}
                                    {!! Form::label('name', 'NOMBRE:', ['class' => 'col-xs-3 control-label']) !!}
                                    <div class="col-xs-9">
                                        {!! Form::text('name',null, ['class'=>'form-control form-control-fix', 'required', 'id' => 'name-id-form']) !!}
                                    </div>
                                    {!! Form::label('email', 'EMAIL:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                    <div class="col-xs-9">
                                        {!! Form::text('email',null, ['class'=>'form-control form-control-fix', 'required', 'id' => 'email-id-form']) !!}
                                    </div>
                                    {!! Form::label('region', 'REGIÓN:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                    <div class="col-xs-9">
                                        <select name="region" class="form-control form-control-fix">
                                        <option value="0">Selecciona...</option>
                                        @foreach(DB::table('regiones')->get() as $region)
                                                <option value="{{$region->region_id}}">{{$region->region_nombre}}</option>
                                        @endforeach
                                        </select>
                                        {{--{!! Form::select('region', $regions, ['class'=>'form-control form-control-fix']) !!}--}}
                                    </div>
                                    
                                    <label class="col-xs-3 control-label" required>CIUDAD:</label>
                                    <div class="col-xs-9">
                                        <select name="city" class="form-control form-control-fix">
                                        </select>
                                    </div>

                                    {!! Form::label('birthday', 'FECHA NACIMIENTO:', ['class' => 'col-xs-3 control-label', 'required']) !!}
                                    <div class="col-xs-9">
                                        {!! Form::text('birthday', null, ['class'=>'form-control form-control-fix', 'id' => 'datepicker']) !!}
                                        {!! Form::hidden('friend_name', null, [ 'id' => 'hidden-field-friend-name']) !!}
                                    </div>
                                    <div class="col-xs-12 text-center" id="terminos-condiciones">
                                        <small>
                                            Al enviar aceptas los <a href="http://nosunelaparrilla.cl/bases.pdf">términos y condiciones de uso.</a>
                                        </small>
                                    </div>
                                    <div class="col-xs-12 text-center" style="margin-top: 5%;">
                                        <button type="submit" id="enviar-button"><img src="img/enviar-on-fixed.png"/></button>
                                    </div>
                                    <div class="col-xs-12 text-center email-in-use">
                                        <p class="email-in-use" id="show-email-permission" style="display: none;">
                                            El email ya esta participando. Gracias.
                                        </p>
                                        <small class="hide" id="show-accept" style="color: red;">
                                            Debe aceptar los terminos para participar.
                                        </small>
                                        <br>

                                        {{--{!! Form::submit('Guardar', array('class' => 'btn btn-danger btn-xs')) !!}--}}
                                    </div>
                                    {!! Form::close() !!}
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
                        <img src="img/compartir-on.png", class="btn" id="compartir-on" style="display: none" disabled="true"/>
                    </div>

                    <div class="show-carousel">
                    </div>
                </div>
                    <div id="medallas" style="display: none"> <!-- sostiene las medallas de los amigos random y el avatar del user de fb  -->
                        <table class="table-style " cellpadding="30" cellspacing="3"><!-- tabla que sostiene la grafica de las medallas -->
                            <tr>
                                <td class="padding-medalla-top">
                                    <div class="friend-frame ns-f">
                                        <div class="img-rounded tl-friend friend-photo"></div>
                                        <div class="text-center friend-name">
                                            <p class="tl-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="tl-check">
                                            <input type="radio" name="one" id="one" value="one" />
                                            <label for="one" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="friend-frame ns-f">
                                        <div class="tc-friend img-rounded friend-photo">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p class="tc-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="tc-check">
                                            <input type="radio" name="one" id="two" value="two" />
                                            <label for="two" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                                <td class="padding-medalla-top">
                                    <div class="friend-frame ns-f">
                                        <div class="tr-friend img-rounded friend-photo">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p class="tr-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="tr-check">
                                            <input type="radio" name="one" id="three" value="three" />
                                            <label for="three" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="friend-frame" id="s-friend-frame" style="display: none;">
                                        <div class="img-rounded friend-photo" id="s-friend">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p class="s-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="tr-check">
                                            <input type="radio" name="s-friend" id="s-friend-check" value="s-friend" />
                                            <label for="s-friend" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-frame">
                                        <div class="user-pic img-rounded">
                                        </div>
                                    </div>
                                    <img src="img/boton-volver.png" class="img-responsive btn" id="volver" style="display:none">
                                </td>
                                <td>
                                    <div class="friend-frame" id="s-user-frame" style="display: none;">
                                        <div class="img-rounded friend-photo" id="s-user">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p class="s-user-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="tr-check">
                                            <input type="radio" name="s-use" id="s-user-check" value="s-user" />
                                            <label for="s-user" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="padding-medalla-bottom">
                                    <div class="friend-frame ns-f" >
                                        <div class="dl-friend img-rounded friend-photo">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p class="dl-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="dl-check">
                                            <input type="radio" name="one" id="four"  value="four"/>
                                            <label for="four" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="friend-frame ns-f">
                                        <div class="dc-friend img-rounded friend-photo">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p class="dc-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="dc-check">
                                            <input type="radio" name="one" id="five" value="five" />
                                            <label for="five" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                                <td class="padding-medalla-bottom">
                                    <div class="friend-frame ns-f">
                                        <div class="dr-friend img-rounded friend-photo">
                                        </div>
                                        <div class="text-center friend-name">
                                            <p class="dr-friend-name">
                                            </p>
                                        </div>
                                        <div class="img-rounded friend-check " id="dr-check">
                                            <input type="radio" name="one" id="six" value="six" />
                                            <label for="six" class="font-check"></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="medallas-mobile">
                        <div class="medallas-mobile-content">

                            <div class="user-frame">
                                <div class="user-pic img-rounded">
                                </div>
                            </div>
                
                            <img src="img/boton-volver.png" class="img-responsive btn volver" id="volver" style="display:none">

                            <div class="friend-frame ns-f first-medalla">
                                <div class="img-rounded tl-friend friend-photo"></div>
                                <div class="text-center friend-name">
                                    <p class="tl-friend-name">
                                    </p>
                                </div>
                                <div class="img-rounded friend-check " id="tl-check">
                                    <input type="radio" name="one" id="one" value="one" />
                                    <label for="one" class="font-check"></label>
                                </div>
                            </div>

                            <div class="friend-frame ns-f second-medalla">
                                <div class="tc-friend img-rounded friend-photo">
                                </div>
                                <div class="text-center friend-name">
                                    <p class="tc-friend-name">
                                    </p>
                                </div>
                                <div class="img-rounded friend-check " id="tc-check">
                                    <input type="radio" name="one" id="two" value="two" />
                                    <label for="two" class="font-check"></label>
                                </div>
                            </div>

                            <div class="friend-frame ns-f third-medalla">
                                <div class="tr-friend img-rounded friend-photo">
                                </div>
                                <div class="text-center friend-name">
                                    <p class="tr-friend-name">
                                    </p>
                                </div>
                                <div class="img-rounded friend-check " id="tr-check">
                                    <input type="radio" name="one" id="three" value="three" />
                                    <label for="three" class="font-check"></label>
                                </div>
                            </div>

                            <div class="friend-frame ns-f fourth-medalla" >
                                <div class="dl-friend img-rounded friend-photo">
                                </div>
                                <div class="text-center friend-name">
                                    <p class="dl-friend-name">
                                    </p>
                                </div>
                                <div class="img-rounded friend-check " id="dl-check">
                                    <input type="radio" name="one" id="four"  value="four"/>
                                    <label for="four" class="font-check"></label>
                                </div>
                            </div>

                            <div class="friend-frame ns-f fifth-medalla">
                                <div class="dc-friend img-rounded friend-photo">
                                </div>
                                <div class="text-center friend-name">
                                    <p class="dc-friend-name">
                                    </p>
                                </div>
                                <div class="img-rounded friend-check " id="dc-check">
                                    <input type="radio" name="one" id="five" value="five" />
                                    <label for="five" class="font-check"></label>
                                </div>
                            </div>

                            <div class="friend-frame ns-f sixth-medalla">
                                <div class="dr-friend img-rounded friend-photo">
                                </div>
                                <div class="text-center friend-name">
                                    <p class="dr-friend-name">
                                    </p>
                                </div>
                                <div class="img-rounded friend-check " id="dr-check">
                                    <input type="radio" name="one" id="six" value="six" />
                                    <label for="six" class="font-check"></label>
                                </div>
                            </div>


                            <div class="friend-frame left-medalla">
                                <div class="left-friend img-rounded friend-photo">
                                </div>
                                <div class="text-center friend-name">
                                    <p class="left-friend-name">
                                    </p>
                                </div>
                                <div class="img-rounded friend-check " id="dc-check">
                                    <input type="radio" name="one" class="left-check" />
                                    <label class="font-check"></label>
                                </div>
                            </div>

                            <div class="friend-frame right-medalla">
                                <div class="right-friend img-rounded friend-photo">
                                </div>
                                <div class="text-center friend-name">
                                    <p class="right-friend-name">
                                    </p>
                                </div>
                                <div class="img-rounded friend-check " id="dr-check">
                                    <input type="radio" class="right-check" name="one" id="right-check" checked="true"/>
                                    <label class="font-check"></label>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>

            <div class="row second-page-mobile">
                <ul>
                    <li class="first-item">
                        <div class="more-info"></div>
                        <div class="show-more-info"></div>
                    </li>
                    <li class="second-item">
                        <div class="more-info"></div>
                        <div class="show-more-info"></div>
                    </li>
                    <li class="third-item">
                        <div class="more-info"></div>
                        <div class="show-more-info"></div>
                    </li>
                    <li class="fourth-item">
                        <div class="more-info"></div>
                        <div class="show-more-info"></div>
                    </li>
                    <li class="fith-item">
                        <div class="more-info"></div>
                        <div class="show-more-info"></div>
                    </li>
                    <li class="sixth-item">
                        <div class="more-info"></div>
                        <div class="show-more-info"></div>
                    </li>
                    <li class="seventh-item">
                        <div class="more-info"></div>
                        <div class="show-more-info"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class ="lightBoxGallery" id="footer">
            <div class="row footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 costillas">
                    <ul>
                        <li><a href="img/lightbox/1-DETALLE-BARBECUE.png" title="" data-gallery="" ><img src="img/carousel_big/1-costillita-barbecue-on.png" class="img-responsive inline-block"></a></li>
                        <li><a href="img/lightbox/2-DETALLE-CHILENA.png" title="" data-gallery="" ><img src="img/carousel_big/2-costillitas-chilenas-on.png" class="img-responsive inline-block"></a></li>
                        <li><a href="img/lightbox/3-DETALLE-IBERICA.png" title="" data-gallery="" ><img src="img/carousel_big/3-costillitas-ibericas-on.png" class="img-responsive inline-block"></a></li>
                        <li><a href="img/lightbox/4-DETALLE-MEXICANA.png" title="" data-gallery="" ><img src="img/carousel_big/4-costillitas-mexicanas-on.png" class="img-responsive inline-block"></a></li>
                        <li><a href="img/lightbox/5-DETALLE-PERUANA.png" title="" data-gallery="" ><img src="img/carousel_big/5-costillitas-peruanas-on.png" class="img-responsive inline-block"></a></li>
                        <li><a href="img/lightbox/6-DETALLE-COSTILLAR-BBQ.png" title="" data-gallery="" ><img src="img/carousel_big/6-costillar-barbecue-on.png" class="img-responsive inline-block"></a></li>
                        <li><a href="img/lightbox/7-DETALLE-COSTILLAR-CHILENAS.png" title="" data-gallery="" ><img src="img/carousel_big/7-costillar-chileno-on.png" class="img-responsive inline-block"></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="back-button">
        Volver
    </div>
</div>
</div>

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
</div>

@endsection             