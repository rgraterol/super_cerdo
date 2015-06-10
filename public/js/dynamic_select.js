$(document).ready( function(){
  $('select[name="region"]').change( function(){

    var value = $(this).val();

    if( value != 0 ){
      $.ajax({
        url: '/region/provincia/' + value,
        dataType: 'json',
        type: 'get',
        success: function(response){
          var options = "";

          $.each( response, function(key, ciudad){
            options = options + "<option value="+ciudad.provincia_id+">"+ciudad.provincia_nombre+"</option>";
          })

          $('select[name="ciudad"]').html(options);
        }
      })
    }
  })
})