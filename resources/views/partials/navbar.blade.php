<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        <h1 class="m-0">Absen<span class="fs-5">Flow</span></h1>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-5">
            <a href="/" class="nav-item nav-link active">Beranda</a>
            <a href="/program" class="nav-item nav-link">Program</a>
            <a href="/tentang" class="nav-item nav-link">Tentang Kami</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a class="dropdown-item" href="/team">Our Team</a>
                    <a class="dropdown-item" href="/testimonial">Testimonial</a>
                </div>
            </div>

            <a href="/login" class="nav-item nav-link">Login</a>
        </div>

        <!-- Sign Up -->
        <a href="/register" class="text-light text-decoration-none">Sign Up</a>


        <!-- Profile -->
        <style>
            .profile-img {
                width: 42px;
                height: 42px;
                border-radius: 50%;
                object-fit: cover;
                border: 2px solid #ffffff80;
                cursor: pointer;
                transition: .3s;
            }
            .profile-img:hover { transform: scale(1.08); }

            .nav-profile .dropdown-menu { text-align:center; }
        </style>

        <div class="dropdown nav-profile ms-3">
            <a href="#" data-bs-toggle="dropdown">
                <img src="{{ asset('user/assets/img/team-1.jpg') }}" class="profile-img" alt="profile">
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
