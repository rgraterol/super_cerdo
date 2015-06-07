jQuery(document).ready(function($) {


    var pool = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    var getNumber = function () {
        if (pool.length == 0) {
            throw "Error - No tiene amigos";
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
    var user = '';
    var f1 = '';
    var f2 = '';
    var f3 = '';
    var f4 = '';
    var f5 = '';
    var f6 = '';
    var avatar_one = '';
    $('#boton-fb-on').click(function() {
        var checkboxes = document.getElementsByTagName('input');

        for (var i=0; i<checkboxes.length; i++)  {
            if (checkboxes[i].type == 'radio')   {
                checkboxes[i].checked = false;
            }
        }
        FB.getLoginStatus(function(response) {
            $('#boton-fb-on').attr("disabled", "disabled");
            if (response.status === 'connected') {
                FB.api(
                    "/me/picture",
                    function (response) {
                        if (response && !response.error) {
                            $('.user-pic').css("background",'url(' + response["data"]['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                        }
                    }
                );
                FB.api(
                    "/me",
                    function (response) {
                        if (response && !response.error) {
                            user = response;
                            $('#user-name-p').text(user['name'].toUpperCase());
                        }
                    }
                );
                FB.api("/me/taggable_friends",
                    function (response) {
                        console.log(response);
                        console.log("friends");
                        if (response && !response.error) {
                            f1 = response["data"][one];
                            $('.tl-friend').css("background",'url(' + response["data"][one]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#tl-friend-name').text(response["data"][one]['name'].toUpperCase());


                            f2 = response["data"][two];
                            $('.tc-friend').css("background",'url(' + response["data"][two]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#tc-friend-name').text(response["data"][two]['name'].toUpperCase());

                            f3 = response["data"][three];
                            $('.tr-friend').css("background",'url(' + response["data"][three]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#tr-friend-name').text(response["data"][three]['name'].toUpperCase());

                            f4 = response["data"][four];
                            $('.dl-friend').css("background",'url(' + response["data"][four]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#dl-friend-name').text(response["data"][four]['name'].toUpperCase());

                            f5 = response["data"][five];
                            $('.dc-friend').css("background",'url(' + response["data"][five]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#dc-friend-name').text(response["data"][five]['name'].toUpperCase());

                            f6 = response["data"][six];
                            $('.dr-friend').css("background",'url(' + response["data"][six]['picture']['data']['url'] +') no-repeat').css("background-size",'cover').css('-o-background-size','cover');
                            $('#dr-friend-name').text(response["data"][six]['name'].toUpperCase());

                            $('#medallas').show().addClass('magictime vanishIn');
                            $('#boton-fb-on').hide();
                            $('#compartir-on').show();
                            $('.banda').css("background",'url("../img/barra_roja/2.png") no-repeat').css("background-size",'cover').css('-o-background-size','cover').css('width','35%').addClass('magictime vanishIn');
                        }
                    });

            }
            else {
                FB.login(function(){}, {scope: 'email,public_profile,user_friends'});

            }
        });
    });
//    Este es el lugar donde se envia el formulario y se guarda la data
    $('form[data-remote]').on('submit', function(e){
        $('.banda').removeClass('magictime vanishIn');
        var form = $(this);
        var url = form.prop('action');
        var clienti=$('#add_clienti');
        $.ajax({
            url:url +'/save/user',
            data:form.serialize(),
            type: 'POST',
            dataType: "json",
            success: function(data){
                if (data[0] == 'false'){
                    $('#email-id-form').attr('style','border: 1px solid red;');
                    $('#show-email-permission').show();
                    $('#form-id-to-show').attr('class','hide')
                    $('.banda').css("background",'url("../img/barra_roja/4.png") no-repeat').css("background-size",'cover').css('-o-background-size','cover').css('width','35%').addClass('magictime vanishIn');
                }else{
                    if (data[0] == 'no'){
                        //$('#email-id-form').attr('style','border: 1px solid red;');
                        $('#show-accept').attr('class','');
                    }else{
                        $('#form-id-to-show').attr('class','hide')
                        $('.banda').css("background",'url("../img/barra_roja/4.png") no-repeat').css("background-size",'cover').css('-o-background-size','cover').css('width','35%').addClass('magictime vanishIn');
                    }
                }
                //i want to insert in table #listaclienti at the end of it
            }
        });
        return false;
    });

    $('#compartir-on').click(function() {
        $(this).attr("disabled", "disabled");
        var radios = document.getElementsByTagName('input');
        var f_names = [];
        var f_ids = [];
        for (var i=0; i<radios.length; i++)  {
            if (radios[i].type == 'radio')   {
                if (radios[i].checked == true && radios[i].id == 'one') {
                    f_names.push(f1['name'].replace('"', '')); f_ids.push(f1['id']);
                }
                if (radios[i].checked == true && radios[i].id == 'two') {
                    f_names.push(f2['name'].replace('"', '')); f_ids.push(f2['id']);
                }
                if (radios[i].checked == true && radios[i].id == 'three') {
                    f_names.push(f3['name'].replace('"', '')); f_ids.push(f3['id']);
                }
                if (radios[i].checked == true && radios[i].id == 'four') {
                    f_names.push(f4['name'].replace('"', '')); f_ids.push(f4['id']);
                }
                if (radios[i].checked == true && radios[i].id == 'five') {
                    f_names.push(f5['name'].replace('"', '')); f_ids.push(f5['id']);
                }
                if (radios[i].checked == true && radios[i].id == 'six') {
                    f_names.push(f6['name'].replace('"', '')); f_ids.push(f6['id']);
                }
            }
        }
        var string = user['name'] + ' quiere compartir un asado';
        var friend ='';
        if (f_names.length === 0) {
            string += ' contigo...';
        }
        else {
            string += ' con ';
            $.each(f_names, function(index, value) {
                    friend = value;
                    string += value + ', '
                });
            }
        FB.ui({
            method: 'feed',
            link: 'http://super-cerdo.us.to/',
            caption: 'Super Cerdo',
            picture: 'http://super-cerdo.us.to/img/5.png',
            name: string.slice(0,-2),
            description: string.slice(0,-2)
        }, function(response){
            $('#medallas').hide();
            $('#compartir-on').hide();
            $('.user-name').hide();
            $('#form-id-to-show').show();
            $('#name-id-form').val(user['name']);
            $('#email-id-form').val(user['email']);
            $('#hidden-field-friend-name').val(friend);
            $('.fb_api').hide();
            $('.banda').css("background",'url("../img/barra_roja/3.png") no-repeat').css("background-size",'cover').css('-o-background-size','cover').css('width','35%').addClass('magictime vanishIn');
        });
        /*FB.api('/me/feed', 'post', {message: 'Hello, world!'},
        function(response) { console.log(response)});*/
    });


});