jQuery(document).ready(function($) {
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '964551623588913',
            xfbml      : true,
            version    : 'v2.3'
        });
    };

    var pool = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24];

    var getNumber = function () {
        if (pool.length == 0) {
            throw "No numbers left";
        }
        var index = Math.floor(pool.length * Math.random());
        var drawn = pool.splice(index, 1);
        return drawn[0];
    };

    var one = getNumber();
    var two = getNumber();
    var three = getNumber();
    var four = getNumber();
    var five = getNumber();
    var six = getNumber();

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    var avatar_one = '';
    $('#boton-fb-on').click(function() {
        $(this).attr("disabled", "disabled");
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                FB.api(
                    "/me/picture",
                    function (response) {
                        if (response && !response.error) {
                            $('.user-pic').css("background",'url(' + response["data"]['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                        }
                    }
                );
                FB.api("/me/taggable_friends",
                    function (response) {
                        if (response && !response.error) {
                            $('.tl-friend').css("background",'url(' + response["data"][one]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#tl-friend-name').text(response["data"][one]['name']);
                            $('.tc-friend').css("background",'url(' + response["data"][two]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#tc-friend-name').text(response["data"][two]['name']);
                            $('.tr-friend').css("background",'url(' + response["data"][three]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#tr-friend-name').text(response["data"][three]['name']);
                            $('.dl-friend').css("background",'url(' + response["data"][four]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#dl-friend-name').text(response["data"][four]['name']);
                            $('.dc-friend').css("background",'url(' + response["data"][five]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#dc-friend-name').text(response["data"][five]['name']);
                            $('.dr-friend').css("background",'url(' + response["data"][six]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#dr-friend-name').text(response["data"][six]['name']);
                            console.log(response)
                        }
                    });
                $('.banda').css("background",'url(' + response["data"][one]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                console.log('Logged in.');
            }
            else {
                FB.login(function(){}, {scope: 'email,public_profile,user_friends'});

            }
        });
    });
});