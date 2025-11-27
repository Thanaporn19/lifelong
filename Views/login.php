<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8"> <!-- ตั้งค่าการเข้ารหัสเป็น UTF-8 เพื่อรองรับภาษาไทย -->
    <title>วิทยาลัยการศึกษาตลอดชีวิต</title> <!-- ชื่อหน้าเว็บ -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- ทำให้รองรับมือถือ -->

    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo_lifelong11.png') ?>"> <!-- ไอคอนบนแท็บ -->

    <!-- โหลดฟอนต์ Prompt จาก Google -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS สำหรับ UI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- jQuery 3 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Custom CSS หลักของเว็บ -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

    <!-- CSS login แบบแยกไฟล์ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">

    <style>
        body {
            font-family: "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", Arial, sans-serif;
            background: #f5f7fb; /* สีพื้นหลัง */
        }

        /* hero background */
        .hero-wrapper {
            min-height: 100vh; /* สูงเท่าหน้าจอ */
            background-image: url('assets/img/bg-login.svg'); /* รูปพื้นหลัง */
            background-size: cover; /* ขยายให้เต็ม */
            background-position: center; /* จัดตำแหน่ง */
            position: relative; /* เพื่อรองรับ overlay */
        }   

        .hero-overlay {
            position: absolute;
            inset: 0; /* ครอบคลุมเต็มพื้นที่ */
            background: linear-gradient(to bottom, rgba(0,0,0,0.25), rgba(0,0,0,0.35)); /* ไล่สีทึบเพื่ออ่านง่าย */
        }

        /* top navbar */
        .top-navbar {
            background-color: rgba(255,255,255,0.95); /* สีพื้นบางๆ แบบโปร่ง */
            backdrop-filter: blur(8px); /* เบลอพื้นหลัง */
            box-shadow: 0 4px 18px rgba(0,0,0,0.08); /* เงา */
        }

        .top-navbar .navbar-brand {
            display: flex; /* จัดเรียงโลโก้กับชื่อ */
            align-items: center;
            gap: 0.5rem; /* เว้นระยะ */
            font-weight: 600;
        }

        .top-navbar .brand-text-small {
            font-size: .8rem; /* ขนาดตัวอักษรเล็ก */
            line-height: 1.1;
        }

        /* การ์ด login หลัก */
        .login-card {
            background: rgba(255,255,255,0.96);
            border-radius: 24px;
            box-shadow: 0 18px 50px rgba(0,0,0,0.22);
            backdrop-filter: blur(12px);
            margin-top: 250px; /* เลื่อนลง */
        }

        .login-card .form-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 0 1px 7px rgba(0,0,0,0.55); /* ทำให้ตัวหนังสืออ่านง่ายขึ้น */
        }

        .login-card .form-subtitle {
            font-size: 1.1rem;
            font-weight: 600;
            color: #ffffff;
            text-shadow: 0 1px 6px rgba(0,0,0,0.55);
        }

        .login-card-inner {
            background: #ffffff;
            border-radius: 20px;
            padding: 2rem 1.5rem; /* ระยะห่างด้านใน */
        }

        /* ปุ่ม provider เช่น Google Line CMU */
        .provider-btn {
            border-radius: 999px; /* วงรี */
            font-weight: 500;
            border-width: 1.5px;
            padding: .55rem 1rem;
        }

        .btn-google { border-color: #dadce0; }
        .btn-google i { color: #db4437; } /* สีโลโก้ Google */

        .btn-line {
            background-color: #06C755;
            border-color: #06C755;
            color: #ffffff;
        }

        .btn-cmu {
            border-color: #6c2c7b; /* สีม่วง CMU */
        }

        .signup-outline {
            border-radius: 999px;
            padding: .6rem 1.25rem;
            font-weight: 500;
        }

        .split-line {
            border-left: 1px solid #e4e4e4; /* เส้นแบ่งระหว่างซ้าย/ขวา */
        }

        /* ปุ่มม่วง CMU */
        .btn-primary-purple {
            background-color: #6f3fa8;
            border-color: #6f3fa8;
            border-radius: 999px;
            font-weight: 600;
            color: #fff !important;
        }

        .btn-primary-purple:hover {
            background-color: #5a308b;
            border-color: #5a308b;
        }

        .help-link { font-size: .9rem; }

        /* footer */
        .lifelong-footer {
            font-size: .85rem;
            color: #f8f9fa;
        }

        .lifelong-footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .lifelong-footer a:hover { text-decoration: underline; }

        /* mobile responsive */
        @media (max-width: 991.98px) {
            .hero-wrapper { background-position: center bottom; }

            .login-card {
                box-shadow: none;
                border-radius: 0;
                background: transparent;
            }

            .login-card-inner {
                border-radius: 16px;
                padding: 1.5rem 1.25rem;
            }

            .split-line {
                border-left: none;
                border-top: 1px solid #e4e4e4; /* เส้นบนแทน */
                margin-top: 1rem;
                padding-top: 1.5rem;
            }

            .desktop-title-area {
                text-align: center; /* ชื่ออยู่กลาง */
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>

<!-- พื้นหลังหลัก -->
<div class="hero-wrapper">
    <div class="hero-overlay"></div>

    <!-- แถบเมนูด้านบน -->
    <nav class="navbar navbar-expand-lg top-navbar fixed-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand" href="#">
                 <img src="<?= base_url('assets/img/logo-login1.svg'); ?>" alt="Lifelong" class="me-2 logo-img"> 
            </a>

            <!-- ปุ่มเมนูบนมือถือ -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav"
                    aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- เมนูด้านขวา -->
            <div class="collapse navbar-collapse justify-content-end" id="topNav">
                <ul class="navbar-nav align-items-lg-center gap-lg-3">

                    <li class="nav-item d-none d-lg-flex align-items-center">
                        <!-- ปุ่มปรับขนาดตัวอักษร -->
                        <button class="btn btn-sm btn-outline-secondary me-1">A-</button>
                        <button class="btn btn-sm btn-outline-secondary me-3">A+</button>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Q&A</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">เข้าสู่ระบบ</a>
                    </li>

                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-primary-purple" href="#">สมัครสมาชิก</a>
                    </li>

                    <li class="nav-item dropdown ms-lg-2">
                        <a class="btn btn-outline-secondary dropdown-toggle" href="#" id="langDropdown" data-bs-toggle="dropdown">
                            TH
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item">TH</a></li>
                            <li><a class="dropdown-item">EN</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- เนื้อหา MAIN -->
    <div class="container py-5">
        <div class="row justify-content-center align-items-center" style="min-height: 90vh;">
            <div class="col-12 col-lg-10">

                <!-- การ์ด Login -->
                <div class="login-card p-3 p-lg-4 mt-5 mt-lg-0 position-relative">

                    <!-- โลโก้ + ชื่อระบบ -->
                    <div class="row">
                        <div class="col-12 text-center mb-3 desktop-title-area">
                            <img src="<?= base_url('assets/img/logo-login2.svg'); ?>" alt="Lifelong" class="me-2 logo-img">

                            <div class="form-subtitle">เข้าสู่ระบบ CMU School of Lifelong Education</div>
                            <div class="form-title">Chiang Mai University</div>
                        </div>
                    </div>

                    <!-- กล่องด้านใน -->
                    <div class="login-card-inner">
                        <div class="row">

                            <!-- ฝั่งซ้าย: ปุ่ม Social Login -->
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <h6 class="fw-semibold mb-3 text-center text-lg-start">ลงชื่อเข้าใช้ด้วยตัวเลือกอื่น ๆ</h6>

                                <div class="d-grid gap-2">

                                    <!-- Google -->
                                    <button type="button" class="btn btn-light provider-btn">
                                        <img src="<?= base_url('assets/img/logo-google.svg'); ?>" class="img-fluid me-2" style="width: 20px; height: 20px;">
                                        ลงชื่อเข้าใช้ด้วย Google
                                    </button>

                                    <!-- Line -->
                                    <button type="button" class="btn provider-btn btn-line">
                                        <img src="<?= base_url('assets/img/icon-line.svg'); ?>" class="img-fluid me-2" style="width: 20px; height: 20px;">
                                        ลงชื่อเข้าใช้ด้วย Line
                                    </button>

                                    <!-- CMU -->
                                    <button type="button" class="btn btn-light provider-btn btn-cmu">
                                        <img src="<?= base_url('assets/img/logo-cmu.svg'); ?>" class="img-fluid me-2" style="width: 20px; height: 20px;">
                                        ลงชื่อเข้าใช้ด้วย CMU Account
                                    </button>

                                </div>

                                <!-- สมัครสมาชิก -->
                                <div class="my-4">
                                    <div class="text-center text-muted small">หากคุณยังไม่มีบัญชี ?</div>
                                    <div class="d-grid mt-2">
                                        <button class="btn btn-outline-dark signup-outline">สมัครสมาชิก</button>
                                    </div>
                                </div>
                            </div>

                            <!-- เส้นแบ่งตรงกลาง -->
                            <div class="col-12 col-lg-1 d-flex justify-content-center align-items-center">
                                <div class="d-none d-lg-block split-line text-center">
                                    <span class="badge rounded-pill text-bg-light">หรือ</span>
                                </div>
                                <div class="d-lg-none w-100 text-center mt-2 mb-3">
                                    <span class="badge rounded-pill text-bg-light">หรือ</span>
                                </div>
                            </div>

                            <!-- ฝั่งขวา: Login account -->
                            <div class="col-12 col-lg-5 split-line">
                                <h6 class="fw-semibold mb-3 text-center text-lg-start">ลงชื่อเข้าใช้ด้วย CMU Lifelong Account</h6>

                                <form method="post" action="#">

                                    <!-- Username -->
                                    <div class="mb-3">
                                        <label class="form-label small">บัญชีผู้ใช้</label>

                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input type="text" class="form-control" placeholder="บัญชีผู้ใช้">
                                            <span class="input-group-text d-none d-md-inline">@lifelong.cmu.ac.th</span>
                                        </div>

                                        <small class="text-muted d-md-none">@lifelong.cmu.ac.th</small>
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label class="form-label small">รหัสผ่าน</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="รหัสผ่าน">
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="d-grid mb-2">
                                        <button type="submit" class="btn btn-primary-purple">เข้าสู่ระบบ</button>
                                    </div>

                                    <!-- Help -->
                                    <div class="text-center mt-2">
                                        <a href="#" class="help-link">มีปัญหาในการเข้าสู่ระบบ?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end login-card-inner -->

                </div> <!-- end login-card -->
            </div>
        </div>

        <!-- FOOTER -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center lifelong-footer mb-3">

                <!-- Social -->
                <div class="mb-3">
                    <a href="#"><i class="bi bi-facebook fs-4 me-3"></i></a>
                    <a href="#"><i class="bi bi-line fs-4 me-3"></i></a>
                    <a href="#"><i class="bi bi-twitter-x fs-4 me-3"></i></a>
                    <a href="#"><i class="bi bi-instagram fs-4"></i></a>
                </div>

                <!-- Contact -->
                <div>
                    Tel: (+66)53-943695-6, (+66)64-9959333 &nbsp;&nbsp;
                    Email: <a href="mailto:support_lifelong@cmu.ac.th">support_lifelong@cmu.ac.th</a>
                </div>

                <!-- Copyright -->
                <div class="mt-1">
                    © School of Lifelong Education, CMU. All Rights Reserved
                </div>

            </div>
        </div>

    </div><!-- end container -->
</div><!-- end hero-wrapper -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // เหตุการณ์คลิกปุ่ม provider login
    $(function () {
        $('.btn-google, .btn-line, .btn-cmu').on('click', function () {
            alert('TODO: connect provider: ' + $(this).text().trim());
        });
    });
</script>

</body>
</html>
