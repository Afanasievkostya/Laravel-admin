// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()


//AJAX отправка email через форму обратной связи
$(document).ready(function(){
    $('#contactform').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '/sendmail',
            data: $('#contactform').serialize(),
            success: function(data){
                if(data.result)
                {
                    $('#senderror').hide();
                    $('#sendmessage').show();
                }
                else
                {
                    $('#senderror').show();
                    $('#sendmessage').hide();
                }
            },
            error: function(){
                $('#senderror').show();
                $('#sendmessage').hide();
            }
        });
    });
});
