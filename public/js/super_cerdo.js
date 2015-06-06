jQuery(document).ready(function($) {
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '964551623588913',
            xfbml      : true,
            version    : 'v2.3'
        });
    };

    var pool = [1, 2, 3, 4, 5];
    var getNumber = function () {
        if (pool.length == 0) {
            throw "No numbers left";
        }
        var index = Math.floor(pool.length * Math.random());
        var drawn = pool.splice(index, 1);
        return drawn[0];
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
//    Este es el lugar donde se envia el formulario y se guarda la data
    $('form[data-remote]').on('submit', function(e){
        var form = $(this);
        var url = form.prop('action');
        var clienti=$('#add_clienti');
        $.ajax({
            url:url +'/save/user',
            data:form.serialize(),
            type: 'POST',
            dataType: "json",
            success: function(data){
                console.log(data[0]);
                if (data[0] == 'false'){
                    $('#email-id-form').attr('style','border: 1px solid red;');
                    $('#show-email-permission').attr('class','');
                }

                //i want to insert in table #listaclienti at the end of it
            }
        });
        return false;
    });



});