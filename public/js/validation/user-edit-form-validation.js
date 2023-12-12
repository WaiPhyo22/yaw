//form validation
$(document).ready(function (event) {
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
        },
        messages: {
            mailAddress: {
                required: "The mail address field is required.",
                maxlength: "The mail address field must be at least 250 characters.",
                email: "The mail address is invalid.",
            },
            userName: {
                required: "The name field is required.",
                maxlength: "The name field must be at least 250 characters.",
            },
            role: {
                required: "The role field is required.",
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
