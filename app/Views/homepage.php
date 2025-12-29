<?= $this->include('includes/header.php'); ?>
  <!-- โหลดไฟล์ CSS ภายในโปรเจค -->
  <link rel="stylesheet" href="<?= base_url('assets/css/homepage.css'); ?>">
  
  <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

  <!-- =========================== NAVBAR =========================== -->
  <header class="site-header fixed-top">
    <!-- Navbar หลักของเว็บไซต์ -->
    <nav class="navbar navbar-expand-md main-navbar">
      <div class="container">

        <!-- โลโก้ด้านซ้ายบนของ navbar -->
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="ProMPT" class="me-2 logo-navbar">
        </a>

        <!-- ปุ่ม toggler สำหรับเปิดเมนูบนจอมือถือ -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- เมนูด้านขวา -->
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto align-items-center">

             <!-- ปุ่มเข้าสู่ระบบ -->
            <li class="nav-item ms-3">
              <a class="btn btn-outline-light btn-login" href="#">เข้าสู่ระบบ</a>
            </li>

            <!-- ปุ่มสมัครสมาชิก -->
            <li class="nav-item ms-2">
              <a class="btn btn-orange btn-register" href="<?= base_url('login'); ?>">สมัครสมาชิก</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

  <!-- =========================== HERO SECTION =========================== -->
<section class="hero-section">

  <!-- พื้นหลัง hero -->
  <img src="<?= base_url('assets/img/homepage/hero-bg.svg'); ?>" class="hero-bg">

  <!-- เลเยอร์ทับสำหรับใส่เอฟเฟกต์มืด -->
  <div class="hero-overlay"></div>

  <!-- เนื้อหา hero -->
  <div class="container hero-container d-flex justify-content-center align-items-center text-center" style="height: 100vh;">

    <div class="row w-100">
      <div class="col-lg-7 mx-auto">

        <!-- หัวข้อหลัก + ปุ่ม -->
        <div class="hero-content text-white">

          <h1 class="hero-title">
            <strong> จัดการโครงการ </strong> พัฒนาหลักสูตร <br> ต่อยอดกิจกรรม <strong> แบบครบวงจร </strong>
          </h1>

            <div class="mt-4 hero-btn-wrapper">
              <a class="btn btn-hero-cta" href="<?= base_url('login'); ?>"> เริ่มต้นใช้งาน →
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- =========================== FEATURE CARDS =========================== -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center g-4">

        <!-- คอลัมน์ซ้าย: ข้อความอธิบายโครงการ -->
        <div class="col-lg-6">
          <div class="feature-intro p-4">

            <!-- โลโก้ในส่วน Feature -->
            <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="ProMPT" class="me-2 logo-img">

            <!-- ข้อความคำอธิบาย -->
            <p class="text-muted mt-3">
              ระบบจัดการโครงการการเรียนรู้และส่งเสริมองค์ความรู้สำหรับผู้สูงวัยในการสนับสนุนกิจกรรมการเรียนรู้ 
              และส่งเสริมการพัฒนาผลิตภัณท์ และภูมิปัญญาสำหรับผู้สูงวัยและเพิ่มช่องทางรายได้ของกลุ่มผู้ประกอบการผลิตภัณท์ 
              หรือบริการที่เข้าร่วม
            </p>

            <!-- ปุ่มเรียนรู้ -->
            <a class="btn btn-project-cta btn-sm mt-3" href="#">เรียนรู้โครงการ</a>

          </div>
        </div>

        <!-- คอลัมน์ขวา: กล่องฟีเจอร์แบบเลื่อน -->
        <div class="col-lg-6">
            <div class="scroll-board-wrapper position-relative">

        <!-- วงกลมพื้นหลัง -->
          <div class="bg-circle"></div>

        <!-- กรอบเลื่อนแนวนอน -->
          <div class="scroll-board d-flex gap-3 overflow-auto py-2">

            <!-- CARD 1 -->
              <div class="card feature-card p-3 shadow-sm text-center" style="min-width: 250px;">
                <div class="icon-circle orange">
                  <i class="bi bi-easel"></i>
                </div>
                <h4 class="mt-2">การบริหารโครงการ</h4>
                <p class="text-muted mb-0">
                  ระบบการบริหารทีมและจัดการโครงการแบบเป็นระบบและครบวงจร
                </p>
              </div>

            <!-- CARD 2 -->
              <div class="card feature-card p-3 shadow-sm text-center" style="min-width: 250px;">
                <div class="icon-circle blue">
                  <i class="bi bi-briefcase"></i>
                </div>
                <h4 class="mt-2">การยื่นโครงการ</h4>
                <p class="text-muted mb-0">
                  สามารถยื่นโครงการเพื่อขอประเมินการรับทุนได้อย่างสะดวกและรวดเร็ว
                </p>
              </div>

            <!-- CARD 3 -->
              <div class="card feature-card p-3 shadow-sm text-center" style="min-width: 250px;">
                <div class="icon-circle green">
                  <i class="bi bi-mortarboard"></i>
                </div>
                <h4 class="mt-2">หลักสูตรการเรียนรู้</h4>
                <p class="text-muted mb-0">
                  หลักสูตรมากมายเพื่อการจัดการโครงการทั้งแบบออนไลน์และแบบอบรมเชิงปฏิบัติ
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================== CONTENT SECTION 1 =========================== -->
  <section class="py-5 ">
    <div class="container">
      <div class="row align-items-center g-4">

        <!-- ภาพประกอบด้านซ้าย -->
        <div class="col-md-6">
          <div class="illus-box p-4">
            <img src="<?= base_url('assets/img/homepage/img1.svg'); ?>" class="img-fluid">
          </div>
        </div>

        <!-- เนื้อหาด้านขวา -->
  <div class="col-md-6">
      <h3>การบริหารโครงการ</h3>
        <p class="text-muted"> จัดระเบียบโครงการด้วยโปรเจคทาสก์และสามารถติดตามการดำเนินงานของโครงการได้อย่างครอบคลุม
        </p>
          <ul class="list-unstyled">
          <li class="d-flex align-items-start mb-3">
      <div class="list-icon orange">
        <i class="bi bi-journal-bookmark"></i>
      </div>
        <div class="ms-3">
          <div class="fw-semibold">ระบบโปรเจคทาสก์</div>
        <p class="text-muted mb-0">
          กำหนดทาสก์ในการทำงาน ทำให้คุณสามารถติดตามงานได้อย่างครบถ้วน
        </p>
        </div>
          </li>

            <li class="d-flex align-items-start mb-3">
              <div class="list-icon orange">
              <i class="bi bi-pie-chart"></i>
              </div>
              <div class="ms-3">
                  <div class="fw-semibold">การติดตามโครงการ</div>
                  <p class="text-muted mb-0">
                    สามารถติดตามสถิติของโครงการ ช่วยให้คุณและทีมคุณ แก้ไขและพัฒนาโครงการได้อย่างสะดวก
                  </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================== CONTENT SECTION 2 =========================== -->
  <section class="py-5 ">
    <div class="container">
      <div class="row align-items-center g-4">

        <!-- ภาพประกอบด้านขวา -->
        <div class="col-md-6 order-md-2">
          <div class="illus-box p-4 text-end">
            <img src="<?= base_url('assets/img/homepage/img2.svg'); ?>" class="img-fluid">
          </div>
        </div>

        <!-- เนื้อหาด้านซ้าย -->
        <div class="col-md-6 order-md-1">
          <h4>การยื่นข้อเสนอโครงการ</h4>
          <p class="text-muted">
            โครงการที่คุณสร้างสามารถยื่นข้อเสนอเพื่อได้รับการประเมินภายในระบบได้
          </p>

      <ul class="list-unstyled">
          <li class="d-flex align-items-start mb-3">
            <div class="list-icon orange">
              <i class="bi bi-clipboard-data"></i>
            </div>
          <div class="ms-3">
            <div class="fw-semibold">ระบบประเมินโครงการ</div>
                <p class="text-muted mb-0">
                ผู้ทรงคุณวุฒิจะทำการประเมินโครงการของคุณ
                </p>
          </div>
        </li>

          <li class="d-flex align-items-start mb-3">
            <div class="list-icon orange">
              <i class="bi bi-bar-chart"></i>
            </div>
              <div class="ms-3">
                <div class="fw-semibold">ระบบการรับทุน</div>
                <p class="text-muted mb-0">
                  เมื่อผ่านการประเมิน คุณจะได้รับทุนเพื่อต่อยอดโครงการ
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================== CONTENT SECTION 3 =========================== -->
  <section class="py-5 ">
    <div class="container">
      <div class="row align-items-center g-4">

        <!-- ภาพประกอบด้านซ้าย -->
        <div class="col-md-6">
          <div class="illus-box p-4">
            <img src="<?= base_url('assets/img/homepage/img3.svg'); ?>" class="img-fluid">
          </div>
        </div>

        <!-- เนื้อหาด้านขวา -->
        <div class="col-md-6">
          <h3>หลักสูตรการเรียนรู้</h3>
          <p class="text-muted">
            หลักสูตรทั้งแบบออนไลน์และแบบอบรมเชิงปฏิบัติ
          </p>

          <ul class="list-unstyled">
          <li class="d-flex align-items-start mb-3">
            <div class="list-icon orange">
              <i class="bi bi-pc-display-horizontal"></i>
            </div>
          <div class="ms-3">
            <div class="fw-semibold">เรียนรู้ออนไลน์</div>
                <p class="text-muted mb-0">
                Lorem Ipsum is simply dummy text
                </p>
          </div>
        </li>

          <li class="d-flex align-items-start mb-3">
            <div class="list-icon orange">
              <i class="bi bi-puzzle"></i>
            </div>
              <div class="ms-3">
                <div class="fw-semibold">กิจกรรม workshop</div>
                <p class="text-muted mb-0">
                  Lorem Ipsum is simply dummy text
                </p>
              </div>
            </li>
          </div>
      </div>
    </div>
  </section>

  <!-- =========================== CTA BAR =========================== -->
  <section class="cta-bar py-5" 
    style="background-image: url('<?= base_url("assets/img/homepage/bg.svg"); ?>');">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- ข้อความ CTA -->
      <div class="title-wrapper d-flex align-items-center gap-3">
        <div class="icon-circle orange">
          <i class="bi bi-send"></i>
        </div>
        <h4 class="mb-0 text-white">เริ่มต้นใช้งานระบบไปกับเรา</h4>
     </div>

      <!-- ปุ่ม CTA -->
      <a class="btn btn-hero-cta" href="#"> เริ่มเข้าสู่ระบบ → </a>

    </div>
  </section>

  <?= $this->include('includes/footer.php'); ?>
  <?= $this->include('includes/scripts.php'); ?>
  <!-- =========================== JS Scripts เฉพาะhomepage =========================== -->
  <!-- ทำให้ Header เปลี่ยนสีเมื่อเลื่อน -->
  <script>
    document.addEventListener("scroll", function () {
      const header = document.querySelector(".site-header");

      /* ถ้าเลื่อนลงเกิน 50px ให้เพิ่ม class scrolled เพื่อทำ header สีขาว */
      if (window.scrollY > 50) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });
  </script>
</body>
</html>