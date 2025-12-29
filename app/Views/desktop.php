<?= $this->include('includes/header.php'); ?>
<?= $this->include('includes/nav.php'); ?>

<!-- CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/desktop.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

<!-- CONTENT -->
<div class="container-fluid px-4 mt-4">

  <div class="d-flex justify-content-start align-items-center flex-wrap mb-3" style="margin-left:20px;">
      <div>
          <h3 class="fw-kanit m-0">สวัสดี, คุณ ทศพล ศรีนุญ</h3>
          <p class="text-muted m-0">ยินดีต้อนรับเข้าสู่ระบบ ProMPT การจัดการเรียนรู้ครบวงจร</p>
      </div>

       <div class="d-flex mt-2 mt-md-0" style="margin-left: 350px;">
          <button class="btn btn-success btn-twin-left ">Manage view</button>
          <a href="<?= base_url('learner'); ?>" class="btn btn-outline-secondary me-2 btn-twin-right">
            Learner view
          </a>
      </div>
  </div>

</div>

  <div class="col-8" style="margin-left: 40px;">
    <hr style="border: -1px solid gray !important;">
</div>

  <div class="row g-4">

    <!-- การ์ดด้านซ้าย -->
    <div class="col-lg-9">
      <div class="row g-4 cards-row">

        <div class="col-md-2 ">
          <div class="card card-prompt position-relative"><img src="<?= base_url('assets/img/desktop/img-dt1.png'); ?>">
            <div class="card-prompt-number">12 <br> <span class="label-text"><i class="bi bi-briefcase"></i> โครงการทั้งหมด</span>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card card-prompt position-relative"><img src="<?= base_url('assets/img/desktop/img-dt2.png'); ?>">
            <div class="card-prompt-number">6 <br> <span class="label-text"><i class="bi bi-briefcase"></i> โครงการที่ผ่าน </span>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card card-prompt position-relative"><img src="assets/img/desktop/img-dt3.png">
            <div class="card-prompt-number">124 <br><span class="label-text"><i class="bi bi-puzzle"></i> กิจกรรม </span>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card card-prompt position-relative"><img src="assets/img/desktop/img-dt4.png">
            <div class="card-prompt-number">321 <br><span class="label-text"> <i class="bi bi-people"></i> ผู้ผ่านหลักสูตร </span>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ปฏิทินด้านขวา -->
    <div class="col-lg-3">
      <div class="calendar-box">

        <!-- หัวปฏิทิน -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="fw-bold mb-0" id="cal-month-year"></h4>
          <div>
            <button class="btn btn-light btn-sm" id="prevMonth"><i class="bi bi-chevron-left"></i></button>
            <button class="btn btn-light btn-sm" id="nextMonth"><i class="bi bi-chevron-right"></i></button>
          </div>
        </div>

        <!-- ตารางปฏิทิน -->
        <table class="table text-center mb-0">
          <thead>
            <tr class="text-muted">
              <th>จ.</th><th>อ.</th><th>พ.</th><th>พฤ.</th><th>ศ.</th><th>ส.</th><th>อา.</th>
            </tr>
          </thead>
          <tbody id="calendar-body"></tbody>
        </table>

      </div>
    </div>

  </div>
</div>

<div class="container-fluid mt-4">

  <div class="row">

    <!-- ================= กราฟด้านซ้าย ================= -->
    <div class="col-lg-7 pe-4">

      <h4 class="fw-bold mb-1">สถิติผู้เข้าร่วมโครงการ</h4>
      <p class="text-muted">จำนวน (คน)</p>

      <div class="d-flex justify-content-end mb-2">
        <button class="btn btn-light shadow-sm">การขับเคลื่อนสุขภาวะชุมชนผ่าน...
        </button>
      </div>

      <div class="chart-box p-4 rounded shadow-sm">
        <canvas id="lineChart"></canvas>
      </div>

      <!-- Project Table -->
      <h4 class="fw mt-4">โครงการ 
        <small class="text-success">(ไปหน้าจัดการหลักสูตร)</small>
      </h4>

      <div class="d-flex justify-content-end mb-2">
        <button class="btn btn-light shadow-sm">
          <i class="bi bi-toggles2"></i> Filter
        </button>
      </div>

      <div class="table-responsive">
  <table class="table align-middle">
    <thead class="table-borderless">
      <tr class="text-muted">
        <th>ID</th>
        <th>Projects</th>
        <th>Status</th>
        <th class="text-end"></th>
      </tr>
    </thead>

    <tbody>

      <!-- แถวที่ 1 -->
      <tr>
        <td class="fw-semibold">MD660101</td>
        <td>
          การปฏิบัติงานสุขภาวะชุมชนผ่านการเรียนรู้ในรูปแบบ  <br> Inter-professional Education
        </td>

        <td>
          <span class="status-dot bg-success"></span> เสร็จสิ้น
        </td>

        <td class="text-end">
          <a class="btn btn-outline-secondary btn-sm">
            รายละเอียด <i class="bi bi-arrow-right"></i>
          </a>
        </td>
      </tr>

      <!-- แถวที่ 2 -->
      <tr>
        <td class="fw-semibold">MD660201</td>

        <td>
          “การยกระดับความรู้การคัดแยกขยะอินทรีย์ชาว <br> เพื่อการผลิตปุ๋ยที่มีคุณภาพ”
        </td>

        <td>
          <span class="status-dot bg-warning"></span> อยู่ระหว่างดำเนินการ
        </td>

        <td class="text-end">
          <a class="btn btn-outline-secondary btn-sm">
            รายละเอียด <i class="bi bi-arrow-right"></i>
          </a>
        </td>
      </tr>

      <!-- แถวที่ 3 -->
      <tr>
        <td class="fw-semibold">MD660301</td>

        <td>
          โครงการเสริมสร้างและพัฒนาคุณภาพชีวิตผู้สูงอายุในชุมชน
        </td>

        <td>
          <span class="status-dot bg-warning"></span> อยู่ระหว่างดำเนินการ
        </td>

        <td class="text-end">
          <a class="btn btn-outline-secondary btn-sm">
            รายละเอียด <i class="bi bi-arrow-right"></i>
          </a>
        </td>
      </tr>

      <!-- แถวที่ 4 -->
      <tr>
        <td class="fw-semibold">MD660101</td>

        <td>
          เทคโนโลยีกังหันเติมอากาศแบบทุ่นลอยด้วยพลังงานแสงอาทิตย์
          <br> เพื่อใช้ประโยชน์ในชุมชนต้นแบบเลี้ยงกุ้งอัจฉริยะสีเขียว
        </td>

        <td>
          <span class="status-dot bg-success"></span> เสร็จสิ้น
        </td>

        <td class="text-end">
          <a class="btn btn-outline-secondary btn-sm">
            รายละเอียด <i class="bi bi-arrow-right"></i>
          </a>
        </td>
      </tr>

      <!-- แถวที่ 5 -->
      <tr>
        <td class="fw-semibold">MD660201</td>

        <td>
          โครงการรักษ์ชุมชน คนท้องถิ่น
        </td>

        <td>
          <span class="status-dot bg-success"></span> เสร็จสิ้น
        </td>

        <td class="text-end">
          <a class="btn btn-outline-secondary btn-sm">
            รายละเอียด <i class="bi bi-arrow-right"></i>
          </a>
        </td>
      </tr>

    </tbody>
  </table>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-3">
  <nav>
    <ul class="pagination">

      <li class="page-item disabled">
        <a class="page-link"><</a>
      </li>

      <li class="page-item active">
        <a class="page-link">1</a>
      </li>

      <li class="page-item"><a class="page-link">2</a></li>
      <li class="page-item"><a class="page-link">3</a></li>
      <li class="page-item"><a class="page-link">4</a></li>

      <li class="page-item">
        <a class="page-link">></a>
      </li>

    </ul>
  </nav>
</div>


    </div>

    <!-- ================= Sidebar ขวา ================= -->
    <div class="col-lg-4 sidebar-box">

      <h5 class="fw-bold mb-3">กิจกรรมที่กำลังจะมาถึง</h5>

      <div class="activity-card p-3 mb-3 rounded shadow-sm">
        <h6 class="fw" >WORKSHOP “ฟูมฟักทักษะสำคัญในชีวิตและ <br> การทำงาน SKILLS4LIFE”</h6>

        <p class="text-muted mb-1">
          <i class="bi bi-geo-alt-fill text-success" ></i>
          ณ คณะเภสัชศาสตร์ มหาวิทยาลัยเชียงใหม่
        </p>

        <p class="text-muted mb-2">
          <i class="bi bi-calendar-event-fill text-success"></i>
          16 พฤษภาคม 2566
        </p>

        <a href="#" class="detail-link text-success fw-bold  ">Detail 
          <i class="bi bi-arrow-right">           
          </i>
        </a>
      </div>

      <div class="activity-card p-3 mb-3 rounded shadow-sm">
        <h6 class="fw">WORKSHOP “หลักสูตรความเข้าใจในอคติ <br> (UNDERSTANDING BIASES)”</h6>

        <p class="text-muted mb-1">
          <i class="bi bi-geo-alt-fill text-warning"></i>
          ณ มหาวิทยาลัยเชียงใหม่
        </p>

        <p class="text-muted mb-2">
          <i class="bi bi-calendar-event-fill text-warning"></i>
          16 พฤษภาคม 2566
        </p>

        <a href="#" class="detail-link text-warning fw-bold">Detail 
          <i class="bi bi-arrow-right">
          </i>
        </a>
      </div>

      <div class="activity-card p-3 mb-3 rounded shadow-sm">
        <h6 class="fw">WORKSHOP “ฟูมฟักทักษะสำคัญในชีวิตและ <br> การทำงาน SKILLS4LIFE”</h6>

        <p class="text-muted mb-1">
          <i class="bi bi-geo-alt-fill text-success"></i>
          ณ คณะเภสัชศาสตร์ มหาวิทยาลัยเชียงใหม่
        </p>

        <p class="text-muted mb-2">
          <i class="bi bi-calendar-event-fill text-success"></i>
          16 พฤษภาคม 2566
        </p>

        <a href="#" class="detail-link text-success fw-bold">Detail 
          <i class="bi bi-arrow-right">
          </i>
        </a>
      </div>

      <div class="activity-card p-3 mb-3 rounded shadow-sm">
        <h6 class="fw">WORKSHOP “หลักสูตรความเข้าใจในอคติ <br> (UNDERSTANDING BIASES)”</h6>

        <p class="text-muted mb-1">
          <i class="bi bi-geo-alt-fill text-warning"></i>
          ณ มหาวิทยาลัยเชียงใหม่
        </p>

        <p class="text-muted mb-2">
          <i class="bi bi-calendar-event-fill text-warning"></i>
          16 พฤษภาคม 2566
        </p>

        <a href="#" class="detail-link text-warning fw-bold">Detail 
          <i class="bi bi-arrow-right">
          </i>
        </a>
      </div>

      <div class="activity-card p-3 mb-3 rounded shadow-sm">
        <h6 class="fw">WORKSHOP “ฟูมฟักทักษะสำคัญในชีวิตและ <br> การทำงาน SKILLS4LIFE”</h6>

        <p class="text-muted mb-1">
          <i class="bi bi-geo-alt-fill text-success"></i>
          ณ คณะเภสัชศาสตร์ มหาวิทยาลัยเชียงใหม่
        </p>

        <p class="text-muted mb-2">
          <i class="bi bi-calendar-event-fill text-success"></i>
          16 พฤษภาคม 2566
        </p>

        <a href="#" class="detail-link text-success fw-bold">Detail 
          <i class="bi bi-arrow-right">
          </i>
        </a>
      </div>

    </div>

  </div>
</div>
  
<?= $this->include('includes/scripts.php'); ?>
<?= $this->include('includes/footer.php'); ?>


