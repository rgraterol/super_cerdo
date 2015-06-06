jQuery(document).ready(function($) {
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

    $('#boton-fb-on').click(function() {
        $(this).attr("disabled", "disabled");
        /*var src = $(this).attr("src").replace("img/conectate-on.png","img/conectate-off.png");
        $(this).attr("src", src);*/
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                FB.api("/me/taggable_friends",
                    function (response) {
                        if (response && !response.error) {
                            console.log(response['data'][0]);
                        }
                    });
                console.log('Logged in.');
            }
            else {
                FB.login(function(){}, {scope: 'email,public_profile,user_friends'});

            }
        });
    });
});