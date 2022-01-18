$(document).ready(function () {

   //Валидация форм
    $('.modal__form').validate({
        errorClass: "modal__invalid",
        errorElement: "div",
        rules: {
            userName: {
                required: true,
                minlength: 2
            },
            userTel: {
                required: true,
                minlength: 17
            },
            userAdress: {
                required: true,
                minlength: 5
            },
            userEmail: {
                required: true
            }
        }, // сообщения
        messages: {
            userName: {
                required: "Введите ФИО",
                minlength: "Введите ФИО"
            },
            userTel: {
                required: "Введите номер телефона",
                minlength: "Слишком короткий номер"
            },
            userAdress: {
                required: "Введите адрес",
                minlength: "Введите адрес"
            },
            userEmail: {
                required: "Введите email",
            }
        },

        // ajax
        submitHandler: function (form) {
            $.ajax({
                type: "POST",
                url: "post.php",
                data: $(form).serialize(),
                success: function (data) {
                    $ ('#results').html(data);
                    $(form)[0].reset();


                },
                error: function (xhr, str) {
                    alert('Возникла ошибка ' + xhr.responseCode)
                }
            });
        } 
    });

    // маска для телефона
    $('[type=tel]').mask('+7(000) 000-00-00', {
        placeholder: "Телефон"
    });



});