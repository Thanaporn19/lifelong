<?= $this->include('includes/header.php'); ?>
<?= $this->include('includes/scripts.php'); ?>
    <!-- CSS login แบบแยกไฟล์ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
       
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

</head>
<body>

<style>
.hero-wrapper {
    min-height: 100vh;   /*  เต็มความสูงจอ */
    background-image: url('<?= base_url("assets/img/login/bg-login.svg") ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>

<!-- พื้นหลังหลัก -->
<div class="hero-wrapper">
    <div class="hero-overlay"></div>

    <!-- แถบเมนูด้านบน -->
    <nav class="navbar navbar-expand-lg top-navbar fixed-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand" href="#">
                 <img src="<?= base_url('assets/img/login/logo-login1.svg'); ?>" alt="Lifelong" class="me-2 logo-img"> 
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

                    <!-- โลโก้ + ชื่อระบบ -->
                    <div class="row">
                        <div class="col-12 text-center mb-3 desktop-title-area">
                            <img src="<?= base_url('assets/img/login/logo-login2.svg'); ?>" alt="Lifelong" class="me-2 logo-img">
                            <div class="form-subtitle">เข้าสู่ระบบ CMU School of Lifelong Education</div>
                            <div class="form-title">Chiang Mai University</div>
                        </div>

                    <!-- กล่อง -->
                    <div class="login-card p-3 p-lg-4 mt-5 mt-lg-0 position-relative">
                        <div class="row">

                            <!-- ฝั่งซ้าย: ปุ่ม Social Login -->
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <h6 class="fw-semibold mb-3 text-center text-lg-start">ลงชื่อเข้าใช้ด้วยตัวเลือกอื่น ๆ</h6>
                                <div class="d-grid gap-3">

                                    <!-- Google--> 
                                    <button type="button" class="provider-btn btn-google">
                                        <img src="<?= base_url('assets/img/login/logo-google.svg'); ?>" class="img-fluid me-2" style="width: 20px; height: 20px;">
                                        ลงชื่อเข้าใช้ด้วย Google
                                    </button>

                                    <!-- Line -->
                                    <button type="button" class="provider-btn btn-line">
                                        <img src="<?= base_url('assets/img/login/logo-line.svg'); ?>" class="img-fluid me-2" style="width: 20px; height: 20px;">
                                        ลงชื่อเข้าใช้ด้วย Line
                                    </button>

                                    <!-- CMU -->
                                    <button type="button" class="btn btn-light provider-btn btn-cmu">
                                        <img src="<?= base_url('assets/img/login/logo-cmu.svg'); ?>" class="img-fluid me-2" style="width: 20px; height: 20px;">
                                        ลงชื่อเข้าใช้ด้วย CMU Account
                                    </button>
                                </div>

                                <!-- สมัครสมาชิก -->
                                <div class="my-4">
                                    <div class="text-start text-muted small">หากคุณยังไม่มีบัญชี ?</div>
                                    <div class="d-grid mt-2">
                                        <button class="btn btn-outline-dark signup-outline">สมัครสมาชิก</button>
                                    </div>
                                </div>
                            </div>

                            <!-- เส้นแบ่งตรงกลาง -->
                            <div class="col-12 col-lg-1 d-flex justify-content-center align-items-center">
                                <div class="d-none d-lg-block split-line text-center me-2">
                                    <div class="vertical-split-line">
                                        <span class="line top"></span>
                                        <span class="text">หรือ</span>
                                        <span class="line bottom"></span>
                                    </div>
                                 </div>
                            </div>

                            <!-- ฝั่งขวา: Login account -->
                            <div class="col-12 col-lg-5 split-line mt-5">
                                <h6 class="fw-semibold mb-3 text-center text-lg-start">ลงชื่อเข้าใช้ด้วย CMU Lifelong Account</h6>
                                <form method="post" action="#">

                                    <!-- Username -->
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                            <input type="text" class="form-control" placeholder="บัญชีผู้ใช้">
                                            <span class="input-group-text d-none d-md-inline bg-body-secondary">@lifelong.cmu.ac.th</span>
                                        </div>
                                        <small class="text-muted d-md-none">@lifelong.cmu.ac.th</small>
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                            <input type="password" class="form-control" placeholder="รหัสผ่าน">
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="d-grid mb-2">
                                        <a href="<?= base_url('desktop'); ?>" class="btn btn-primary-purple">เข้าสู่ระบบ</a>
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
                    © Copyright School of Lifelong Education, Chiang Mai University. All Rights Reserved
                </div>

            </div>
        </div>

    </div><!-- end container -->
</div><!-- end hero-wrapper -->

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
