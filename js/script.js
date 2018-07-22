$('#enviarContacto').on('submit', validate);
function validate(){
    var $that = $(this);
        $url = $that.attr('action');
        $type = $that.attr('method');
        $data = new FormData(this);
        console.log($data);

        $that.find('[name]').each(function(index, value) {
            var $that = $(this);
                $name = $that.attr('name');
                $value = $that.val();
                $data[$name] = $value;
                console.log($data[$name]);
        });
        if (true) {}
        $('.ajaxGif').removeClass('oculto');
        $.ajax({
            url: $url,
            type: $type,
            data: $data,
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){
                $('.ajaxGif').hide();
                $('.boton_envio').html('¡Enviado con Éxito!<span style="font-size:14px;display:block;">nos pondremos en contacto</span>').css({'background':'#09dc26','border':'1px solid #09dc26'});
                console.log(response);
            },
            error: function() {
                console.log('error');
            }
        });     

        return false;
}