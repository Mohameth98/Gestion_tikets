<div class="header" style="background-color: rgb(50, 95, 112)"  >

    <div class="header-left"  style="background-color: rgb(50, 95, 112)" >
        <a href="index.html" class="logo">
            <img src="assets/img/logo.png" alt="Logo" style="border-radius: 2px;">
        </a>
        <a href="index.html" class="logo logo-small">
            <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30" >
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


        <li class="nav-item dropdown noti-dropdown me-2">
            <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                <img src="assets/img/icons/header-icon-05.svg" alt="">
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
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
                        <h6>Mohameth Mbaye</h6>
                        <p class="text-muted mb-0">Agent de Bord</p>
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
                        <h6>Mohameth Mbaye</h6>
                        <p class="text-muted mb-0">Agent de bord</p>
                    </div>
                </div>
                <a class="dropdown-item" href="{{ route('profile') }}">Mon Profile</a>
                <a class="dropdown-item" href="login.html">Déconnexion</a>
            </div>
        </li>

    </ul>

</div>
