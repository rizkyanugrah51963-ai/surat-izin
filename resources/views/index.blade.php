<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SchoolPass -Surat Izin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/style(1).css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/testimonial.css') }}">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa"></i>School<span class="fs-5">Pass</span></h1>

                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Beranda</a>
                        <a href="about.html" class="nav-item nav-link">Visi & Misi</a>
                        <a href="project.html" class="nav-item nav-link">Tentang Kami</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Bantuan</a>
                            <div class="dropdown-menu m-0">
                                <a href="user.team.html" class="dropdown-item">Hubungi</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="{{ url('/login') }}" class="nav-item nav-link">Login</a>

                    </div>
                    <button type="button" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">
                        <a href="/register" class="text-light text-decoration-none">Sign Up</a>

                    </button>

                </div>

                <style>
                    /* Avatar styling */
                    .profile-img {
                        width: 42px;
                        height: 42px;
                        border-radius: 50%;
                        object-fit: cover;
                        border: 2px solid #ffffff80;
                        cursor: pointer;
                        transition: .3s ease;
                    }

                    .profile-img:hover {
                        transform: scale(1.08);
                    }

                    /* Pastikan avatar sejajar dengan navbar */
                    .nav-profile {
                        display: flex;
                        align-items: center;
                        margin-left: 15px;
                        /* memberi jarak sedikit dari sign up */
                    }

                    .nav-profile .dropdown-menu {
                        border-radius: 10px;
                        padding: 8px 0;
                        min-width: 180px;
                        text-align: center;
                    }

                    .nav-profile .dropdown-menu a {
                        padding: 10px 18px;
                        font-size: 15px;
                        text-align: center;
                        transition: .2s;
                    }

                    .nav-profile .dropdown-menu a:hover {
                        background: #eef2ff;
                    }
                </style>


                <div class="dropdown nav-profile ms-3">
                    <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                        <img src="{{ asset('user/assets/img/Adudu.png') }}" class="profile-img" alt="Profile">
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow">
                        <a href="{{ route('profile') }}" class="dropdown-item">My Profile</a>

                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Solusi Digital Berkelas untuk Mengelola Surat
                                Izin dengan Cepat, Aman, dan Elegan.</h1>
                            <p class="text-white pb-3 animated zoomIn">SchoolPass membantu sekolah mengelola proses surat
                                izin dengan lebih cepat, aman, dan terorganisir.
                                Semua pengajuan tersimpan secara digital sehingga mudah dipantau kapan saja dan di mana
                                saja.</p>
                            <a href=""
                                class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Mulai
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <!-- KIRI: Visi & Misi -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">SchoolPass – Solusi Administrasi Sekolah Modern</h2>
                        </div>
                        <!-- Visi -->
                        <div class="mb-4">
                            <h4 class="text-primary">Visi Kami</h4>
                            <p>
                                Menciptakan sistem administrasi sekolah yang efisien, transparan, dan modern
                                dengan menghilangkan proses manual yang menghambat pekerjaan.
                            </p>
                        </div>

                        <!-- Misi -->
                        <div class="mb-4">
                            <h4 class="text-primary">Misi Kami</h4>
                            <ul class="mb-0">
                                <li>Mempermudah komunikasi antara siswa, guru, dan staf akademik.</li>
                                <li>Memberikan akses data yang cepat, akurat, dan mudah dipantau.</li>
                                <li>Menghadirkan solusi digital yang aman, inovatif, dan mudah diterapkan.</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s"
                            src="{{ asset('user/assets/img/gambar2.png') }}" alt="Siswa">
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                    <h2 class="mt-2">What Solutions We Provide</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-book fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Absen</h5>
                            <p>Dengan layanan absen online, pencatatan kehadiran dapat dilakukan secara real-time guna meningkatkan efisiensi administrasi.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-file-signature fa-2x"></i>
                            </div>

                            <h5 class="mb-3">Surat Izin</h5>
                            <p>Sistem surat izin dirancang untuk mempermudah proses administrasi perizinan melalui pengajuan yang lebih praktis dan transparan.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-chalkboard-teacher fa-2x"></i>
                            </div>

                            <h5 class="mb-3">Guru</h5>
                            <p>guru adalah orang yang memandu muridnya dalam jalan menuju kebenaran.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-users fa-2x"></i>
                            </div>

                            <h5 class="mb-3">Siswa</h5>
                            <p>siswa tersebut belajar untuk mendapatkan ilmu pengetahuan dan untuk mencapai
pemahaman ilmu yang telah didapat dunia pendidikan.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
    <i class="fa fa-school fa-2x"></i>
</div>
                            <h5 class="mb-3">Sekolah</h5>
                            <p>merupakan bangunan atau lembaga untuk belajar dan mengajar serta tempat menerima dan memberi pelajaran. </p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
    <i class="fa fa-user-friends fa-2x"></i>
</div>
                            <h5 class="mb-3">App Development</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed
                                stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Portfolio Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                    <h2 class="mt-2">Recently Launched Projects</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <li class="btn px-3 pe-4" data-filter=".first">Design</li>
                            <li class="btn px-3 pe-4" data-filter=".second">Development</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->


        <!-- Testimonial Start -->
        <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p> et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                            <script src="{{ asset('user/assets/js/testimonial.js') }}"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Team</h6>
                    <h2 class="mt-2">Anggota Panitia</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="{{ asset('user/assets/img/team-1.jpg') }}" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Khairul Ikhsan</h5>
                                <small>Anggota</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="{{ asset('user/assets/img/lelek2.png') }}" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Rizki Anungrah Ramadhan</h5>
                                <small>Koordinator</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="{{ asset('user/assets/img/team-3.jpg') }}" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Fairisna</h5>
                                <small>Anggota</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Project Gallery</h5>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-2.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-3.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-4.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-5.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-6.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                            non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                                target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
                class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/user/assets/lib/wow/wow.min.js"></script>
    <script src="/user/assets/lib/easing/easing.min.js"></script>
    <script src="/user/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/user/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/user/assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/user/assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="user/assets/js/main.js"></script>
</body>

</html>
