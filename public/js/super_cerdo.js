jQuery(document).ready(function($) {
    return $('#boton-fb-on').click(function() {
        return $.ajax({
            type: "GET",
            url: "login/facebook",
            dataType: "JSON",
            data: {
            },
            success: function(data) {
                console.log(data);
            }
        });
    });
});