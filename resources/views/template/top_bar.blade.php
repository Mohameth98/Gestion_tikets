<div class="header">

<div class="header-left">
    <a href="index.html" class="logo">
        <img src="assets/img/logo.png" alt="Logo">
    </a>
    <a href="index.html" class="logo logo-small">
        <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
    </a>
</div>
<div class="menu-toggle">
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fas fa-bars"></i>
    </a>
</div>

<div class="top-nav-search">
    <form>
        <input type="text" class="form-control" placeholder="Search here">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>
<a class="mobile_btn" id="mobile_btn">
    <i class="fas fa-bars"></i>
</a>

<ul class="nav user-menu">
    <li class="nav-item dropdown noti-dropdown language-drop me-2">
        <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
            <img src="assets/img/icons/header-icon-01.svg" alt="">
        </a>
        <div class="dropdown-menu ">
            <div class="noti-content">
                <div>
                    <a class="dropdown-item" href="javascript:;"><i
                            class="flag flag-lr me-2"></i>English</a>
                    <a class="dropdown-item" href="javascript:;"><i
                            class="flag flag-bl me-2"></i>Francais</a>
                    <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                </div>
            </div>
        </div>
    </li>

    <li class="nav-item dropdown noti-dropdown me-2">
        <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
            <img src="assets/img/icons/header-icon-05.svg" alt="">
        </a>
        <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
            </div>
            <div class="noti-content">
                <ul class="notification-list">

                </ul>
            </div>
            <div class="topnav-dropdown-footer">
                <a href="#">View all Notifications</a>
            </div>
        </div>
    </li>

    <li class="nav-item zoom-screen me-2">
        <a href="#" class="nav-link header-nav-list win-maximize">
            <img src="assets/img/icons/header-icon-04.svg" alt="">
        </a>
    </li>

    <li class="nav-item dropdown has-arrow new-user-menus">
        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
            <span class="user-img">
                <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31"
                    alt="Soeng Souy">
                <div class="user-text">
                    <h6> @if($user) 
                     {{ $user->prenom }} {{ $user->nom }}
                    </h6>
                    <p class="text-muted mb-0">{{ $user->role }}</p>
                    @endif
                </div>
            </span>
        </a>
        <div class="dropdown-menu">
            <div class="user-header">
                <div class="avatar avatar-sm">
                    <img src="assets/img/profiles/avatar-01.jpg" alt="User Image"
                        class="avatar-img rounded-circle">
                </div>
                <div class="user-text">
                    <h6> @if($user) 
                     {{ $user->prenom }} {{ $user->nom }}
                    </h6>
                    <p class="text-muted mb-0">{{ $user->role }}</p>
                    @endif
                </div>
            </div>
            <a class="dropdown-item" href="{{ route('profil') }}">Mon Profil</a>
            <a class="dropdown-item" href="{{ route('logout') }}">déconnexion</a>
        </div>
    </li>

</ul>

</div>