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
                <a href="/" class="navbar-brand p-0">
    <img src="{{ asset('user/assets/img/logo1.png') }}" 
         alt="SchoolPass Logo" 
         style="max-height: 90px; height: auto; width: auto;">
</a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#top" class="nav-item nav-link active">Beranda</a>
                        <a href="#visi-misi" class="nav-item nav-link">Visi & Misi</a>
                        <a href="#tentang-kami" class="nav-item nav-link">Tentang Kami</a>
                        <a href="#tim" class="nav-item nav-link">Tim</a>
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

                    .nav-profile {
                        display: flex;
                        align-items: center;
                        margin-left: 15px;
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
            </nav>
            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Solusi Digital Berkelas untuk Mengelola Surat
                                Izin dengan Cepat, Aman, dan Elegan.</h1>
                            <p class="text-white pb-3 animated zoomIn">SchoolPass membantu sekolah mengelola proses
                                surat
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
        <div class="container-xxl py-5" id="visi-misi">
            <style>
                #visi-misi {
                    scroll-margin-top: 120p;
                }
            </style>
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
                            src="{{ asset('user/assets/img/foto1.png') }}" alt="foto1">
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Start -->
        <div class="container-xxl py-5" id="tentang-kami">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2">
                    <h6 class="position-relative d-inline text-primary ps-4">Layanan Kami</h6>
                    <h2 class="mt-2">Tentang Kami</h2>
                </div>
                <style>
                    #tentang-kami {
                        scroll-margin-top: 120px;
                    }
                </style>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-book fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Absen</h5>
                            <p>Dengan layanan absen online, pencatatan kehadiran dapat dilakukan secara real-time guna
                                meningkatkan efisiensi administrasi.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-file-signature fa-2x"></i>
                            </div>

                            <h5 class="mb-3">Surat Izin</h5>
                            <p>Sistem surat izin dirancang untuk mempermudah proses administrasi perizinan melalui
                                pengajuan yang lebih praktis dan transparan.</p>
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
                            <p>merupakan bangunan atau lembaga untuk belajar dan mengajar serta tempat menerima dan
                                memberi pelajaran. </p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-user-friends fa-2x"></i>
                            </div>
                            <h5 class="mb-3">App Development</h5>
                            <p>Pengembangan digital yang dirancang untuk mendukung sistem pendidikan agar lebih efektif, 
                                modern, dan mudah digunakan oleh siswa maupun sekolah.</p>
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

                <div class="section-title position-relative text-center mb-5 pb-2">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                    <h2 class="mt-2">administration of student permits</h2>
                </div>


                <div class="container my-5">
                    <div class="row g-4 align-items-center rounded p-4 reveal-parent"
                        style="background: linear-gradient(135deg, #0a5ff5, #0dc6ff); color:white;">

                        <!-- LEFT SECTION -->
                        <div class="col-lg-5 reveal">
                            <img class="img-fluid wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('admin/assets/img/foto2.png') }}" alt="foto1">
                        </div>

                        <!-- RIGHT SECTION -->
                        <div class="col-lg-7">
                            <div class="row g-4">

                                <div class="col-md-6 reveal" style="transition-delay:.2s">
                                    <div class="p-4 rounded" style="background:white; color:#333;">
                                        <div class="mb-3">
                                            <div class="p-3 rounded"
                                                style="width:55px; background:#e8f1ff; color:#0057ff;">
                                                <i class="fa fa-file-signature fa-lg"></i>
                                            </div>
                                        </div>
                                        <h5 class="fw-bold">Perizinan Siswa</h5>
                                        <p class="m-0">Ajukan izin sakit secara online dengan mudah</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 reveal" style="transition-delay:.2s">
                                    <div class="p-4 rounded" style="background:white; color:#333;">
                                        <div class="mb-3">
                                            <div class="p-3 rounded"
                                                style="width:55px; background:#e8f1ff; color:#0057ff;">
                                                <i class="fa fa-paper-plane fa-lg"></i>
                                            </div>
                                        </div>
                                        <h5 class="fw-bold">Pengajuan Izin</h5>
                                        <p class="m-0">Sistem izin digital untuk siswa dengan proses cepat praktis</p>
                                    </div>
                                </div>


                                <div class="col-md-6 reveal" style="transition-delay:.3s">
                                    <div class="p-4 rounded" style="background:white; color:#333;">
                                        <div class="mb-3">
                                            <div class="p-3 rounded"
                                                style="width:55px; background:#e8f1ff; color:#0057ff;">
                                                <i class="fa fa-envelope fa-lg"></i>
                                            </div>
                                        </div>
                                        <h5 class="fw-bold">Surat Keterangan Online</h5>
                                        <p class="m-0">Pengajuan surat keterangan aktif sekolah secara digital</p>
                                    </div>
                                </div>

                                <div class="col-md-6 reveal" style="transition-delay:.4s">
                                    <div class="p-4 rounded" style="background:white; color:#333;">
                                        <div class="mb-3">
                                            <div class="p-3 rounded"
                                                style="width:55px; background:#e8f1ff; color:#0057ff;">
                                                <i class="fa fa-chalkboard-teacher fa-lg"></i>
                                            </div>
                                        </div>
                                        <h5 class="fw-bold">Validasi Guru/Wali Kelas</h5>
                                        <p class="m-0">Proses persetujuan izin yang cepat</p>
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
                                <div class="ps-3">
                                    <h6 class="text-white mb-1">Digital dalam Dunia Pendidikan</h6>
                                    <p> Perkembangan teknologi telah membawa perubahan besar dalam berbagai sektor,
                                        termasuk pendidikan. Sekolah kini mulai beralih dari proses manual menuju sistem
                                        digital yang lebih efisien, cepat, dan mudah diakses</p>
                                </div>
                            </div>
                            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                                <div class="ps-3">
                                    <h6 class="text-white mb-1">Manfaat Digital bagi Siswa</h6>
                                    <p>Penggunaan layanan digital seperti SchoolPass membantu siswa menjadi lebih
                                        mandiri,
                                        teratur, dan bertanggung jawab. Mereka dapat mengajukan izin, melihat riwayat
                                        izin,
                                        serta menerima persetujuan secara langsung melalui perangkat mereka.</p>
                                </div>
                            </div>
                            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                                <div class="ps-3">
                                    <h6 class="text-white mb-1">Manfaat Surat Izin Digital</h6>
                                    <p>Surat izin digital memberikan solusi modern bagi sekolah dalam mengelola
                                        perizinan siswa.
                                        Dengan sistem ini, orang tua dan siswa dapat mengajukan izin secara online tanpa
                                        perlu
                                        membawa surat fisik.</p>
                                </div>
                            </div>
                            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                                <div class="ps-3">
                                    <h6 class="text-white mb-1">Lingkungan Sekolah yang Digital & Efisien</h6>
                                    <p>Lingkungan sekolah yang menerapkan teknologi digital akan bekerja lebih efektif
                                        dan hemat waktu.
                                        Administrasi menjadi lebih tertib, tumpukan kertas berkurang, dan komunikasi
                                        antara guru, siswa,
                                        serta orang tua menjadi lebih cepat.</p>
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
        <div class="container-xxl py-5" id="tim">
    <style>
        #tim {
            scroll-margin-top: 120px; /* supaya tidak ketutup navbar */
        }
    </style>

    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Tim</h6>
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
                                <img class="img-fluid rounded w-100" src="{{ asset('user/assets/img/team-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Khairul Ikhsan</h5>
                                <small>DESIGN UI/UX</small>
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
                                <img class="img-fluid rounded w-100" src="{{ asset('user/assets/img/lelek2.png') }}"
                                    alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Rizky Anugrah Ramadhan</h5>
                                <small>BACK END & PENGUJI QA</small>
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
                                <img class="img-fluid rounded w-100" src="{{ asset('user/assets/img/team-3.jpg') }}"
                                    alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Fairisna</h5>
                                <small>FRONT END</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
        <div class="container-fluid text-light footer mt-5 pt-5 wow fadeIn"
     style="background-color: #1619ED;"
     data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Hubung Kami</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i> USA,Bengkalis</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+6289649124200</p>
                        <p><i class="fa fa-envelope me-3"></i>School Pass@gmail.com</p>
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
                        <a href="#top" class="btn btn-link">Beranda</a>
                        <a href="#visi-misi" class="btn btn-link">Visi & Misi</a>
                        <a href="#tentang-kami" class="btn btn-link">Tentang Kami</a>
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
