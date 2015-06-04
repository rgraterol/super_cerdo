@extends('app')

@section('content')

<div class="bg">
    <div id="banda">
        <img src="img/banda-roja-completa.png" class="img-responsive">
        <div class="fb_api">
            <img src="img/boton-fb-on.png" class="img-responsive">
        </div>

        <!--<div class="footer"> <!-- footer fijo en el bottom de la web responsive de 7 calugas el rollover esta en style de arriba q hay que migrar a un.css  -->
            <!--<img src="img/producto-1-normal.png" class="img-responsive img-inline">
            <img src="img/producto-2-normal.png" class="img-responsive img-inline">
            <img src="img/producto-3-normal.png" class="img-responsive img-inline">
            <img src="img/producto-4-normal.png" class="img-responsive img-inline">
            <img src="img/producto-5-normal.png" class="img-responsive img-inline">
            <img src="img/producto-6-normal.png" class="img-responsive img-inline">
            <img src="img/producto-7-normal.png" class="img-responsive img-inline">
        </div>
    </div>-->
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
@endsection