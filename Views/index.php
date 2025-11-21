<!doctype html>
<html lang="th">
<head>
  <base href="<?= base_url(); ?>">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PROMPT</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>


<body>

  <!-- NAVBAR -->
  <header class="site-header fixed-top">
  <nav class="navbar navbar-expand-md main-navbar">
    <div class="container">

      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="ProMPT" class="me-2 logo-img">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="mainNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item ms-3">
            <a class="btn btn-outline-light btn-login" href="#">เข้าสู่ระบบ</a>
          </li>
          <li class="nav-item ms-2">
            <a class="btn btn-orange btn-register" href="#">สมัครสมาชิก</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
</header>

  <!-- HERO -->
  <section class="hero-section">

    <img src="<?= base_url('assets/img/hero-bg.svg'); ?>" class="hero-bg">
    <div class="hero-overlay"></div>

    <div class="container hero-container d-flex justify-content-center align-items-center text-center" style="height: 100vh;">
      <div class="row w-100">
        <div class="col-lg-7 mx-auto">
          <h1 class="hero-title">
            จัดการโครงการ พัฒนาหลักสูตร<br>ต่อยอดกิจกรรม แบบครบวงจร
          </h1>

          <a class="btn btn-lg btn-orange hero-cta mt-3" href="#">
            เริ่มต้นใช้งาน →
          </a>
        </div>
      </div>
    </div>

  </section>

  <!-- FEATURES CARDS -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center g-4">

        <div class="col-lg-4">
          <div class="feature-intro p-4">
            <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="ProMPT" class="me-2 logo-img">
            <p class="text-muted">
              ระบบจัดการโครงการการเรียนรู้และส่งเสริมองค์ความรู้สำหรับผู้สูงวัยในการสนับสนุนกิจกรรมการเรียนรู้ 
              และส่งเสริมการพัฒนาผลิตภัณท์ และภูมิปัญญาสำหรับผู้สูงวัยและเพิ่มช่องทางรายได้ของกลุ่มผู้ประกอบการผลิตภัณท์ 
              หรือบริการที่เข้าร่วม
            </p>
            <a class="btn btn-outline-success btn-sm" href="#">เรียนรู้โครงการ</a>
          </div>
        </div>

        <!-- CARD 1 -->
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card feature-card p-3 h-100 shadow-sm text-center">
            <div class="icon-circle orange">
              <i class="bi bi-easel-fill"></i>
            </div>
            <h6 class="mt-2">การบริหารโครงการ</h6>
            <p class="small text-muted">
              ระบบการบริหารทีมและจัดการโครงการแบบเป็นระบบและครบวงจร
            </p>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card feature-card p-3 h-100 shadow-sm text-center">
            <div class="icon-circle purple">
              <i class="bi bi-briefcase-fill"></i>
            </div>
            <h6 class="mt-2">การยื่นโครงการ</h6>
            <p class="small text-muted">
              สามารถยื่นโครงการเพื่อขอประเมินการรับทุนได้อย่างสะดวกและรวดเร็ว
            </p>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card feature-card p-3 h-100 shadow-sm text-center">
            <div class="icon-circle green">
              <i class="bi bi-mortarboard-fill"></i>
            </div>
            <h6 class="mt-2">หลักสูตรการเรียนรู้</h6>
            <p class="small text-muted">
              หลักสูตรมากมายเพื่อการจัดการโครงการทั้งแบบออนไลน์และแบบอบรมเชิงปฏิบัติ
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CONTENT SECTION 1 -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center g-4">

        <div class="col-md-6">
          <div class="illus-box p-4">
            <img src="<?= base_url('assets/img/img1.svg'); ?>" class="img-fluid">
          </div>
        </div>

        <div class="col-md-6">
          <h4>การบริหารโครงการ</h4>
          <p class="text-muted">
            จัดระเบียบโครงการด้วยโปรเจคทาสก์และสามารถติดตามการดำเนินงานของโครงการได้อย่างครอบคลุม
          </p>

          <ul class="list-unstyled">
            <li class="mb-2"><strong class="me-2">•</strong> ระบบโปรเจคทาสก์</li>
            <p class="text-muted">กำหนดทาสก์ในการทำงาน ทำให้คุณสามารถติดตามงานได้อย่างครบถ้วน</p>

            <li class="mb-2"><strong class="me-2">•</strong> การติดตามโครงการ</li>
            <p class="text-muted">สามารถติดตามสถิติของโครงการเพื่อช่วยพัฒนาและแก้ไขงานได้</p>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- CONTENT SECTION 2 -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center g-4">

        <div class="col-md-6 order-md-2">
          <div class="illus-box p-4 text-end">
            <img src="<?= base_url('assets/img/img2.svg'); ?>" class="img-fluid">
          </div>
        </div>

        <div class="col-md-6 order-md-1">
          <h4>การยื่นข้อเสนอโครงการ</h4>
          <p class="text-muted">
            โครงการที่คุณสร้างสามารถยื่นข้อเสนอเพื่อได้รับการประเมินภายในระบบได้
          </p>

          <ul class="list-unstyled">
            <li class="mb-2"><strong class="me-2">•</strong> ระบบประเมินโครงการ</li>
            <p class="text-muted">ผู้ทรงคุณวุฒิจะทำการประเมินโครงการของคุณ</p>

            <li class="mb-2"><strong class="me-2">•</strong> ระบบการรับทุน</li>
            <p class="text-muted">เมื่อผ่านการประเมิน คุณจะได้รับทุนเพื่อต่อยอดโครงการ</p>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- CONTENT SECTION 3 -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center g-4">

        <div class="col-md-6">
          <div class="illus-box p-4">
            <img src="<?= base_url('assets/img/img3.svg'); ?>" class="img-fluid">
          </div>
        </div>

        <div class="col-md-6">
          <h4>หลักสูตรการเรียนรู้</h4>
          <p class="text-muted">
            หลักสูตรทั้งแบบออนไลน์และแบบอบรมเชิงปฏิบัติ
          </p>

          <ul class="list-unstyled">
            <li class="mb-2"><strong class="me-2">•</strong> เรียนรู้ออนไลน์</li>
            <p class="text-muted">Lorem Ipsum is simply dummy text</p>

            <li class="mb-2"><strong class="me-2">•</strong> กิจกรรม workshop</li>
            <p class="text-muted">Lorem Ipsum is simply dummy text</p>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA BAR -->
  <section class="cta-bar py-4">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <div class="cta-icon me-3">▶</div>
        <div>
          <h6 class="mb-0">เริ่มต้นใช้งานระบบไปกับเรา</h6>
        </div>
      </div>

      <a class="btn btn-orange" href="#">เริ่มเข้าสู่ระบบ →</a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container py-5">
      <div class="row">

        <div class="col-md-4">
          <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="ProMPT" class="me-2 logo-img">
        </div>

        <div class="col-md-8">
          <ul class="list-inline text-md-end mt-3 mt-md-0">
            <li class="list-inline-item me-3"><a class="text-muted" href="#">หน้าหลัก</a></li>
            <li class="list-inline-item me-3"><a class="text-muted" href="#">Dashboard</a></li>
            <li class="list-inline-item me-3"><a class="text-muted" href="#">การเรียนรู้</a></li>
            <li class="list-inline-item me-3"><a class="text-muted" href="#">ระบบประเมิน</a></li>
            <li class="list-inline-item me-3"><a class="text-muted" href="#">ติดต่อเรา</a></li>
            <li class="list-inline-item me-3"><a class="text-muted" href="#">สำหรับผู้ดูแลระบบ</a></li>
          </ul>

          <p class="footer-copy text-muted small mt-3">
            © Copyright School of Lifelong Education, Chiang Mai University. All Rights Reserved
          </p>
        </div>

      </div>
    </div>
  </footer>

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/js/script.js'); ?>"></script>

  // ทำให้ Header เปลี่ยนเป็นสีขาวเมื่อเลื่อนลง
<script> document.addEventListener("scroll", function () {
  const header = document.querySelector(".site-header");
  if (window.scrollY > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});
</script>
</body>
</html>
