$(document).ready(function() {
    $('#pingForm').validate({
        ignore: "#calc-form-image",
        rules: {
            fullname: "required",
            email: {
                required: true,
            },
            mobile: {
                required: true,
                number: true
            },
            category: "required"
        },
        errorElement: "span",
        messages: {
            name: "Пожалуйста введите ваше имя",
            email: "Пожалуйста введите ваш email или телефон",
            phone: "Пожалуйста введите ваш номер телефон",
            category: "Пожалуйста введите ваш категорию"
        },
        submitHandler: function(form) {
            //var dataparam = $('#pingForm').serialize();
            var dataparam = new FormData(form);
            $.ajax({
                type: 'POST',
                url: '/wp-content/themes/barbershop/send.php',
                enctype: 'multipart/form-data',
                //datatype: 'json',
                processData: false,
                contentType: false,
                cache: false,
                data: dataparam,
                beforeSend: function() {
                    $('#contact_result').html('<div class="contact_result"><p>Отправляю...</p></div>');
                },
                success: function(data) {
                    if (data == 'success') {
                        $('#contact_result').text('<div class="contact_result"><p>Ваше сообщение отправлено</p></div>');
                    } else {
                        $('.no-config').show();
                        $('#pingForm').find('input', 'textarea').val('');
                        $('#contact_result').html('<div class="contact_result"><p>Ваше сообщение отправлено</p></div>');
                    }

                },
                complete: function(jqXHR, textStatus) {}

            });
        }
    });

});