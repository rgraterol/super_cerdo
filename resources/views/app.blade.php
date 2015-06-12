<!DOCTYPE html>
<html lang="en">
<head>


    <title>Super Cerdo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,   maximum-scale=1, user-scalable=no">
    <meta property="og:image" content="http://nosunelaparrilla.cl/img/6.png" />
    <meta property="og:description" content="Super Cerdo - Nos une la parrilla." />
    <meta property="og:title" content="Super Cerdo" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta property="og:url" content="http://nosunelaparrilla.cl" />
    <meta property="og:type" content="Food" />
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '964551623588913',
                xfbml      : true,
                version    : 'v2.3'
            });
        };
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/landing-page.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/magic.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <link href="{{ asset('/css/blueimp/css/blueimp-gallery.min.css') }}" rel="stylesheet" >
    <link href="{{asset('/css/hover-min.css')}}" rel="stylesheet" media="all">

	<!-- Fonts -->
	<!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	@yield('content')

	<!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.youtubepopup.js"></script>
    <script src="js/super_cerdo.js"></script>
    <script src="js/dynamic_select.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <!-- blueimp gallery -->
    <script src="js/blueimp/jquery.blueimp-gallery.min.js"></script>
    <script>
        $(function() {
            var currentDate = new Date();
            $( "#datepicker" ).datepicker({
                dateFormat: 'dd/mm/yy',
                defaultdate:'01/01/2000',
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0"
            });
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63985405-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script type="text/javascript">
        function getSearchParameters() {
            var prmstr = window.location.search.substr(1);
            return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
        }

        function transformToAssocArray( prmstr ) {
            var params = {};
            var prmarr = prmstr.split("&");
            for ( var i = 0; i < prmarr.length; i++) {
                var tmparr = prmarr[i].split("=");
                params[tmparr[0]] = tmparr[1];
            }
            return params;
        }
        var params = getSearchParameters();
        console.log(params.href);
        if(params.href == "youtube"){
            $(".youtube").remove();
        }else{
            $(function () {
                $(".youtube").YouTubeModal({autoplay:1, width:1100, height:619});
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            document.getElementById("YTV").click(); //simulates a link click
            setTimeout('document.getElementsByClassName("close")[0].click();', 133200); //waits 10 seconds and then hides closes the lightbox window
        });
    </script>




    <!-- YOUTUBE  AutoLightbox Script-->

</body>
</html>
