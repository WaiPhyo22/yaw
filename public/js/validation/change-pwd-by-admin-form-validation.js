//form validation
$(document).ready(function (event) {
    $.validator.addMethod("pwdcheck", function (value) {
        return /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])|(?=.*\d)(?=.*[a-zA-Z])(?=.*[\W_])|(?=.*[a-z])(?=.*[A-Z])(?=.*[!#%&-])).*/.test(value)
    });

    $('#form').validate({
        errorClass: 'error',
        rules: {
            newPwd: {
                required: true,
                minlength: 8,
                pwdcheck: true
            },
            confirmNewPwd: {
                required: true,
                equalTo: '#newPwd'
            },
        },
        messages: {
            newPwd: {
                required: 'The new pwd field is required.',
                minlength: 'The new pwd field must be at least 8 characters.',
                pwdcheck: 'The new pwd format is invalid.',
            },
            confirmNewPwd: {
                required: 'The confirm password field is required.',
                equalTo: 'The confirm password field must match new pwd.'
            },
        },
        errorPlacement: function (error, element) {
            $('.' + element.attr('name') + 'Error').append(error);
            $('#' + element.attr('name') + 'ServerError').css('display', 'none');
        },
        highlight: function (element, errorClass, validClass) {
            $('#' + $(element).attr('name')).removeClass(errorClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $('#' + $(element).attr('name')).removeClass(errorClass);
        },
        onfocusout: function (element) {
            $('#' + $(element).attr('name') + 'ServerError').css('display', 'none');
            return $(element).valid();
        },
        submitHandler: function(form) {
            $('button[type=submit]').attr('disabled', true);
            form.submit();
        }
    });
});
