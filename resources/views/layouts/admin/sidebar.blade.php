<div class="border-right" id="sidebar-wrapper">
    <div class="list-group list-group-flush">
        <div class="list-group-item list-group-item-custom list-group-item-action">
            <div class="row">
                <div class="px-3 text-center"><span id="menu-toggle" class="menu-toggle-icon"><i id="toggle-icon" class="fa fa-navicon"></i></span></div>
            </div>
        </div>
        <a href="/user/list" class="list-group-item list-group-item-custom list-group-item-action
            {{ request()->is('') ? 'active' : '' }}">
                <div class="row">
                    <div class="px-3 text-center"><i class="fa fa-users"></i></div>
                    <div class="sidebar-menu-d-none">Customer</div>
                </div>
        </a>
        <a href="/user/list" class="list-group-item list-group-item-custom list-group-item-action
            {{ request()->is('#') ? 'active' : '' }}">
            <div class="row">
                <div class="px-3 text-center"><i class="fa fa-users"></i></div>
                <div class="sidebar-menu-d-none">Product{{request()->is()}}</div>
            </div>
        </a>
        @role('admin')
            <a href="/user/list" class="list-group-item list-group-item-custom list-group-item-action
            {{ request()->is('user/*') ? 'active' : '' }}">
                <div class="row">
                    <div class="px-3 text-center"><i class="fa fa-users"></i></div>
                    <div class="sidebar-menu-d-none">Admin User</div>
                </div>
            </a>
        @endrole
        <a href="/change-pwd" class="list-group-item list-group-item-custom list-group-item-action
            {{ request()->is('change-pwd') ? 'active' : '' }}">
            <div class="row">
                <div class="px-3 text-center"><i class="fa-solid fa-lock"></i></div>
                <div class="sidebar-menu-d-none">Change Password</div>
            </div>
        </a>
        <a href="/logout" class="list-group-item list-group-item-custom list-group-item-action">
            <div class="row">
                <div class="px-3 text-center"><i class="fa fa-sign-out"></i></div>
                <div class="sidebar-menu-d-none">Logout</div>
            </div>
        </a>
    </div>
</div>
