
function showPassword(id)
{
    var passwordInput = document.getElementById(id);
    var passStatus = document.getElementById(id+'-pass-status');
    passwordInput.type = passwordInput.type =='password' ? 'text' : 'password';
    passStatus.className = passwordInput.type =='password' ? 'fa fa-eye eye-icon' : 'fa fa-eye-slash eye-icon';
}

// validate all the fields before showing modal
$('#btnConfirm').click(function() {
    let currentPwd = $('#form').validate().element('#currentPwd');
    let newPwdValidation = $('#form').validate().element('#newPwd');
    let confirmPwdValidation = $('#form').validate().element('#confirmNewPwd');

    if ( currentPwd && newPwdValidation && confirmPwdValidation) {
        $('#confirmModal').modal('show');
    }
});

$('#btnByAdminConfirm').click(function() {
    let newPwdValidation = $('#form').validate().element('#newPwd');
    let confirmPwdValidation = $('#form').validate().element('#confirmNewPwd');

    if (newPwdValidation && confirmPwdValidation) {
        $('#confirmModal').modal('show');
    }
});

$('#btnSubmit').click(function() {
    $('#btnClose').attr("disabled", true);
})


