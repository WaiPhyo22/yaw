<nav class="navbar navbar-expand-lg fixed-top d-flex flex-row">
    <div class="mr-auto ml-2">
        {{ config("constant.TITLE") }}
    </div>
    <div class="admin-popup-box">
        <i class="fa-solid fa-user-large" onclick="showUserIconPopup()"></i>
        <a href="/change-pwd" class="btn btn-default btn-icon align-self-center mt-2">Change Password</a>
        <a href="/logout" class="btn btn-default btn-icon align-self-center mt-2"><i class="fa fa-sign-out"></i>Logout</a>
    </div>
</nav>