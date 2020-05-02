
$(document).ready(function(){
  $('#login').click(function(){
      var correo = ('#correo').val();
      var contraseña = ('#contraseña').val();
      if ($.trim(correo).length > 0 && $.trim(contraseña).length > 0 ) {
        $.ajax({
          URL:"",
          method: "POST",
          data: {correo:correo, contraseña:contraseña},
          cache: 'false',
          beforeSend: function() {
            $('#login').val("Conectando...");
          },
          success:function(data){
            $('#login').val("Entrar");
            if (data == "1") {
              $(location).attr('href','index.php')
            }else{
            $("#result").html("<div class="alert alert-danger" role="alert">
                  <strong>Error.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </div>");
            }
          }
        });

      }
  });
});
