//form validation
$(document).ready(function (event) {
    $("#form").validate({
        errorClass: "error",
        rules: {
            mailAddress: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            mailAddress: {
                required: "The mail address field is required.",
                email: "The mail address is invalid.",
            },
            password: "The password field is required.",
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
