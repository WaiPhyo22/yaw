//form validation
$(document).ready(function (event) {
    $.validator.addMethod("pwdcheck", function (value, element) {
        return /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])|(?=.*\d)(?=.*[a-zA-Z])(?=.*[\W_])|(?=.*[a-z])(?=.*[A-Z])(?=.*[!#%&-])).*/.test(value);
    });

    $("#form").validate({
        errorClass: "error",
        rules: {
            mailAddress: {
                required: true,
                maxlength: 250,
                email: true,
            },
            userName: {
                required: true,
                maxlength: 250,
            },
            role: {
                required: true,
            },
            password: {
                required: true,
                minlength: 8,
                pwdcheck: true,
            },
            confirmPwd: {
                required: true,
                equalTo: "#password",
            },
        },
        messages: {
            mailAddress: {
                required: "The mail address field is required.",
                maxlength: "The mail address field must be at least 250 characters.",
                email: "The mail address is invalid.",
            },
            role: {
                required: "The role field is required.",
            },
            userName: {
                required: "The name field is required.",
                maxlength: "The name field must be at least 250 characters.",
            },
            password: {
                required: 'The password field is required.',
                minlength: 'The password field must be at least 8 characters.',
                pwdcheck: 'The password format is invalid.',
            },
            confirmPwd: {
                required: 'The confirm password field is required.',
                equalTo: 'The confirm password field must match password.'
            },
        },
        errorPlacement: function (error, element) {
            $("." + element.attr("name") + "Error").append(error);
            $("#" + element.attr("name") + "ServerError").css("display", "none");
        },
        highlight: function (element, errorClass, validClass) {
            $("#" + $(element).attr("name")).removeClass(errorClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $("#" + $(element).attr("name")).removeClass(errorClass);
        },
        onfocusout: function (element) {
            $("#" + $(element).attr("name") + "ServerError").css("display", "none");
            return $(element).valid();
        },
        submitHandler: function (form) {
            $("button[type=submit]").attr("disabled", true);
            form.submit();
        },
    });
});
