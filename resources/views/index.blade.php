@extends('app')

@section('content')
<div id="wrapper">
    <div class="container-fluid no-padding" style="position: relative;                                                      ">
        <div id="header"></div>
        <div id="content">
            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 banda">
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