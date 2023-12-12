//passing data to modal box 
$(document).ready(function () {
    $('#delConfirmModal').on('show.bs.modal', function (e) {
        let link = $(e.relatedTarget),
            modal = $(this),
            id = link.data("id"),
            username = link.data("username"),
            email = link.data("email");
        modal.find('#deleteForm').attr("action", "/user/delete/" + id);
        modal.find("#email").text(email);
        modal.find("#username").text(username);
    });
})