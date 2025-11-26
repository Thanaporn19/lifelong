<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>CMU School of Lifelong Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons (ใช้ Bootstrap Icons ง่ายๆ) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- jQuery 3 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body {
            font-family: "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", Arial, sans-serif;
            background: #f5f7fb;
        }

        /* hero background */
        .hero-wrapper {
    min-height: 100vh;
    background-image: url('assets/img/bg-login.svg');
    background-size: cover;
    background-position: center;
    position: relative;
}

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.25), rgba(0,0,0,0.35));
        }

        /* top navbar */
        .top-navbar {
            background-color: rgba(255,255,255,0.95);
            backdrop-filter: blur(8px);
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
        }

        .top-navbar .navbar-brand {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
        }

        .top-navbar .brand-text-small {
            font-size: .8rem;
            line-height: 1.1;
        }

        /* main card */
        .login-card {
    background: rgba(255,255,255,0.96);
    border-radius: 24px;
    box-shadow: 0 18px 50px rgba(0,0,0,0.22);
    backdrop-filter: blur(12px);
    margin-top: 250px; /* 👈 เพิ่มตรงนี้ เพื่อเลื่อนลงมา */
}

        .login-card .form-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 0 1px 7px rgba(0,0,0,0.55);
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
            padding: 2rem 1.5rem;
        }

        .provider-btn {
            border-radius: 999px;
            font-weight: 500;
            border-width: 1.5px;
            padding: .55rem 1rem;
        }

        .btn-google {
            border-color: #dadce0;
        }
        .btn-google i {
            color: #db4437;
        }

        .btn-line {
            background-color: #06C755;
            border-color: #06C755;
            color: #ffffff;
        }

        .btn-cmu {
            border-color: #6c2c7b;
        }

        .signup-outline {
            border-radius: 999px;
            padding: .6rem 1.25rem;
            font-weight: 500;
        }

        .split-line {
            border-left: 1px solid #e4e4e4;
        }

        .btn-primary-purple {
            background-color: #6f3fa8;
            border-color: #6f3fa8;
            border-radius: 999px;
            font-weight: 600;
        }

        .btn-primary-purple:hover {
            background-color: #5a308b;
            border-color: #5a308b;
        }

        .btn-primary-purple {
            color: #fff !important;
        }

        .help-link {
            font-size: .9rem;
        }

        /* footer */
        .lifelong-footer {
            font-size: .85rem;
            color: #f8f9fa;
        }

        .lifelong-footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .lifelong-footer a:hover {
            text-decoration: underline;
        }

        /* mobile tweaks */
        @media (max-width: 991.98px) {
            .hero-wrapper {
                background-position: center bottom;
            }

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
                border-top: 1px solid #e4e4e4;
                margin-top: 1rem;
                padding-top: 1.5rem;
            }

            .desktop-title-area {
                text-align: center;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>

<div class="hero-wrapper">
    <div class="hero-overlay"></div>

    <!-- TOP NAV -->
    <nav class="navbar navbar-expand-lg top-navbar fixed-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand" href="#">
                 <img src="<?= base_url('assets/img/logo-login1.svg'); ?>" alt="Lifelong" class="me-2 logo-img"> 
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav"
                    aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="topNav">
                <ul class="navbar-nav align-items-lg-center gap-lg-3">
                    <li class="nav-item d-none d-lg-flex align-items-center">
                        <button class="btn btn-sm btn-outline-secondary me-1" type="button">A-</button>
                        <button class="btn btn-sm btn-outline-secondary me-3" type="button">A+</button>
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
                        <a class="btn btn-outline-secondary dropdown-toggle" href="#" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            TH
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                            <li><a class="dropdown-item" href="#">TH</a></li>
                            <li><a class="dropdown-item" href="#">EN</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container py-5">
        <div class="row justify-content-center align-items-center" style="min-height: 90vh;">
            <div class="col-12 col-lg-10">
                <div class="login-card p-3 p-lg-4 mt-5 mt-lg-0 position-relative">
                    <div class="row">
                        <div class="col-12 text-center mb-3 desktop-title-area">
                                <img src="<?= base_url('assets/img/logo-login2.svg'); ?>" alt="Lifelong" class="me-2 logo-img">
                              <div class="form-subtitle">เข้าสู่ระบบ CMU School of Lifelong Education</div>
                         <div class="form-title">Chiang Mai University</div>
                    </div>
                </div>

                    <div class="login-card-inner">
                        <div class="row">
                            <!-- LEFT: Social / CMU Login -->
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <h6 class="fw-semibold mb-3 text-center text-lg-start">
                                    ลงชื่อเข้าใช้ด้วยตัวเลือกอื่น ๆ
                                </h6>

            <div class="d-grid gap-2">
                <!-- Google -->
                    <button type="button" class="btn btn-light provider-btn">
                        <img src="<?= base_url('assets/img/logo-google.svg'); ?>" 
                        class="img-fluid me-2" 
                        style="width: 20px; height: 20px;">
                        ลงชื่อเข้าใช้ด้วย Google
                    </button>

                <!-- Line -->
                    <button type="button" class="btn provider-btn btn-line">
                         <img src="<?= base_url('assets/img/icon-line.svg'); ?>" 
                        class="img-fluid me-2" 
                        style="width: 20px; height: 20px;">
                        ลงชื่อเข้าใช้ด้วย Line
                    </button>

                <!-- CMU -->
                    <button type="button" class="btn btn-light provider-btn btn-cmu">
                        <img src="<?= base_url('assets/img/logo-cmu.svg'); ?>" 
                        class="img-fluid me-2" 
                        style="width: 20px; height: 20px;">
                        ลงชื่อเข้าใช้ด้วย CMU Account
                    </button>
            </div>

                        <div class="my-4">
                            <div class="text-center text-muted small">หากคุณยังไม่มีบัญชี ?</div>
                                <div class="d-grid mt-2">
                                    <button class="btn btn-outline-dark signup-outline">สมัครสมาชิก</button>
                                </div>
                            </div>
                        </div>

                            <!-- DIVIDER -->
                            <div class="col-12 col-lg-1 d-flex justify-content-center align-items-center">
                                <div class="d-none d-lg-block split-line text-center">
                                    <span class="badge rounded-pill text-bg-light">หรือ</span>
                                </div>
                                <div class="d-lg-none w-100 text-center mt-2 mb-3">
                                    <span class="badge rounded-pill text-bg-light">หรือ</span>
                                </div>
                            </div>

                            <!-- RIGHT: Lifelong Account -->
                            <div class="col-12 col-lg-5 split-line">
                                <h6 class="fw-semibold mb-3 text-center text-lg-start">
                                    ลงชื่อเข้าใช้ด้วย CMU Lifelong Account
                                </h6>

                                <form method="post" action="#">
                                    <div class="mb-3">
                                        <label class="form-label small">บัญชีผู้ใช้</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-person"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="บัญชีผู้ใช้">
                                            <span class="input-group-text d-none d-md-inline">@lifelong.cmu.ac.th</span>
                                        </div>
                                        <small class="text-muted d-md-none">
                                            @lifelong.cmu.ac.th
                                        </small>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label small">รหัสผ่าน</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                            <input type="password" class="form-control" placeholder="รหัสผ่าน">
                                        </div>
                                    </div>

                                    <div class="d-grid mb-2">
                                        <button type="submit" class="btn btn-primary-purple">
                                            เข้าสู่ระบบ
                                        </button>
                                    </div>

                                    <div class="text-center mt-2">
                                        <a href="#" class="help-link">มีปัญหาในการเข้าสู่ระบบ?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.login-card-inner -->
                </div><!-- /.login-card -->
            </div>
        </div>

        <!-- FOOTER -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center lifelong-footer mb-3">
                <div class="mb-3">
                    <a href="#"><i class="bi bi-facebook fs-4 me-3"></i></a>
                    <a href="#"><i class="bi bi-line fs-4 me-3"></i></a>
                    <a href="#"><i class="bi bi-twitter-x fs-4 me-3"></i></a>
                    <a href="#"><i class="bi bi-instagram fs-4"></i></a>
                </div>
                <div>
                    Tel: (+66)53-943695-6, (+66)64-9959333 &nbsp;&nbsp;
                    Email: <a href="mailto:support_lifelong@cmu.ac.th">support_lifelong@cmu.ac.th</a>
                </div>
                <div class="mt-1">
                    © Copyright School of Lifelong Education, Chiang Mai University. All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // ตัวอย่าง jQuery เล็กน้อย (เผื่อจะใช้ต่อยอด)
    $(function () {
        $('.btn-google, .btn-line, .btn-cmu').on('click', function () {
            // TODO: redirect ไปหน้า OAuth ตามจริง
            alert('TODO: connect provider: ' + $(this).text().trim());
        });
    });
</script>
</body>
</html>
