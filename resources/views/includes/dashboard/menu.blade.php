<div class="dashboard_section_row_lft">
    <a href="dashboard.html" class="sidebar_close dashboard_sidebar_close"><i
            class="fa fa-times"></i></a>
    <div class="dashboard_sidebar">
        <div class="dashboard_sliderbar_menu">
            <a href="{{ url('dashboard')}}" class="dashboard_menu_item {{ Route::is('dashboard') ? 'dashboard_active' : '' }}">
                <div class="dashboard_menu_item_img">
                    <img src="{{ url('public/assets/img/Home.svg')}}" alt="home" class="img-fluid">
                </div>
                <span>Home</span>
            </a>

            <a href="{{ route('profile')}}" class="dashboard_menu_item {{ Route::is('profile') ? 'dashboard_active' : '' }}">
                <div class="dashboard_menu_item_img">
                    <img src="{{ url('public/assets/img/profile.svg')}}" alt="profile" class="img-fluid">
                </div>
                <span>Profile</span>
            </a>

            <a href="{{ route('registerorg')}}" class="dashboard_menu_item {{ Route::is('registerorg') ? 'dashboard_active' : '' }}">
                <div class="dashboard_menu_item_img">
                    <img src="{{ url('public/assets/img/register-organization.svg')}}"
                        alt="register-organization">
                </div>
                <span>Register organisation</span>
            </a>

            <a href="{{ route('knowledgebase')}}" class="dashboard_menu_item {{ Route::is('knowledgebase') ? 'dashboard_active' : '' }}">
                <div class="dashboard_menu_item_img">
                    <img src="{{ url('public/assets/img/knowledgebase.svg')}}" alt="knowledgebase">
                </div>
                <span>Knowledgebase</span>
            </a>

            <a href="{{ route('change-password') }}" class="dashboard_menu_item {{ Route::is('change-password') ? 'dashboard_active' : '' }}">
                <div class="dashboard_menu_item_img">
                    <img src="{{ url('public/assets/img/change-password.svg')}}" alt="change-password"
                        class="img-fluid">
                </div>
                <span>Change Password</span>
            </a>
            <a href="{{ route('logout') }}" class="dashboard_menu_item {{ Route::is('logout') ? 'dashboard_active' : '' }}">
                <div class="dashboard_menu_item_img">
                    <img src="{{ url('public/assets/img/logout.svg')}}" alt="logout" class="img-fluid">
                </div>
                <span>Logout</span>
            </a>

        </div>
    </div>
</div>
