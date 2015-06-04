@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="bg"> <!-- div que sostiene el fodo -->
                    <!-- div banda tiene la img con el texto y logo de supercerdo, btn_fb tiene el boton de fb -->
                    <div id="btn_fb">
                        <img src="img/boton-fb-on.png" class="img-responsive">
                    </div>
                    <div id="banda">
                        <img src="img/banda-roja-completa.png" class="img-responsive">
                    </div>

                    <div id="medallas"> <!-- sostiene las medallas de los amigos random y el avatar del user de fb  -->
                        <table style="width:100%" cellpadding="30" cellspacing="3"><!-- tabla que sostiene la grafica de las medallas -->
                            <tr>
                                <td style="padding-top:100px;"><img src="img/plano-foto-amigos-fb.png" width="65"></td>
                                <td><img src="img/plano-foto-amigos-fb.png" width="65"></td>
                                <td style="padding-top:100px;"><img src="img/plano-foto-amigos-fb.png" width="65"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><img src="img/marco-foto-avatar.png" width="80"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:100px;"><img src="img/plano-foto-amigos-fb.png" width="65"></td>
                                <td><img src="img/plano-foto-amigos-fb.png" width="65"></td>
                                <td style="padding-bottom:100px;"><img src="img/plano-foto-amigos-fb.png" width="65"></td>
                            </tr>
                        </table>

                    </div>
                    <div id="footer"> <!-- footer fijo en el bottom de la web responsive de 7 calugas el rollover esta en style de arriba q hay que migrar a un.css  -->
                        <div class="caluga prod1"><!--<img src="img/producto-1-normal.png" class="img-responsive">--></div>
                        <div class="caluga prod2"><!--<img src="img/producto-2-normal.png" class="img-responsive">--></div>
                        <div class="caluga prod3"><!--<img src="img/producto-3-normal.png" class="img-responsive">--></div>
                        <div class="caluga prod4"><!--<img src="img/producto-4-normal.png" class="img-responsive">--></div>
                        <div class="caluga prod5"><!--<img src="img/producto-5-normal.png" class="img-responsive">--></div>
                        <div class="caluga prod6"><!--<img src="img/producto-6-normal.png" class="img-responsive">--></div>
                        <div class="caluga prod7"><!--<img src="img/producto-7-normal.png" class="img-responsive">--></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection