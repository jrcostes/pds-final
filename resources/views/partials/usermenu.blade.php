<style>
    .sidebar {
        background-color: #1D578A;
        opacity: 0.6;
    }

    .nav {
        font-family: 'Nunito', 'Segoe UI';
        font-weight: bold;
    }
</style>
<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("user.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('Datasheets') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("user.forms") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('My Form') }}
                </a>
            </li>




            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            {{ trans('Change Password') }}
                        </a>
                    </li>

            @endif
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('Logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
